<?php

/**
 * archivo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage archivo
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseArchivoGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'archivo' : 'archivo_'.$action;
  }

  public function linkToMoveUp($object, $params)
  {
    if ($object->isFirst())
    {
      return '<li class="sf_admin_action_moveup disabled"><span>'.__($params['label'], array(), 'sf_admin').'</span></li>';
}

    if (empty($params['action']))
    {
      $params['action'] = 'moveUp';
    }

    return '<li class="sf_admin_action_moveup">'.link_to(__($params['label'], array(), 'sf_admin'), 'archivo/'.$params['action'].'?id='.$object->getId()).'</li>';
  }

  public function linkToMoveDown($object, $params)
  {
    if ($object->isLast())
    {
      return '<li class="sf_admin_action_movedown disabled"><span>'.__($params['label'], array(), 'sf_admin').'</span></li>';
    }

    if (empty($params['action']))
    {
      $params['action'] = 'moveDown';
    }

    return '<li class="sf_admin_action_movedown">'.link_to(__($params['label'], array(), 'sf_admin'), 'archivo/'.$params['action'].'?id='.$object->getId()).'</li>';
  }
  public function getLinkToAction(){

    $params['class'] = 'btn btn-xs';
  }
}
