<?php
	include'connection.php';
	if(isset($_POST['button'])){
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$provider=$_POST['provider'];
		$select="SELECT ID_PROVEEDOR FROM PROVEEDOR WHERE NOMBRE='" .$provider. "' ";
		$resultado = mysqli_query($conector, $select);
		if($resultado) {
			$fila = " ";
			  while($fila){
				$fila = mysqli_fetch_array($resultado);
				if($fila['ID_PROVEEDOR']!=''){
					$id_proveedor=$fila['ID_PROVEEDOR'];
				}
			 }
		}
		$insert = "CALL `AddProducts`('". $name ."', '". $description ."', '$price' , '$id_proveedor')";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
		echo" <script type=\"text/javascript\">
		 	 document.location.href=\"products.list.php\";
		 </script>";

	}
 ?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="products.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
			</a>
			<h3 class="title">Agregar productos</h3>
		</div>
	 	<div class="container"><br><br>
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form method="post">
				<div class="form-row">
			       <div class="form-group col-md-6">
			         <label for="inputEmail4"> <strong>Nombre</strong></label>
			         <input required type="text" class="form-control" id="inputEmail4" placeholder="" name="name">
			       </div>
			       <div class="form-group col-md-6">
			         <label for="inputPassword4"> <strong>Descripcion</strong></label>
			         <input required type="text" class="form-control" id="inputPassword4" placeholder="" name="description">
			       </div>
			     </div>
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label for="inputPassword4"> <strong>Precio</strong></label>
					  <input required type="number" class="form-control" id="inputPassword4" placeholder=""name="price">
					</div>
				  <div class="form-group col-md-6" id="j">
				    <label for="proveedor"> <strong>Proveedor</strong></label>
				    <input required type="text" class="form-control" id="proveedor" placeholder="" name="provider">
				    <div id="response"></div>
				  </div>
				</div>
				<div class="form-row" style="float:center;">
				<button class="btn" type="submit" name="button">Guardar</button>
				</div>
			</form>
			<br>
	 	</div>
	 </div>
    </div>
  </div>
</div><br><br>
