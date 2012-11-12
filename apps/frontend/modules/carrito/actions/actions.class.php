<?php

/**
 * carrito actions.
 *
 * @package    MusicStore
 * @subpackage carrito
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class carritoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->carritos = Doctrine_Core::getTable('Carrito')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->carrito = Doctrine_Core::getTable('Carrito')->find(array($request->getParameter('idcompra')));
    $this->forward404Unless($this->carrito);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CarritoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CarritoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($carrito = Doctrine_Core::getTable('Carrito')->find(array($request->getParameter('idcompra'))), sprintf('Object carrito does not exist (%s).', $request->getParameter('idcompra')));
    $this->form = new CarritoForm($carrito);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($carrito = Doctrine_Core::getTable('Carrito')->find(array($request->getParameter('idcompra'))), sprintf('Object carrito does not exist (%s).', $request->getParameter('idcompra')));
    $this->form = new CarritoForm($carrito);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($carrito = Doctrine_Core::getTable('Carrito')->find(array($request->getParameter('idcompra'))), sprintf('Object carrito does not exist (%s).', $request->getParameter('idcompra')));
    $carrito->delete();

    $this->redirect('carrito/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $carrito = $form->save();

      $this->redirect('carrito/edit?idcompra='.$carrito->getIdcompra());
    }
  }
}
