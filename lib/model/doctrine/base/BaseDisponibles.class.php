<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Disponibles', 'doctrine');

/**
 * BaseDisponibles
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $iddisponibles
 * @property string $nombrecancion
 * @property string $interprete
 * @property string $album
 * @property string $genero
 * @property string $ruta
 * @property float $precio
 * @property Doctrine_Collection $Carrito
 * 
 * @method integer             getIddisponibles() Returns the current record's "iddisponibles" value
 * @method string              getNombrecancion() Returns the current record's "nombrecancion" value
 * @method string              getInterprete()    Returns the current record's "interprete" value
 * @method string              getAlbum()         Returns the current record's "album" value
 * @method string              getGenero()        Returns the current record's "genero" value
 * @method string              getRuta()          Returns the current record's "ruta" value
 * @method float               getPrecio()        Returns the current record's "precio" value
 * @method Doctrine_Collection getCarrito()       Returns the current record's "Carrito" collection
 * @method Disponibles         setIddisponibles() Sets the current record's "iddisponibles" value
 * @method Disponibles         setNombrecancion() Sets the current record's "nombrecancion" value
 * @method Disponibles         setInterprete()    Sets the current record's "interprete" value
 * @method Disponibles         setAlbum()         Sets the current record's "album" value
 * @method Disponibles         setGenero()        Sets the current record's "genero" value
 * @method Disponibles         setRuta()          Sets the current record's "ruta" value
 * @method Disponibles         setPrecio()        Sets the current record's "precio" value
 * @method Disponibles         setCarrito()       Sets the current record's "Carrito" collection
 * 
 * @package    MusicStore
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDisponibles extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('disponibles');
        $this->hasColumn('iddisponibles', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombrecancion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('interprete', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('album', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('genero', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('ruta', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('precio', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Carrito', array(
             'local' => 'iddisponibles',
             'foreign' => 'idcancioncomprada'));
    }
}