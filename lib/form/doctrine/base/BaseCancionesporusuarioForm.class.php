<?php

/**
 * Cancionesporusuario form base class.
 *
 * @method Cancionesporusuario getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCancionesporusuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'logintitular'     => new sfWidgetFormInputHidden(),
      'idcancionusuario' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'logintitular'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('logintitular')), 'empty_value' => $this->getObject()->get('logintitular'), 'required' => false)),
      'idcancionusuario' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcancionusuario')), 'empty_value' => $this->getObject()->get('idcancionusuario'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cancionesporusuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cancionesporusuario';
  }

}
