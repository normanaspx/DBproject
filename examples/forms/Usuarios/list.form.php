<div class="row">
  <div class="col-md-12">
    <div class="card">
	 <div class="card-header">
		<a style="float:right; text-align:center; font-size:20px;" href="./usuarios.create.php">
			<i class="now-ui-icons ui-1_simple-add"></i>
			<p><strong>Nuevo</strong></p>
		</a>
		<h3 class="title">Listado de Usuarios</h3>
	 </div>
	 <div class="card-body">
	   <div class="table-responsive">
		<table class="table">
		  <thead class=" text-primary">
		    <th>
			 Nombre
		    </th>
		    <th>
			 Apellido
		    </th>
		    <th>
			 Fecha de nacimiento
		    </th>
		    <th>
			 Correo
		    </th>
				<th>
			 Contraseña
		    </th>
				<th>
			 Rol
		    </th>
		  </thead>
		  <tbody>
			
		 <?php
			 	/*include'connection.php';
	 		$querySelect = "select * from usuario";
	 		$resultado = mysqli_query($conector, $querySelect);
	 		if($resultado) {
		 		$fila = " ";
		 		  while($fila){
		 			$fila = mysqli_fetch_array($resultado);
		 			if($fila['NOMBRE']!=''){
						echo "<tr>
			 					 <td>". $fila['NOMBRE']. "</td>
								 <td>" .$fila['APELLIDO']. "</td>
								 <td>". $fila['FECHA_NACIMIENTO']. "</td>
			 					<td>" .$fila['CORREO']. "</td>
								<td><a href=\"providers.edit.php\">Editar</a></td>
								<td><a href=\"#\">Eliminar</a></td>
			 				</tr>";
					}
		 		  }
	 			mysqli_close($conector);
	 		}else
			 {
	 			mysqli_close($conector);
	 		}*/
		?>
		  </tbody>
		</table>
	   </div>
	 </div>
    </div>
  </div>
</div>