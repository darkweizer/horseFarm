
<?php
/**
 * Created by PhpStorm.
 * User: m15026768
 * Date: 23/11/2015
 * Time: 14:59
 */
$name='horseFarm';
$password='';
function connect($name, $password)
{
	try{

		$db = new PDO('mysql:host=localhost;dbname=', $name, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		return $db;

	}
	catch(PDOException $e){
		$e->getMessage();
	}
    //return $db;
}
