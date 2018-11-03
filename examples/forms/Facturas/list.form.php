<div class="row">
  <div class="col-md-12">
    <div class="card">
	 <div class="card-header">
		<a style="float:right; text-align:center; font-size:20px;" href="./facturas.create.php">
			<i class="now-ui-icons ui-1_simple-add"></i>
			<p><strong>Nueva</strong></p>
		</a>
		<h3 class="title">Listado de facturas</h3>
	 </div>
	 <div class="card-body">
	   <div class="table-responsive">
		<table class="table">
		  <thead class=" text-primary">
		    <th>
			 Numero de factura
		    </th>
		    <th>
			 Numero de serie
		    </th>
		    <th>
			 Fecha
		    </th>
		    <th>
			 Cliente
		    </th>
		    <th>
			 Bodega
		    </th>
		  </thead>
		  <tbody>
			  <tr>
			  	<td>0001</td>
				<td>1111</td>
				<td>01/03/2018</td>
                <td>Luis Armas</td>
                <td>Bodega1</td>
			  </tr>
				<?php
			 	include'connection.php';
	 		$querySelect = "select * from factura";
	 		$resultado = mysqli_query($conector, $querySelect);
	 		if($resultado) {
		 		$fila = " ";
		 		  while($fila){
		 			$fila = mysqli_fetch_array($resultado);
		 			if($fila['ID_FACTURA']!=''){
						echo "<tr>
			 					<td>". $fila['ID_FACTURA']. "</td>
			 					<td>" .$fila['NUM_FACTURA']. "</td>
								 <td>". $fila['NUM_SERIE']. "</td>
								 <td>". $fila['FECHA']. "</td>
								 <td>". $fila['ID_CLIENTE']. "</td>
								 <td>". $fila['ID_BODEGA']. "</td>
								 <td>". $fila['ID_USUARIO']. "</td>
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