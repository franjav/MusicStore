<?php

/**
 * Carrito form base class.
 *
 * @method Carrito getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCarritoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcompra'          => new sfWidgetFormInputHidden(),
      'logincomprador'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => false)),
      'idcancioncomprada' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Disponibles'), 'add_empty' => false)),
      'fecha'             => new sfWidgetFormDate(),
      'precio'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcompra'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcompra')), 'empty_value' => $this->getObject()->get('idcompra'), 'required' => false)),
      'logincomprador'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'))),
      'idcancioncomprada' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Disponibles'))),
      'fecha'             => new sfValidatorDate(array('required' => false)),
      'precio'            => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('carrito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Carrito';
  }

}
