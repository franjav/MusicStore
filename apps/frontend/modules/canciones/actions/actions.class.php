<?php

/**
 * canciones actions.
 *
 * @package    MusicStore
 * @subpackage canciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cancionesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->setLayout('layout');
    $this->cancioness = Doctrine_Core::getTable('Canciones')
      ->createQuery('a')
      ->execute();
  }

  
  public function executeNombre(sfWebRequest $request)
  {
     $pCanciones = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $pCanciones = Doctrine_Core::getTable('canciones')->findOneBynombreCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->pCanciones= $pCanciones;
  }
  
  public function executeInterprete(sfWebRequest $request)
  {
     $iCanciones = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $iCanciones = Doctrine_Core::getTable('canciones')->findOneBynombreCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->iCanciones= $iCanciones;
  }
  
  
   public function executeGenero(sfWebRequest $request)
  {
     $pCanciones = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $pCanciones = Doctrine_Core::getTable('canciones')->findOneBynombreCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->pCanciones= $pCanciones;
  }
  
  
   public function executeAlbum(sfWebRequest $request)
  {
     $pCanciones = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $pCanciones = Doctrine_Core::getTable('canciones')->findOneBynombreCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->pCanciones= $pCanciones;
  }
  
  
public function executeBuscar(sfWebRequest $request)
  {
        // inicializando variables
        $aCanciones = array();
        // tomando los datos del formulario
        $txt_identificacion = $this->getRequestParameter('txt_identificacion');

        if ($this->getRequest()->getMethod() == sfRequest::POST) {
            //echo ("$txt_identificacion");
            $aCanciones = Doctrine_Core::getTable('canciones')->findOneBynombreCancion("$txt_identificacion");
        }

        // asignando variables para ser usadas en el template
        $this->txt_identificacion = $txt_identificacion;
        $this->aCanciones= $aCanciones;
  }
  
  
  public function executeShow(sfWebRequest $request)
  {
    $this->canciones = Doctrine_Core::getTable('Canciones')->find(array($request->getParameter('idcanciones')));
    $this->forward404Unless($this->canciones);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->setLayout('layout_sn');
    $this->form = new CancionesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CancionesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($canciones = Doctrine_Core::getTable('Canciones')->find(array($request->getParameter('idcanciones'))), sprintf('Object canciones does not exist (%s).', $request->getParameter('idcanciones')));
    $this->form = new CancionesForm($canciones);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($canciones = Doctrine_Core::getTable('Canciones')->find(array($request->getParameter('idcanciones'))), sprintf('Object canciones does not exist (%s).', $request->getParameter('idcanciones')));
    $this->form = new CancionesForm($canciones);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($canciones = Doctrine_Core::getTable('Canciones')->find(array($request->getParameter('idcanciones'))), sprintf('Object canciones does not exist (%s).', $request->getParameter('idcanciones')));
    $canciones->delete();

    $this->redirect('canciones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {  
        $file = $form->getValue('ruta');
        //Hay que recuperar el login del usuario
       $user = "\juan23";
       $filename = '\load'.($file->getOriginalName());
       $extension = $file->getExtension($file->getOriginalExtension());
       $pistamp3 = sfConfig::get('sf_upload_dir') . $user . $filename ;
       $file->save($pistamp3);
      $canciones = $form->save();

      $this->redirect('canciones/index');
    }
  }
}
