<?php
//siempre verifica si este name del post existe
		//tambien si da error en otros formularios verifica si esta correcto el stored procedure fue lo primerp que hice viste que no estaba bueno
		//metodo el del form y tipo de boton
		//la redireccion no la ha agregado aun solo cuando crea no cambia de vista probalo asi nada mas.
	/*include'connection.php';
	if(isset($_POST['button'])){
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
		$insert = "CALL `AddProveedores`('". $nombre ."', '". $direccion ."')";
		$resultado = mysqli_query($conector, $insert);
		mysqli_close($conector);
	}*/
 ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="usuarios.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
				
			</a>
			<h3 class="title">Agregar Usuario</h3>
		</div>
	 	<div class="container">
			 <br><br>
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form method="post">
				<div class="form-row">
				  <div class="form-group col-md-4">
				    <label for="inputPassword4"> <strong>Nombre</strong></label>
				    <input required type="text" class="form-control" id="inputPassword4" placeholder="" name="nombre">
					</div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Apellido</strong></label>
			         <input required type="text" class="form-control" id="inputEmail4" placeholder="" name="direccion">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Fecha de nacimiento</strong></label>
			         <input required type="date" class="form-control" id="inputEmail4" placeholder="" name="direccion">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Correo</strong></label>
			         <input required type="email" class="form-control" id="inputEmail4" placeholder="" name="direccion">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Contraseña</strong></label>
			         <input required type="text" class="form-control" id="inputEmail4" placeholder="" name="direccion">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Rol</strong></label>
			         <input required type="text" class="form-control" id="inputEmail4" placeholder="" name="direccion">
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