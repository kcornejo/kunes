<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1487741624.
 * Generated on 2017-02-21 23:33:44 by kenny
 */
class PropelMigration_1487741624
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

ALTER TABLE `archivo`
    ADD `profesores_id` INTEGER AFTER `materia_id`;

CREATE INDEX `archivo_FI_3` ON `archivo` (`profesores_id`);

ALTER TABLE `archivo` ADD CONSTRAINT `archivo_FK_3`
    FOREIGN KEY (`profesores_id`)
    REFERENCES `profesores` (`id`);

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

ALTER TABLE `archivo` DROP FOREIGN KEY `archivo_FK_3`;

DROP INDEX `archivo_FI_3` ON `archivo`;

ALTER TABLE `archivo` DROP `profesores_id`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}