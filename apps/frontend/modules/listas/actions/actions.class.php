<?php

/**
 * listas actions.
 *
 * @package    MusicStore
 * @subpackage listas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class listasActions extends sfActions
{
    
  public function executeIndex(sfWebRequest $request)
  {
    $this->setLayout('layout');
    $this->listass = Doctrine_Core::getTable('Listas')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->listas = Doctrine_Core::getTable('Listas')->find(array($request->getParameter('nombrelistas'),
                                                     $request->getParameter('loginduenolista')));
    $this->forward404Unless($this->listas);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->setLayout('layout_sn');
    $this->form = new ListasForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ListasForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($listas = Doctrine_Core::getTable('Listas')->find(array($request->getParameter('nombrelistas'),
                               $request->getParameter('loginduenolista'))), sprintf('Object listas does not exist (%s).', $request->getParameter('nombrelistas'),
                               $request->getParameter('loginduenolista')));
    $this->form = new ListasForm($listas);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($listas = Doctrine_Core::getTable('Listas')->find(array($request->getParameter('nombrelistas'),
                               $request->getParameter('loginduenolista'))), sprintf('Object listas does not exist (%s).', $request->getParameter('nombrelistas'),
                               $request->getParameter('loginduenolista')));
    $this->form = new ListasForm($listas);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($listas = Doctrine_Core::getTable('Listas')->find(array($request->getParameter('nombrelistas'),
                               $request->getParameter('loginduenolista'))), sprintf('Object listas does not exist (%s).', $request->getParameter('nombrelistas'),
                               $request->getParameter('loginduenolista')));
    $listas->delete();

    $this->redirect('listas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $listas = $form->save();

      $this->redirect('listas/edit?nombrelistas='.$listas->getNombrelistas().'&loginduenolista='.$listas->getLoginduenolista());
    }
  }
}
