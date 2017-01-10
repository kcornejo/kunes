<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1481494415.
 * Generated on 2016-12-11 16:13:35 by kcornejo
 */
class PropelMigration_1481494415
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

ALTER TABLE `archivo` CHANGE `nombre_archivo_original` `nombre_archivo_original` VARCHAR(100);

ALTER TABLE `archivo` CHANGE `nombre_archivo_actual` `nombre_archivo_actual` VARCHAR(100);

CREATE INDEX `archivo_I_1` ON `archivo` (`estado`);

CREATE INDEX `archivo_I_2` ON `archivo` (`descripcion`);

CREATE INDEX `archivo_I_3` ON `archivo` (`etiqueta`);

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

DROP INDEX `archivo_I_1` ON `archivo`;

DROP INDEX `archivo_I_2` ON `archivo`;

DROP INDEX `archivo_I_3` ON `archivo`;

ALTER TABLE `archivo` CHANGE `nombre_archivo_original` `nombre_archivo_original` VARCHAR(50);

ALTER TABLE `archivo` CHANGE `nombre_archivo_actual` `nombre_archivo_actual` VARCHAR(50);

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
    }

}