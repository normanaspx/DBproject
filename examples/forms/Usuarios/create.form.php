<?php
$servidor = "localhost";
$usuario  = "root";
$password = "";
$dbName   = "ACME_DB";
$conector = mysqli_connect($servidor, $usuario, $password, $dbName);
if (isset($_POST['button'])) {
    $names     = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha     = $_POST['fecha'];
    $rol       = $_POST['rol'];
    $correo    = $_POST['email'];
    $pass      = $_POST['pass'];
    $select    = "SELECT ID_ROL FROM ROL WHERE DESCRIPCION='" . $rol . "' ";
    $resultado = mysqli_query($conector, $select);
    if ($resultado) {
        $fila = " ";
        while ($fila) {
            $fila = mysqli_fetch_array($resultado);
            if ($fila['ID_ROL'] != '') {
                $id_rol = $fila['ID_ROL'];
            }
        }
    }
    $insert = "INSERT INTO PERSONA VALUES(null, '" . $names . "', '" . $apellidos . "', '" . $fecha . "')";
    if ($conector->query($insert) === TRUE) {
        $last_id = $conector->insert_id;
        $insert1 = "CALL `AddUsers`($last_id, '" . $correo . "', '" . $pass . "',  $id_rol)";
        echo $insert1;
        $resultado = mysqli_query($conector, $insert1);
        mysqli_close($conector);
    }else {
        echo "Error";
    }
}
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
				    <input required type="text" class="form-control" id="inputPassword4" placeholder="" name="nombres">
					</div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Apellido</strong></label>
			         <input required type="text" class="form-control" id="inputEmail4" placeholder="" name="apellidos">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Fecha de nacimiento</strong></label>
			         <input required type="date" class="form-control" id="inputEmail4" placeholder="" name="fecha">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Correo</strong></label>
			         <input required type="email" class="form-control" id="inputEmail4" placeholder="" name="email">
			       </div>
                   <div class="form-group col-md-4 ">
			         <label for="inputEmail4"><strong>Contraseña</strong></label>
			         <input required type="text" class="form-control" id="inputEmail4" placeholder="" name="pass">
			       </div>
                   <div class="form-group col-md-4 " id="j">
			         <label for="inputEmail4"><strong>Rol</strong></label>
			         <input required type="text" class="form-control" id="rol" placeholder="" name="rol">
				    <div id="response">

				    </div>
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
