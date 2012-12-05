<?php

/**
 * disponibles actions.
 *
 * @package    MusicStore
 * @subpackage disponibles
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class disponiblesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    
    $this->setLayout('layout');
    $this->disponibless = Doctrine_Core::getTable('Disponibles')
      ->createQuery('a')
      ->execute();
  }
  public function executeAdd(sfWebRequest $request)
  {
        // inicializando variables
        $cDisponibles = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $cDisponibles = Doctrine_Core::getTable('disponibles')->findOneByidCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->aDisponibles = $cDisponibles;
  }
 public function executeBuscar(sfWebRequest $request)
  {
        $this->setLayout('layout_sn');    
        // inicializando variables
        $aDisponibles = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $aDisponibles = Doctrine_Core::getTable('disponibles')->findOneBynombreCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->aDisponibles = $aDisponibles;
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->disponibles = Doctrine_Core::getTable('Disponibles')->find(array($request->getParameter('iddisponibles')));
    $this->forward404Unless($this->disponibles);
  }
   public function executeBorrar(sfWebRequest $request)
  { 
               // inicializando variables
        $dDisponibles = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $dDisponibles = Doctrine_Core::getTable('disponibles')->findOneByidCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->aDisponibles = $dDisponibles;
  }
  
   public function executeNorecomend(sfWebRequest $request)
  { 
       $this->setLayout('layout_sn');
               // inicializando variables
        $fDisponibles = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $fDisponibles = Doctrine_Core::getTable('disponibles')->findOneByidCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->aDisponibles = $fDisponibles;
  }
  
  
  

  public function executeRecomend(sfWebRequest $request)
  { 
      $this->setLayout('layout_sn');
               // inicializando variables
        $eDisponibles = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $eDisponibles = Doctrine_Core::getTable('disponibles')->findOneByidCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->aDisponibles = $eDisponibles;
  }
  
  
  
  
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DisponiblesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new DisponiblesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($disponibles = Doctrine_Core::getTable('Disponibles')->find(array($request->getParameter('iddisponibles'))), sprintf('Object disponibles does not exist (%s).', $request->getParameter('iddisponibles')));
    $this->form = new DisponiblesForm($disponibles);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($disponibles = Doctrine_Core::getTable('Disponibles')->find(array($request->getParameter('iddisponibles'))), sprintf('Object disponibles does not exist (%s).', $request->getParameter('iddisponibles')));
    $this->form = new DisponiblesForm($disponibles);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($disponibles = Doctrine_Core::getTable('Disponibles')->find(array($request->getParameter('iddisponibles'))), sprintf('Object disponibles does not exist (%s).', $request->getParameter('iddisponibles')));
    $disponibles->delete();

    $this->redirect('disponibles/index');
  }

   protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {  
        $file = $form->getValue('ruta');
        //Hay que recuperar el login del usuario
       $user = "admin";
       $filename = 'compra'.($file->getOriginalName());
       $extension = $file->getExtension($file->getOriginalExtension());
       $pistamp3 = sfConfig::get('sf_upload_dir') . '/'. $user . '/' . $filename . $extension;
       $file->save($pistamp3);
      $canciones = $form->save();

      $this->redirect('disponibles/index');
    }
  }
}