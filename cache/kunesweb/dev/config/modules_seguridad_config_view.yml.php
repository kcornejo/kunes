<?php
// auto-generated by sfViewConfigHandler
// date: 2017/01/06 23:55:14
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'loginSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'registrarSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'recuperaclaveSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'recuperaSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'loginSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Pos Via,punto de venta virtual', false, false);
  $response->addMeta('description', 'Plan', false, false);
  $response->addMeta('keywords', 'tendencias, manuales , conformidades', false, false);
  $response->addMeta('language', 'es', false, false);


}
else if ($templateName.$this->viewName == 'registrarSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Pos Via,punto de venta virtual', false, false);
  $response->addMeta('description', 'Plan', false, false);
  $response->addMeta('keywords', 'tendencias, manuales , conformidades', false, false);
  $response->addMeta('language', 'es', false, false);


}
else if ($templateName.$this->viewName == 'recuperaclaveSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Pos Via,punto de venta virtual', false, false);
  $response->addMeta('description', 'Plan', false, false);
  $response->addMeta('keywords', 'tendencias, manuales , conformidades', false, false);
  $response->addMeta('language', 'es', false, false);


}
else if ($templateName.$this->viewName == 'recuperaSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Pos Via,punto de venta virtual', false, false);
  $response->addMeta('description', 'Plan', false, false);
  $response->addMeta('keywords', 'tendencias, manuales , conformidades', false, false);
  $response->addMeta('language', 'es', false, false);


}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Pos Via,punto de venta virtual', false, false);
  $response->addMeta('description', 'Plan', false, false);
  $response->addMeta('keywords', 'tendencias, manuales , conformidades', false, false);
  $response->addMeta('language', 'es', false, false);


}
