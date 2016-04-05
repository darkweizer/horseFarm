<?php
include 'conection.php';
	$insert= "insert into horse () values('".$_POST['name']."','".$_POST['general_state']."','".$_POST['description']."','".$_POST['race']."',".$_POST['level'].",".$_POST['exp'].")";
			$mysqli->query($insert);
			$mysqli->close();
//se muestra y regresa la lista
			include 'objetos.php';
?>