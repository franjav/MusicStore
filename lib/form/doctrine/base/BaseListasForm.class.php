<?php

/**
 * Listas form base class.
 *
 * @method Listas getObject() Returns the current form's model object
 *
 * @package    MusicStore
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseListasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombrelistas'    => new sfWidgetFormInputText(),
      'loginduenolista' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      //'nombrelistas'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nombrelistas')), 'empty_value' => $this->getObject()->get('nombrelistas'), 'required' => false)),
      'nombrelistas' => new sfValidatorString(array('required'=>true), array('required'=>'Debe ingresar un nombre para la lista.')),
      'loginduenolista' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('loginduenolista')), 'empty_value' => $this->getObject()->get('loginduenolista'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listas';
  }

}
