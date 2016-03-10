<?php
$filtro= $_REQUEST['filter'];
		//Realizar una session de usuarios
		//Si existe que redireccione a consultas.php
		//Evitar duplicados en Altas
include 'conection.php';

$consult="
select id_horse, name, race, description, general_state 
		from horse 
		where name like '".$filtro."%'
";

	$mysqli->real_query($consult);
			$query = $mysqli->store_result();		
			if($cliente=$query->fetch_assoc()){
				$contador=1;
			include 'conection.php';
			$mysqli->real_query("
				select id_horse, name, race, description, general_state 
				from horse
				where name like '".$filtro."%'
				");
			$query = $mysqli->store_result();
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
					<th><?php echo $contador; ?></th>
					<td><?php echo $row['id_horse'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['race'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['general_state'];?></td>
					
					<td class="tdUpdate">
						<center><a title="Edit" href="#modal1" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="edit(this)" ><img class="imgprov" src="img/actualizar.png"></a></center>
					</td>
					<td>
						<center><a  title="DeleteHorse" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="deleteHorse(this)" ><img class="imgprov" src="img/eliminar.png"></a></center>
					</td>	
				</tr>
				<?php
					}else{
				?>
				<tr style="background: none repeat scroll 0 0 rgba(0,0,0,0.4); transition: all 0.3s linear 0s;" class="hoverrow">
					<th><?php echo $contador; ?></th>
					<td><?php echo $row['id_horse'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['race'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['general_state'];?></td>
					
					
				<td class="tdUpdate">
						<center><a title="Edit" href="#modal1" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="edit(this)" ><img class="imgprov" src="img/actualizar.png"></a></center>
					</td>
					<td>
						<center><a  title="DeleteHorse" style="cursor: pointer" id_horse="<?php echo $row['id_horse'];?>" onclick="deleteHorse(this)" ><img class="imgprov" src="img/eliminar.png"></a></center>
					</td>	
				</tr>
				<?php
				}
				$contador++;
				}
				$mysqli->close();
				?>
		</table>


		<?php
			}
			else{
				echo "No coincidences...";
			}

?>


			