<?php

/**
 * Skeleton subclass for performing query and update operations on the 'parametro' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sat Sep 10 22:15:46 2016
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class ParametroPeer extends BaseParametroPeer {

    static function obtenerValor($tipo) {
        $valor = '';
        $Parametro = ParametroQuery::create()
                ->findOneByDescripcion($tipo);
        if ($Parametro) {
            $valor = $Parametro->getValor();
        }
        return $valor;
    }

}
