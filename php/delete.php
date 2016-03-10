<?php
$id = $_POST['id'];

include 'conection.php';
	$delete= "delete from horse where id_horse=".$id;
			$mysqli->query($delete);
			$mysqli->close();
//se muestra y regresa la lista
			include 'objetos.php';
?>
