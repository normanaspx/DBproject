<?php
//siempre verifica si este name del post existe
		//tambien si da error en otros formularios verifica si esta correcto el stored procedure fue lo primerp que hice viste que no estaba bueno
		//metodo el del form y tipo de boton
		//la redireccion no la ha agregado aun solo cuando crea no cambia de vista probalo asi nada mas.
	include'connection.php';
	if(isset($_POST['button'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
		$nit=$_POST['nit'];
		$insert = "CALL `AddCustomers`('". $nombre ."', '". $apellido ."', '". $direccion ."', '". $nit ."')";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
	}
 ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="clientes.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
				
			</a>
			<h3 class="title">Agregar Cliente</h3>
		</div>
	 	<div class="container">
			 <br><br>
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form method="post">
				<div class="form-row">
				  <div class="form-group col-md-3">
				    <label for="inputPassword4"> <strong>Nombre</strong></label>
				    <input type="text" class="form-control" id="inputPassword4" placeholder="" name="nombre">
					</div>
					<div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Apellido</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="" name="apellido">
			       </div>
                   <div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Dirección</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="" name="direccion">
			       </div>
                   <div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Nit</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="" name="nit">
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
</div>