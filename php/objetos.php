<?php
		
		//para contar el numero de paginas
	//se cuentan los registros y cada 20 se crea un link
			$contador=0;
			$numPaginador=1;
			$paginador="<a onclick='paginacionHorse(this)' id='0' href='#'>".$numPaginador."</a>";
			$breack=10;

			include 'conection.php';
			$mysqli->real_query("select id_horse, name, race, description, general_state from horse");
			$query = $mysqli->store_result();
		
				while ($row = $query->fetch_assoc()){
				
				$contador++;

				if($contador==$breack){
						$numPaginador++;
						$paginador.="<a onclick='paginacionHorse(this)' id='".$breack."' href='#'>".$numPaginador."</a>";
						$breack+=10;
					}//end if
				}//end while


			//verifica si AJAX a enviado algo ;)
			if (isset($_POST['inicio'])) {
				$inicio=$_POST['inicio'];
			}//end if verificar valor ajax
			else{
				$inicio=0;
			}//end else verificar valor ajax

			

			
			$contador=0;
			$breack=10;
			include 'conection.php';
			$mysqli->real_query("
		select id_horse, name, race, description, general_state from horse
		limit ".$inicio.",10;


				");
			$query = $mysqli->store_result();
				//LLENA LA PRIMERA LISTA
			?>

			<table > 
				<tr  bgcolor="#000000">
					<th>Number</th>
					<th>Id horse</th>
					<th>Name</th>
					<th>Race</th>
					<th>Description</th>
					<th>State</th>
									

				</tr>
				<?php
				while ($row = $query->fetch_assoc()){
				if($contador%2 == 0){
				?>
				<tr bgcolor="" class="hoverrow">
					<th><?php echo $contador+1; ?></th>
				 <!--Nombre de los atributos de las tablas-->
					<td><?php echo $row['id_horse'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['race'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['general_state'];?></td>
					
					
					
					<td class="tdUpdate">
						<center><a title="Edit" href="#modal1" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="edit(this)" ><img class="imgprov" src="../img/actualizar.png"></a></center>
					</td>
					<td>
						<center><a  title="DeleteHorse" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="deleteHorse(this)" ><img class="imgprov" src="../img/eliminar.png"></a></center>
					</td>	
				</tr>
				<?php
					}//end if contador
					else{
				?>
				<tr style="background: none repeat scroll 0 0 rgba(0,0,0,0.4); transition: all 0.3s linear 0s;" class="hoverrow">
					<th><?php echo $contador+1; ?></th>
					> <!--Nombre de los atributos de las tablas-->
					<td><?php echo $row['id_horse'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['race'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['general_state'];?></td>
					
					
					
				<td class="tdUpdate">
						<center><a title="Edit" href="#modal1" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="edit(this)" ><img class="imgprov" src="../img/actualizar.png"></a></center>
					</td>
					<td>
						<center><a  title="DeleteHorse" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="deleteHorse(this)" ><img class="imgprov" src="../img/eliminar.png"></a></center>
					</td>	
				</tr>
				<?php
				}//en else contador
				$contador++;
				}//end while
				$mysqli->close();
				?>
		</table>

		<div id="paginadorprov">
						<?php echo $paginador; ?>	
		</div>



