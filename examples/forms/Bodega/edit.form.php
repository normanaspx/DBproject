<?php
	$id_edit=$_GET['editar'];
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$dbName = "ACME_DB";
	$conector = mysqli_connect($servidor, $usuario, $password, $dbName);
	$querySelect = "SELECT * FROM BODEGA WHERE ID_BODEGA = $id_edit";
	$resultado = mysqli_query($conector, $querySelect);
	if($resultado) {
		$fila = " ";
		  while($fila){
			$fila = mysqli_fetch_array($resultado);
			if($fila['DESCRIPCION']!=''){
				$id=$fila['ID_BODEGA'];
				$desc=$fila['DESCRIPCION'];
				$ubicacion=$fila['UBICACION'];
			}
		 }
		mysqli_close($conector);
	}else
		mysqli_close($conector);

 ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="Bodega.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
			</a>
			<h3 class="title">Editar Bodega</h3>
		</div>
	 	<div class="container">
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form method="post">
				<div class="form-row">
			       <div class="form-group col-md-6">
			         <label for="inputPassword4"> <strong>Descripción</strong></label>
			         <input type="text" name="descripcion" class="form-control" value=<?php echo $desc; ?> id="inputPassword4" placeholder="">
			       </div>
				  <div class="form-group col-md-6">
				    <label for="inputPassword4"> <strong>Ubicación</strong></label>
				    <input type="text" name="ubicacion" class="form-control" value="<?php echo $ubicacion; ?>" id="inputPassword4" placeholder="">
				  </div>
			     </div>
				<div class="form-row" style="float:center;">
					<button class="btn" type="submit" name="button">Actualizar</button>
				</div>
			</form>
	 	</div>
	 </div>
    </div>
  </div>
</div>
<?php
	if(isset($_POST['button'])){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$dbName = "ACME_DB";
		$conector = mysqli_connect($servidor, $usuario, $password, $dbName);
		$description=$_POST['descripcion'];
		$ubicacion=$_POST['ubicacion'];
		$insert = "CALL `EditBodega`('". $description ."', '". $ubicacion ."', $id_edit)";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
		echo $insert;
	}
 ?>
