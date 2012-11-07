<?php

/**
 * Canciones form base class.
 *
 * @method Canciones getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCancionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcanciones'   => new sfWidgetFormInputHidden(),
      'nombrecancion' => new sfWidgetFormInputText(),
      'interprete'    => new sfWidgetFormInputText(),
      'album'         => new sfWidgetFormInputText(),
      'genero'        => new sfWidgetFormInputText(),
      'ruta'          => new sfWidgetFormInputFile(),
    ));

    $this->setValidators(array(
      'idcanciones'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcanciones')), 'empty_value' => $this->getObject()->get('idcanciones'), 'required' => false)),
      'nombrecancion' => new sfValidatorString(array('max_length' => 45)),
      'interprete'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'album'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'genero'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ruta'          => new sfValidatorFile(),
    ));

    $this->widgetSchema->setNameFormat('canciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Canciones';
  }
  
 

}
