<?php

/**
 * Cancionesporlista form base class.
 *
 * @method Cancionesporlista getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCancionesporlistaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'loginpropietario' => new sfWidgetFormInputHidden(),
      'nombrelista'      => new sfWidgetFormInputHidden(),
      'idcancionlista'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'loginpropietario' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('loginpropietario')), 'empty_value' => $this->getObject()->get('loginpropietario'), 'required' => false)),
      'nombrelista'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nombrelista')), 'empty_value' => $this->getObject()->get('nombrelista'), 'required' => false)),
      'idcancionlista'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcancionlista')), 'empty_value' => $this->getObject()->get('idcancionlista'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cancionesporlista[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cancionesporlista';
  }

}
