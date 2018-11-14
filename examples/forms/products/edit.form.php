<?php
	$editar=$_GET['editar'];
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$dbName = "ACME_DB";

	$conector = mysqli_connect($servidor, $usuario, $password, $dbName);
	$querySelect = "SELECT PRODUCTO.NOMBRE AS `PNOMBRE`, PRODUCTO.ID_PRODUCTO, PRODUCTO.DESCRIPCION,
	 PRODUCTO.PRECIO, PROVEEDOR.NOMBRE, PROVEEDOR.ID_PROVEEDOR as `PID` FROM PRODUCTO, PROVEEDOR WHERE ID_PRODUCTO=$editar
	  and proveedor.ID_PROVEEDOR=producto.ID_PROVEEDOR";
	$resultado = mysqli_query($conector, $querySelect);
	if($resultado) {
		$fila = " ";
		  while($fila){
			$fila = mysqli_fetch_array($resultado);
			if($fila['PNOMBRE']!=''){
				$id=$fila['ID_PRODUCTO'];
				$nombre=$fila['PNOMBRE'];
				$desc=$fila['DESCRIPCION'];
				$precio=$fila['PRECIO'];
				$provider=$fila['NOMBRE'];
				$id=$fila['PID'];
			}
		 }
		mysqli_close($conector);
	}else
		mysqli_close($conector);
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <style type="text/css">
    .list{
 	   float: left;
 	   list-style: none;
 	   padding: 0px;
 	   border: 1px solid black;
 	   margin-top: 0px;
    }
    input, .list{
    		width: 250px;
    }
    li:hover{
 	   color: silver;
 	   cursor: pointer;
 	   background: #0088cc;
    }
 </style>
<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="products.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
			</a>
			<h3 class="title">Editar producto</h3>
		</div>
	 	<div class="container">
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form method="post">
				<div class="form-row">
			       <div class="form-group col-md-3">
			         <label for="inputEmail4"> <strong>Nombre</strong></label>
			         <input type="text" class="form-control" name="name" value=<?php echo $nombre; ?> id="inputEmail4" placeholder="">
			       </div>
			       <div class="form-group col-md-3">
			         <label for="inputPassword4"> <strong>Descripcion</strong></label>
			         <input type="text" class="form-control" id="inputPassword4" name="description" placeholder="" value=<?php echo $desc; ?>>
			       </div>
				  <div class="form-group col-md-3">
				    <label for="inputPassword4"> <strong>Precio</strong></label>
				    <input type="text" class="form-control" id="inputPassword4" placeholder="" name="price" value=<?php echo $precio; ?>>
				  </div>
				  <div class="form-group col-md-3">
				    <label for="inputPassword4"> <strong>Proveedor</strong></label>
				    <input type="text" class="form-control" id="searchBox" placeholder="Nombre..." name="provider" value=<?php echo $provider; ?>>
				    <div id="response">

				    </div>
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
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$provider=$_POST['provider'];
		$select="SELECT ID_PROVEEDOR FROM PROVEEDOR WHERE NOMBRE='" .$provider. "' ";
		echo $select;
		$resultado = mysqli_query($conector, $select);
		if($resultado) {
			$fila = " ";
			  while($fila){
				$fila = mysqli_fetch_array($resultado);
				if($fila['ID_PROVEEDOR']!=''){
					$id=$fila['ID_PROVEEDOR'];
				}
			 }
		}
		echo $id;
		echo $editar;
		$insert = "CALL `EditProduct`('". $name ."', '". $description ."', '$price' , '$id', '$editar')";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
		echo $insert;
	}
 ?>
