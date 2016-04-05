<?php
include 'conection.php';
echo 'holaaaaaaaa';
	$insert= "insert into horse (name, general_state, description, race, level, experience) values('".$_POST['name']."','".$_POST['general_state']."','".$_POST['description']."','".$_POST['race']."','".$_POST['level']."','".$_POST['exp']."')";
			$mysqli->query($insert);
			$mysqli->close();
//se muestra y regresa la lista
			include 'objetos.php';
?>