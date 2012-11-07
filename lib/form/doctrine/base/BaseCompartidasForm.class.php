<?php

/**
 * Compartidas form base class.
 *
 * @method Compartidas getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompartidasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'loginremitente'      => new sfWidgetFormInputHidden(),
      'idcancioncompartida' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cancionesporusuario_2'), 'add_empty' => false)),
      'logindestinatario'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'loginremitente'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('loginremitente')), 'empty_value' => $this->getObject()->get('loginremitente'), 'required' => false)),
      'idcancioncompartida' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cancionesporusuario_2'))),
      'logindestinatario'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'))),
    ));

    $this->widgetSchema->setNameFormat('compartidas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Compartidas';
  }

}
