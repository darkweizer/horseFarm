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

			<div id="titleformreg">Add a Horse <a href="#close" title="Close" class="close" onclick="borrar()">X</a><br></div>
<!--Form pour ajouter les donnees!-->
			<div id="formreg">
							<table border="0" align="center" >
								<tr>
									<td><p><strong>Nom:</strong></p></td>
									<td colspan="2"><input type="text" id="name" name="name" size="38" class="round" value="" onkeyup="validarNombre()"></td>
									<td><div id="n"></div></td>
								</tr>
								<tr>
									<td><p><strong>General state:</strong></p></td>
									<td colspan="2"><input type="text" id="general_state"  size="38" class="round" value="" onkeyup="validarState()"></td>
									<td><div id="g"></div></td>
								</tr>
									<td><p><strong>Description:</strong></p></td>
									<td colspan="2"><input type="text" id="description" maxlength="10"  size="38" class="round" value="" onkeyup="validar()"></td>
									<td><div id="d"></div></td>
								<tr>
									<td><p><strong>Race:</strong></p></td>
									<td colspan="2"><input type="text" id="race" name="race" size="38" class="round" value="" placeholder="race"></td>
									<td><div id="r"></div></td>
								</tr>
								<tr>
									<td><p><strong>Level:</strong></p></td>
									<td colspan="2"><input type="text" id="level" name="level" size="38" class="round" value="" placeholder="1,2,3"></td>
									<td><div id="l"></div></td>
								</tr>
								
								<tr>
									<td><p><strong>Experience:</strong></p></td>
									<td colspan="2"><input type="text" id="exp" name="exp" size="38" class="round" value=""></td>
									<td><div id="e"></div></td>
								</tr>
							


							</table>
							<table align="center">
								<tr>
									<td><div id="buttonprov"><a  style="cursor: pointer" onclick="validarDatosInsert()" ><img class="imgprovform" src="../img/addprovform.png"></div></td>
									<td><a href="#close" style="cursor: pointer" onclick="limpiarprov()" ><img class="imgprovform" src="../img/cancelarprov.png"></td>
									<td><div id="mensajeerror"></div></td>
								</tr>
							</table>
				<div id="mensaje" ></div>
			</div>

	</div>


		








	</div>
	<script src="../js/Ajax.js" ></script>
	<script src="../js/filterHorse.js" ></script>
	
</body >
</html> 

