<?php

/**
 * Usuarios filter form base class.
 *
 * @package    MusicStore
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuariosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'contrasena'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'correo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombres'         => new sfWidgetFormFilterInput(),
      'apellidos'       => new sfWidgetFormFilterInput(),
      'sexo'            => new sfWidgetFormFilterInput(),
      'fechanacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'contrasena'      => new sfValidatorPass(array('required' => false)),
      'correo'          => new sfValidatorPass(array('required' => false)),
      'nombres'         => new sfValidatorPass(array('required' => false)),
      'apellidos'       => new sfValidatorPass(array('required' => false)),
      'sexo'            => new sfValidatorPass(array('required' => false)),
      'fechanacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('usuarios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

  public function getFields()
  {
    return array(
      'login'           => 'Text',
      'contrasena'      => 'Text',
      'correo'          => 'Text',
      'nombres'         => 'Text',
      'apellidos'       => 'Text',
      'sexo'            => 'Text',
      'fechanacimiento' => 'Date',
    );
  }
}
