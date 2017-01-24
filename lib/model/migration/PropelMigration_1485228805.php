<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1485228805.
 * Generated on 2017-01-23 21:33:25 by kcornejo
 */
class PropelMigration_1485228805
{

    public function preUp($manager)
    {
        // add the pre-migration code here
    }

    public function postUp($manager)
    {
        // add the post-migration code here
    }

    public function preDown($manager)
    {
        // add the pre-migration code here
    }

    public function postDown($manager)
    {
        // add the post-migration code here
    }

    /**
     * Get the SQL statements for the Up migration
     *
     * @return array list of the SQL strings to execute for the Up migration
     *               the keys being the datasources
     */
    public function getUpSQL()
    {
        return array (
  'propel' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP INDEX `llave` ON `usuario`;

ALTER TABLE `usuario`
    ADD `universidad_id` INTEGER AFTER `updated_by`,
    ADD `carrera_id` INTEGER AFTER `universidad_id`;

CREATE INDEX `usuario_FI_2` ON `usuario` (`universidad_id`);

CREATE INDEX `usuario_FI_3` ON `usuario` (`carrera_id`);

ALTER TABLE `usuario` ADD CONSTRAINT `usuario_FK_2`
    FOREIGN KEY (`universidad_id`)
    REFERENCES `universidad` (`id`);

ALTER TABLE `usuario` ADD CONSTRAINT `usuario_FK_3`
    FOREIGN KEY (`carrera_id`)
    REFERENCES `carrera` (`id`);

CREATE TABLE `usuario_materia`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario_id` INTEGER,
    `materia_id` INTEGER,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `created_by` VARCHAR(32),
    `updated_by` VARCHAR(32),
    PRIMARY KEY (`id`),
    INDEX `usuario_materia_FI_1` (`usuario_id`),
    INDEX `usuario_materia_FI_2` (`materia_id`),
    CONSTRAINT `usuario_materia_FK_1`
        FOREIGN KEY (`usuario_id`)
        REFERENCES `usuario` (`id`),
    CONSTRAINT `usuario_materia_FK_2`
        FOREIGN KEY (`materia_id`)
        REFERENCES `materia` (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

    /**
     * Get the SQL statements for the Down migration
     *
     * @return array list of the SQL strings to execute for the Down migration
     *               the keys being the datasources
     */
    public function getDownSQL()
    {
        return array (
  'propel' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `usuario_materia`;

ALTER TABLE `usuario` DROP FOREIGN KEY `usuario_FK_2`;

ALTER TABLE `usuario` DROP FOREIGN KEY `usuario_FK_3`;

DROP INDEX `usuario_FI_2` ON `usuario`;

DROP INDEX `usuario_FI_3` ON `usuario`;

ALTER TABLE `usuario` DROP `universidad_id`;

ALTER TABLE `usuario` DROP `carrera_id`;

CREATE BTREE INDEX `llave` ON `usuario` (`usuario`);

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}