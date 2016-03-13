<!DOCTYPE html>

<html>
	<head>
		<title>HorseFarm</title>

		<!-- Import favicon -->
		<link rel="icon" type="image/png" href="../img/logo.png" />

		<!--Import Roboto Font-->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../vendor/materialize/css/materialize.min.css"  media="screen,projection"/>
		<!--Import autre(s) .css-->
		<link type="text/css" rel="stylesheet" href="../css/style2.css" media="screen" />

		<!-- Laisse le navigateur savoir si le site est optimisé pour mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
			<!-- Logo -->
			<div id="logo">
				<img src="../img/logo.png" />
				<div id="user" class="datos"></div>
			</div>

			<!-- Menu de navigation (entre les tables) -->
			<header id="header">
				<div>
					<nav>
						<ul>
							<li><a href="index.php">Accueil</a></li>
							<li><a href="">Chevaux</a></li>
							<li><a href="">'Autres objets'</a></li>

							<li><a href="index.php">À propos</a></li>
						</ul>
					</nav>
				</div>
			</header>

			<div id="titlelistaprov">
				<h4>Chevaux</h4>
				<!-- Barre de recherche -->
				<div id="cajabusqueda">
					<input id="filter" onkeyup="listafiltroprov()" type="text" placeholder="Search..." />
				</div>
				<!-- Bouton d'ajout de tuple ; fait apparaître le formulaire de création -->
				<div id="bottonadd">
					<a href="#modal1"><img src="../img/addprov.png"></a>
				</div>
			</div>

			<!-- Liste des objets récupérés en BD -->
			<div id="lista" style="background-color: #00acc1; min-height: 500px;"><h5>Liste des objets...</h5><?php /*include 'objetos.php';*/?></div>

			<footer id="foter">This is a test of horseFarm</footer>

			<!-- Formulaire de création (div cachée tant qu'on ne clique pas sur le bouton + (#bottonadd) ) -->
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
		<script type="text/javascript" src="../vendor/jquery/jquery-2.2.1.min.js"></script>
		<script type="text/javascript" src="../vendor/materialize/js/materialize.min.js"></script>

	</body >
</html> 

