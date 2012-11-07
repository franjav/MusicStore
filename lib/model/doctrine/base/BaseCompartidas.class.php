<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Compartidas', 'doctrine');

/**
 * BaseCompartidas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $loginremitente
 * @property integer $idcancioncompartida
 * @property string $logindestinatario
 * @property Cancionesporusuario $Cancionesporusuario
 * @property Cancionesporusuario $Cancionesporusuario_2
 * @property Usuarios $Usuarios
 * 
 * @method string              getLoginremitente()        Returns the current record's "loginremitente" value
 * @method integer             getIdcancioncompartida()   Returns the current record's "idcancioncompartida" value
 * @method string              getLogindestinatario()     Returns the current record's "logindestinatario" value
 * @method Cancionesporusuario getCancionesporusuario()   Returns the current record's "Cancionesporusuario" value
 * @method Cancionesporusuario getCancionesporusuario2()  Returns the current record's "Cancionesporusuario_2" value
 * @method Usuarios            getUsuarios()              Returns the current record's "Usuarios" value
 * @method Compartidas         setLoginremitente()        Sets the current record's "loginremitente" value
 * @method Compartidas         setIdcancioncompartida()   Sets the current record's "idcancioncompartida" value
 * @method Compartidas         setLogindestinatario()     Sets the current record's "logindestinatario" value
 * @method Compartidas         setCancionesporusuario()   Sets the current record's "Cancionesporusuario" value
 * @method Compartidas         setCancionesporusuario2()  Sets the current record's "Cancionesporusuario_2" value
 * @method Compartidas         setUsuarios()              Sets the current record's "Usuarios" value
 * 
 * @package    MusicStore
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCompartidas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('compartidas');
        $this->hasColumn('loginremitente', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
        $this->hasColumn('idcancioncompartida', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('logindestinatario', 'string', 15, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Cancionesporusuario', array(
             'local' => 'loginremitente',
             'foreign' => 'logintitular'));

        $this->hasOne('Cancionesporusuario as Cancionesporusuario_2', array(
             'local' => 'idcancioncompartida',
             'foreign' => 'idcancionusuario'));

        $this->hasOne('Usuarios', array(
             'local' => 'logindestinatario',
             'foreign' => 'login'));
    }
}