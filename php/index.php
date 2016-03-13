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

		<div class="row">
			<header class="col l10 offset-l2">
				<nav class="top-nav teal">
					<div class="container row">
						<div class="col nav-wrapper"><h4 class="page-title">Chevaux</h4></div>
					</div>
				</nav>
				<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
				<ul id="nav-mobile" class="side-nav fixed">

					<li id="logo" class="logo">
						<a id="logo-container" class="brand-logo">
							<img src="../img/logo.png" />
						</a>
					</li>

					<li class="search">
						<div class="row no-margin">
							<div class="col l9 search-wrapper">
								<!-- Barre de recherche -->
								<div id="cajabusqueda">
									<input id="filter" onkeyup="listafiltroprov()" type="text" placeholder="Recherche" />
								</div>
							</div>
							<i class="col l3 material-icons">search</i>
						</div>
					</li>

					<li>
						<li><a href="index.php">Accueil</a></li>
						<li><a href="">Chevaux</a></li>
						<li><a href="">'Autres objets'</a></li>
						<li><a href="">'Autres objets'</a></li>
						<li><a href="">'Autres objets'</a></li>
						<li><a href="">'Autres objets'</a></li>
						<li><a href="">'Autres objets'</a></li>
						<li><a href="">'Autres objets'</a></li>
						<li><a href="">'...'</a></li>
					</li>
				</ul>
			</header>
		</div>

		<div class="row">
			<main class="col l8 offset-l3">
				<div class="row no-margin">
					<div id="titlelistaprov" class="col l12">
						<!-- Bouton d'ajout de tuple ; fait apparaître le formulaire de création -->
						<div id="bottonadd">
							<a href="#modal1"><img src="../img/addprov.png"></a>
						</div>
					</div>
				</div>

				<!-- Liste des objets récupérés en BD -->

				<div class="row">
					<div class="col s12 m12 l12">
						<div class="card-panel teal">
							<span class="white-text">

<!--								-->
								<div id="lista" class="teal" style="background-color: #fef1d9; min-height: 500px;"><h5>Liste des objets...</h5><?php /*include 'objetos.php';*/?></div>
<!--								-->
								<!--POUR AFFICHER LA LISTE DES OBJETS : Enlever commentaires PHP
								<div id="lista"><?php /*include 'objetos.php';*/?></div>-->


							</span>
						</div>
					</div>
				</div>

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

			</main>
		</div>

	</body >
</html> 
