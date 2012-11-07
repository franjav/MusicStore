<?php

/**
 * Disponibles filter form base class.
 *
 * @package    MusicStore
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDisponiblesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombrecancion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'interprete'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'album'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'genero'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ruta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombrecancion' => new sfValidatorPass(array('required' => false)),
      'interprete'    => new sfValidatorPass(array('required' => false)),
      'album'         => new sfValidatorPass(array('required' => false)),
      'genero'        => new sfValidatorPass(array('required' => false)),
      'ruta'          => new sfValidatorPass(array('required' => false)),
      'precio'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('disponibles_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Disponibles';
  }

  public function getFields()
  {
    return array(
      'iddisponibles' => 'Number',
      'nombrecancion' => 'Text',
      'interprete'    => 'Text',
      'album'         => 'Text',
      'genero'        => 'Text',
      'ruta'          => 'Text',
      'precio'        => 'Number',
    );
  }
}
