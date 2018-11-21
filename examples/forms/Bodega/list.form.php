<div class="row">
  <div class="col-md-12">
    <div class="card">
	 <div class="card-header">
		<a style="float:right; text-align:center; font-size:20px;" href="./bodega.create.php">
			<i class="now-ui-icons ui-1_simple-add"></i>
			<p><strong>Nueva</strong></p>
		</a>
		<h3 class="title">Listado de Bodegas</h3>
	 </div>
	 <div class="card-body">
	   <div class="table-responsive">
		<table class="table">
		  <thead class=" text-primary">
				<th>
			 Descripcion
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
			  </tr>
				<?php
			 		include'connection.php';
			 		$querySelect = "select * from bodega";
			 		$resultado = mysqli_query($conector, $querySelect);
			 		if($resultado) {
				 		$fila = " ";
				 		  while($fila){
				 			$fila = mysqli_fetch_array($resultado);
				 			if($fila['DESCRIPCION']!=''){
								$id=$fila['ID_BODEGA'];
								echo "<tr>
					 					<td>" .$fila['DESCRIPCION']. "</td>
					 					<td>". $fila['UBICACION']. "</td>
										<td><a href=\"bodega.edit.php?editar=$id\">Editar</a></td>
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
