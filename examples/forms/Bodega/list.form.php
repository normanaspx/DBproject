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
			 Nombre
		    </th>
		    <th>
			 Descripcion
		    </th>
		    <th>
			 Ubicación
		    </th>
		    <th>
			 Acciones
		    </th>
		   
		  </thead>
		  <tbody>
			  <tr>
              <form>
			  	<td>Bodega1</td>
				<td>Principal</td>
                <td>zona 10</td>
                <td>
                    <input class="btn" type="button" type="button" value="Editar" onClick=" window.location.href='Bodega.edit.php' ">
                    </td>
              </form>
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
						echo "<tr>
			 					<td>". $fila['ID_BODEGA']. "</td>
			 					<td>" .$fila['DESCRIPCION']. "</td>
			 					<td>". $fila['UBICACION']. "</td>
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