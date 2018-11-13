<?php
//siempre verifica si este name del post existe
		//tambien si da error en otros formularios verifica si esta correcto el stored procedure fue lo primerp que hice viste que no estaba bueno
		//metodo el del form y tipo de boton
		//la redireccion no la ha agregado aun solo cuando crea no cambia de vista probalo asi nada mas.
	include'connection.php';
	if(isset($_POST['button'])){
        $descripcion=$_POST['descripcion'];
        $cantidad=$_POST['cantidad'];
        $id_producto=$_POST['id_producto'];
		$id_bodega=$_POST['id_bodega'];
		$insert = "CALL `AddEntrada`('". $descripcion ."', '". $cantidad ."', '". $id_producto ."', '". $id_bodega ."')";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
	}
 ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="entradas.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
				
			</a>
			<h3 class="title">Agregar Entrada</h3>
		</div>
	 	<div class="container">
			 <br><br>
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form method="post">
				<div class="form-row">
				  <div class="form-group col-md-3">
				    <label for="inputPassword4"> <strong>Descripcion</strong></label>
				    <input required type="text" class="form-control" id="inputPassword4" placeholder="" name="descripcion">
					</div>
					<div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Cantidad</strong></label>
			         <input required type="number" class="form-control" id="inputEmail4" placeholder="" name="cantidad">
			       </div>
                   <div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Id_producto</strong></label>
			         <input required type="number" class="form-control" id="inputEmail4" placeholder="" name="id_producto">
			       </div>
                   <div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Id_bodega</strong></label>
			         <input required type="number" class="form-control" id="inputEmail4" placeholder="" name="id_bodega">
			       </div>
			 </div> 

			 <a class="form-row" style="float:center;" href="./entradas.list.php">
					<button class="btn" type="submit" name="button">Guardar</button>
			</a>

			</form>
			
			
			<br>
	 	</div>
	 </div>	
    </div>
  </div>
</div>