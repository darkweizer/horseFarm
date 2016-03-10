<?php
$mysqli = new mysqli("139.124.187.178", "root", "Spellforce", "horseFarm");
$mysqli->query("SET NAMES 'utf8'");

if($mysqli->connect_errno){
	
	die('Error de (' . $mysqli->connect_errno . ")"
	.$mysqli->connect_error);
		
}
//echo "Conexion Exitosa";
?>