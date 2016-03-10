<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
<head>
<title>HorseFarm</title>
<link rel="stylesheet" type="text/css" href="../css/estylo.css" media="screen" />
</head>
<body text="black" bgcolor="#7F7226" link="black" vlink="black" alink="black">
<div id="logo">
		<img src="../img/logo.png">
		<div id="user" class="datos"></div>
</div>
<header id="header">
	<div>
		<nav>
			<ul>
				<li><a href="index.php">About us</a></li>
				<li><a href="">Horses</a></li>
				<li><a href="prod.php">Products</a></li>
			
				<li><a href="Signout.php" >Sign out</a></li>
			</ul>
		</nav>
	</div>
</header>
<div id="titlelistaprov">Horses
<div id="cajabusqueda"><input id="filter" onkeyup="listafiltroprov()" type="text" placeholder="Search..."></div>
<div id="bottonadd"><a href="#modal1"><img src="../img/addprov.png"></a></div>
</div>

<div id="lista"><?php include 'objetos.php';?></div>
<footer id="foter">This is a test of horseFarm</footer>




<div id="modal1" class="modalmask">
		<div class="modalbox movedown">

			<div id="titleformreg">Form Edicion <a href="#close" title="Close" class="close" onclick="borrar()">X</a><br></div>
			

	</div>
	<script src="../js/Ajax.js" ></script>
	<script src="../js/filterHorse.js" ></script>
	
</body >
</html> 

