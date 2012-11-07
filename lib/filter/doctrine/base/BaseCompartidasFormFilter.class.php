<?php

/**
 * Compartidas filter form base class.
 *
 * @package    MusicStore
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCompartidasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcancioncompartida' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cancionesporusuario_2'), 'add_empty' => true)),
      'logindestinatario'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuarios'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'idcancioncompartida' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cancionesporusuario_2'), 'column' => 'logintitular')),
      'logindestinatario'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuarios'), 'column' => 'login')),
    ));

    $this->widgetSchema->setNameFormat('compartidas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Compartidas';
  }

  public function getFields()
  {
    return array(
      'loginremitente'      => 'Text',
      'idcancioncompartida' => 'ForeignKey',
      'logindestinatario'   => 'ForeignKey',
    );
  }
}
