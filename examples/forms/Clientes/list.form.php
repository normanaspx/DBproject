<div class="row">
  <div class="col-md-12">
    <div class="card">
	 <div class="card-header">
		<a style="float:right; text-align:center; font-size:20px;" href="./facturas.create.php">
			<i class="now-ui-icons ui-1_simple-add"></i>
			<p><strong>Nueva</strong></p>
		</a>
		<h3 class="title">Listado de clientes</h3>
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
			 Dirección
		    </th>
		    <th>
			 Nit
		    </th>
		    <th>
			 Acciones
		    </th>
		  </thead>
		  <tbody>
			  <tr>
			  	<td>Luis</td>
				<td>Armas</td>
				<td>zona 10</td>
                <td>73215605</td>
                <td>
                    <input class="btn" type="button" type="button" value="Editar" onClick=" window.location.href='clientes.edit.php' ">
                    </td>
			  </tr>
				<?php
			 	include'connection.php';
	 		$querySelect = "select * from cliente";
	 		$resultado = mysqli_query($conector, $querySelect);
	 		if($resultado) {
		 		$fila = " ";
		 		  while($fila){
		 			$fila = mysqli_fetch_array($resultado);
		 			if($fila['NOMBRES']!=''){
						echo "<tr>
			 					<td>". $fila['ID_CLIENTE']. "</td>
			 					<td>" .$fila['NOMBRES']. "</td>
								 <td>". $fila['APELLIDOS']. "</td>
								 <td>". $fila['DIRECCION']. "</td>
								 <td>". $fila['NIT']. "</td>
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