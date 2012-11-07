<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Listas', 'doctrine');

/**
 * BaseListas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombrelistas
 * @property string $loginduenolista
 * @property Usuarios $Usuarios
 * @property Doctrine_Collection $Cancionesporlista
 * @property Doctrine_Collection $Cancionesporlista_2
 * 
 * @method string              getNombrelistas()        Returns the current record's "nombrelistas" value
 * @method string              getLoginduenolista()     Returns the current record's "loginduenolista" value
 * @method Usuarios            getUsuarios()            Returns the current record's "Usuarios" value
 * @method Doctrine_Collection getCancionesporlista()   Returns the current record's "Cancionesporlista" collection
 * @method Doctrine_Collection getCancionesporlista2()  Returns the current record's "Cancionesporlista_2" collection
 * @method Listas              setNombrelistas()        Sets the current record's "nombrelistas" value
 * @method Listas              setLoginduenolista()     Sets the current record's "loginduenolista" value
 * @method Listas              setUsuarios()            Sets the current record's "Usuarios" value
 * @method Listas              setCancionesporlista()   Sets the current record's "Cancionesporlista" collection
 * @method Listas              setCancionesporlista2()  Sets the current record's "Cancionesporlista_2" collection
 * 
 * @package    MusicStore
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseListas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('listas');
        $this->hasColumn('nombrelistas', 'string', 20, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 20,
             ));
        $this->hasColumn('loginduenolista', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Usuarios', array(
             'local' => 'loginduenolista',
             'foreign' => 'login'));

        $this->hasMany('Cancionesporlista', array(
             'local' => 'nombrelistas',
             'foreign' => 'nombrelista'));

        $this->hasMany('Cancionesporlista as Cancionesporlista_2', array(
             'local' => 'loginduenolista',
             'foreign' => 'loginpropietario'));
    }
}