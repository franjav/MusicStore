<?php
// auto-generated by sfViewConfigHandler
// date: 2012/11/06 03:23:13
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('main2.css', '', array ());
  $response->addJavascript('hideshow.js', '', array ());
  $response->addJavascript('jquery-1.5.2.min.js', '', array ());
  $response->addJavascript('jquery.equalHeight.js', '', array ());
  $response->addJavascript('jquery.tablesorter.min.js', '', array ());
  $response->addJavascript('audio-player.js', '', array ());


