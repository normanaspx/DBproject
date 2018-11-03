<div class="row">
  <div class="col-md-12">
    <div class="card">
	 <div class="card-header">
		<a style="float:right; text-align:center; font-size:20px;" href="./product.create.php">
			<i class="now-ui-icons ui-1_simple-add"></i>
			<p><strong>Nuevo</strong></p>
		</a>
		<h3 class="title">Listado de proveedores</h3>
	 </div>
	 <div class="card-body">
	   <div class="table-responsive">
		<table class="table">
		  <thead class=" text-primary">
		    <th>
			 Nombre
		    </th>
		    <th>
			 Ubicación
		    </th>
		    <th>
			 Acciones
		    </th>
		    <th>
			 Acciones
		    </th>
		  </thead>
		  <tbody>
		 <?php
			 	include'connection.php';
	 		$querySelect = "CALL `GetAllProviders`();";
	 		$resultado = mysqli_query($conector, $querySelect);
	 		if($resultado) {
		 		$fila = " ";
		 		  while($fila){
		 			$fila = mysqli_fetch_array($resultado);
		 			if($fila['NOMBRE']!=''){
						echo "<tr>
			 					<td>". $fila['NOMBRE']. "</td>
			 					<td>" .$fila['UBICACION']. "</td>
								<td><a href=\"#\">Editar</a></td>
								<td><a href=\"#\">Eliminar</a></td>
			 				</tr>";
					}
		 		  }
	 			mysqli_close($conector);
	 		}else
			 {
	 			mysqli_close($conector);
	 		}
		?>
		  </tbody>
		</table>
	   </div>
	 </div>
    </div>
  </div>
</div>
