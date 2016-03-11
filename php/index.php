<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
	<head>
		<title>HorseFarm</title>

		<!--Import Roboto Font-->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<!--Import materialize.css-->

<!--	LIGNE A AJOUTER POUR UTILISER MATERIALIZE
		LIGNE A AJOUTER POUR UTILISER MATERIALIZE
		LIGNE A AJOUTER POUR UTILISER MATERIALIZE
	        <link type="text/css" rel="stylesheet" href="../vendor/materialize/css/materialize.min.css"  media="screen,projection"/>-->

			<!--Import autre(s) .css-->
		<link type="text/css" rel="stylesheet" href="../css/estylo.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body text="black" bgcolor="#7F7226" link="black" vlink="black" alink="black">

			<div id="logo">
				<img src="../img/logo.png" />
				<div id="user" class="datos"></div>
			</div>
			<header id="header">
				<div>
					<nav>
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="">Chevaux</a></li>
							<li><a href="">'Objets'</a></li>

							<li><a href="index.php">À propos</a></li>
						</ul>
					</nav>
				</div>
			</header>

			<div id="titlelistaprov">
				<h4>Chevaux</h4>
				<div id="cajabusqueda">
					<input id="filter" onkeyup="listafiltroprov()" type="text" placeholder="Search..." />
				</div>
				<div id="bottonadd">
					<a href="#modal1"><img src="../img/addprov.png"></a>
				</div>
			</div>

			<div id="lista"><?php include 'objetos.php';?></div>

			<footer id="foter">This is a test of horseFarm</footer>

			<!-- Formulaire d'ajout (div cachée tant qu'on ne clique pas sur le bouton +(bottonadd) ) -->
			<div id="modal1" class="modalmask">
				<div class="modalbox movedown">
					<div id="titleformreg">
						<p>Form Edicion</p>
						<a href="#close" title="Close" class="close" onclick="borrar()">X</a><br>
					</div>
				</div>
			</div>

		<!-- Scripts -->

		<script src="../js/Ajax.js" ></script>
		<script src="../js/filterHorse.js" ></script>
		<!-- Framework Materialize -->
		<script type="text/javascript" src="../vendor/jquery/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="../vendor/materialize/js/materialize.min.js"></script>

	</body >
</html> 

