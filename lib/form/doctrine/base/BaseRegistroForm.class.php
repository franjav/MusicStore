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
abstract class BaseRegistroForm extends BaseFormDoctrine 
{
  protected static $genero = array('','M','F');

  public function setup()
  {      
      $this->setWidgets(array(
      'login'               => new sfWidgetFormInputText(),      
      'correo'              => new sfWidgetFormInputText(),      
      'contraseña'          => new sfWidgetFormInputPassword(),
      'confirmar_contraseña'=> new sfWidgetFormInputPassword(),
      'genero'              => new sfWidgetFormSelect(array('choices' => self::$genero)),
           
    ));

    
    $this->setValidators(array(
      'login'       => new sfValidatorString(array('min_length' => 6), array('required'   => 'Es obligatorio escribir un nombre de usuario.',
                                                                                'min_length' => 'El login "%value%" es demasiado corto. Su longitud debe ser al menos de %min_length% caracteres.')),    
      
      'correo'      => new sfValidatorEmail(array('required' => 'Es obligatorio ingresar el email.'), array('invalid' => 'La dirección de email no es válida.')),
      
      'contraseña'  => new sfValidatorString(array('min_length' => 8),array('required'   => 'Es obligatorio ingresar una contraseña.',
                                                                                'min_length' => 'La contraseña  "%value%" es demasiado corta. Su longitud debe ser al menos de %min_length% caracteres.')),
      
      'confirmar_contraseña' => new sfValidatorString(array('min_length' => 8),array('required'   => 'Es obligatorio ingresar una contraseña.',
                                                                                'min_length' => 'La contraseña  "%value%" es demasiado corta. Su longitud debe ser al menos de %min_length% caracteres.')),
        
      'genero'      => new sfValidatorChoice(array('choices' => array_keys(self::$genero))),

    ));

    $this->widgetSchema->setNameFormat('registro[%s]');
    //$this->widgetSchema->setFormFormatterName('list');
    
    
    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Usuarios', 'column' => array('login')))
    );
    
    
    
    
    
//    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
//                    new sfValidatorSchemaCompare('confirmar_contraseña', sfValidatorSchemaCompare::EQUAL, 'contraseña', array('throw_global_error' => true), array('invalid' => "Las dos contraseñas no coinciden")),
//                    new sfValidatorDoctrineUnique(array('model' => 'Usuarios', 'column' => array('login')), array('invalid' => 'El login "%value%" ya esta asignado a otro usuario.')),                   
//                    )));
    
    
    
//    $this->validatorSchema->setPostValidator( new sfValidatorDoctrineUnique(array('model' => 'Usuarios', 'column' => array('login')), array('invalid' => 'El login "%value%" ya esta utilizado por otro usuario.'))
//	    );
//
//    $this->mergePostValidator(
//			new sfValidatorDoctrineUnique(array('model' => 'Usuarios', 'column' => array('correo')), array('invalid' => 'El correo "%value%" ya esta vinculado a otra cuenta de usuario.'))
//            );
    
    
    
    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

}

