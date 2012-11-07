<?php

/**
 * Canciones filter form base class.
 *
 * @package    MusicStore
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCancionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombrecancion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'interprete'    => new sfWidgetFormFilterInput(),
      'album'         => new sfWidgetFormFilterInput(),
      'genero'        => new sfWidgetFormFilterInput(),
      'ruta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombrecancion' => new sfValidatorPass(array('required' => false)),
      'interprete'    => new sfValidatorPass(array('required' => false)),
      'album'         => new sfValidatorPass(array('required' => false)),
      'genero'        => new sfValidatorPass(array('required' => false)),
      'ruta'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('canciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Canciones';
  }

  public function getFields()
  {
    return array(
      'idcanciones'   => 'Number',
      'nombrecancion' => 'Text',
      'interprete'    => 'Text',
      'album'         => 'Text',
      'genero'        => 'Text',
      'ruta'          => 'Text',
    );
  }
}
