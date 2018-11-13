<?php
	include'connection.php';
	if(isset($_POST['button'])){
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$provider=$_POST['provider'];
		$insert = "CALL `AddProducts`('". $name ."', '". $description ."', '$price' , '$provider')";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
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
				  <div class="form-group col-md-6">
				    <label for="inputPassword4"> <strong>Id_Proveedor</strong></label>
				    <input required type="number" class="form-control" id="inputPassword4" placeholder="" name="provider">
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
