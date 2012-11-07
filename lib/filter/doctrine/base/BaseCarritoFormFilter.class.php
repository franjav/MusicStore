<?php

/**
 * Carrito filter form base class.
 *
 * @package    MusicStore
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCarritoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'logincomprador'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
      'idcancioncomprada' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Disponibles'), 'add_empty' => true)),
      'fecha'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'precio'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'logincomprador'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios'), 'column' => 'login')),
      'idcancioncomprada' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Disponibles'), 'column' => 'iddisponibles')),
      'fecha'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'precio'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('carrito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Carrito';
  }

  public function getFields()
  {
    return array(
      'idcompra'          => 'Number',
      'logincomprador'    => 'ForeignKey',
      'idcancioncomprada' => 'ForeignKey',
      'fecha'             => 'Date',
      'precio'            => 'Number',
    );
  }
}
