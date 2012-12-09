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
abstract class BaseLoginForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'login'       => new sfWidgetFormInput(),
      'contraseña'  => new sfWidgetFormInputPassword(),
    ));

    $this->setValidators(array(
      'login'        => new sfValidatorString(array('required'=>true), array('required'=>'El login es obligatorio')),
      'contraseña'   => new sfValidatorString(array('required'=>true), array('required'=>'Escribe tu contraseña')),
    ));

    $this->widgetSchema->setNameFormat('loginx[%s]');
    //$this->widgetSchema->setFormFormatterName('list');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }
  
   
    //$this->widgetSchema->setFormFormatterName('list');
  

}

