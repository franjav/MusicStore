<?php
class LoginTable extends Doctrine_Table
{
    public static function login( $login, $contrasena){
      return Doctrine_Query::create()
        ->from('Usuarios u')
	->where('u.login = ?', array($login))
        ->andWhere('u.contrasena = ?', array(md5($contrasena))) // Podrimos usar otro algoritmo, en este caso utilizamos md5
	->fetchOne();
    }
}