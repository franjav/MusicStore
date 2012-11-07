<?php

/**
 * Disponibles form base class.
 *
 * @method Disponibles getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDisponiblesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddisponibles' => new sfWidgetFormInputHidden(),
      'nombrecancion' => new sfWidgetFormInputText(),
      'interprete'    => new sfWidgetFormInputText(),
      'album'         => new sfWidgetFormInputText(),
      'genero'        => new sfWidgetFormInputText(),
      'ruta'          => new sfWidgetFormInputFile(),
      'precio'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iddisponibles' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddisponibles')), 'empty_value' => $this->getObject()->get('iddisponibles'), 'required' => false)),
      'nombrecancion' => new sfValidatorString(array('max_length' => 45)),
      'interprete'    => new sfValidatorString(array('max_length' => 45)),
      'album'         => new sfValidatorString(array('max_length' => 45)),
      'genero'        => new sfValidatorString(array('max_length' => 45)),
      'ruta'          => new sfValidatorFile(),
      'precio'        => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('disponibles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Disponibles';
  }

}
