<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1485397879.
 * Generated on 2017-01-25 20:31:19 by kcornejo
 */
class PropelMigration_1485397879
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
    ADD `materia_id` INTEGER AFTER `etiqueta`;

CREATE INDEX `archivo_FI_2` ON `archivo` (`materia_id`);

ALTER TABLE `archivo` ADD CONSTRAINT `archivo_FK_2`
    FOREIGN KEY (`materia_id`)
    REFERENCES `materia` (`id`);

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

ALTER TABLE `archivo` DROP FOREIGN KEY `archivo_FK_2`;

DROP INDEX `archivo_FI_2` ON `archivo`;

ALTER TABLE `archivo` DROP `materia_id`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}