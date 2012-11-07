<?php

/**
 * Usuarios form base class.
 *
 * @method Usuarios getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'login'           => new sfWidgetFormInputHidden(),
      'contrasena'      => new sfWidgetFormInputText(),
      'correo'          => new sfWidgetFormInputText(),
      'nombres'         => new sfWidgetFormInputText(),
      'apellidos'       => new sfWidgetFormInputText(),
      'sexo'            => new sfWidgetFormInputText(),
      'fechanacimiento' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'login'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('login')), 'empty_value' => $this->getObject()->get('login'), 'required' => false)),
      'contrasena'      => new sfValidatorString(array('max_length' => 8)),
      'correo'          => new sfValidatorString(array('max_length' => 45)),
      'nombres'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'apellidos'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sexo'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'fechanacimiento' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

}
