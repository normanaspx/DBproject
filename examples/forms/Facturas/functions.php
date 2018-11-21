<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$dbName = "ACME_DB";
	$conector = mysqli_connect($servidor, $usuario, $password, $dbName);
 	$acum=0;
	if(isset($_POST['new2'])) {
	    include 'connection.php';
	    $q   = $conector->real_escape_string($_POST['q']);
	    $sql = $conector->query("SELECT * FROM PRODUCTO WHERE NOMBRE = '$q' ");
	    if ($sql->num_rows > 0) {
	        while ($data = $sql->fetch_array()) {
			    	$acum++;
				$desc=(integer)$data['PRECIO']-1;
				$response = "<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Cantidad</strong></label>
				  <input type=\"text\" value=\"1\" name=\"cantidad[]\"  class=\"form-control\" required>
				</div>
				<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Descripción</strong></label>
				  <input type=\"text\" readonly value=\"" . $data['NOMBRE'] . "\" name=\"nombreProd[]\" id=\"nombre\" class=\"form-control\">
				</div>
				<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Descuento</strong></label>
				  <input type=\"number\" max=\"" . $desc . "\"  name=\"descuento[]\" id=\"direccion\"  class=\"form-control\">
				</div>
				<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Precio</strong></label>
				  <input type=\"text\" readonly value=\"" . $data['PRECIO'] . "\"  name=\"precio[]\" id=\"direccion\"  class=\"form-control\">
				</div>
				<input type=\"hidden\" value=\"" . $data['ID_PRODUCTO'] . "\" name=\"id_producto[]\" />
				";
	        }
	    }
	    exit($response);
	}

	if (isset($_POST['new'])) {
	    $response = "<ul><li><a href=\"clientes.create.php\">Agregar este producto</a></li></ul>";
	    include 'connection.php';
	    $q   = $conector->real_escape_string($_POST['q']);
	    $sql = $conector->query("SELECT * FROM PRODUCTO WHERE NOMBRE LIKE '%$q%' ");
	    if ($sql->num_rows > 0) {

	        $response = '<ul class=list>';
	        while ($data = $sql->fetch_array()) {

	            $response .= "<li>" . $data['NOMBRE'] . "</li>";
	        }
	        $response .= "</ul>";
	    }

	    exit($response);
	}

	if (isset($_POST['search'])) {
	    $response = "<ul><li><a href=\"clientes.create.php\">Agregar este cliente</a></li></ul>";
	    include 'connection.php';
	    $q   = $conector->real_escape_string($_POST['q']);
	    $sql = $conector->query("SELECT * FROM CLIENTE WHERE NIT LIKE '%$q%' ");
	    if ($sql->num_rows > 0) {

	        $response = '<ul class=list>';
	        while ($data = $sql->fetch_array()) {

	            $response .= "<li>" . $data['NIT'] . "</li>";
	        }
	        $response .= "</ul>";
	    }

	    exit($response);
	}

	if (isset($_POST['boton'])) {
	    include 'connection.php';
	    $myObj    = new \stdClass();
	    $response = '';
	    $q        = $conector->real_escape_string($_POST['q']);
	    $sql      = $conector->query("SELECT * FROM CLIENTE WHERE NIT ='$q'");
	    if ($sql->num_rows > 0) {
	        while ($data = $sql->fetch_array()) {
	            $response = "<div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>Nombre</strong></label>
	               <input type=\"text\" value=\"" . $data['NOMBRES'] . "\" name=\"nombre\" id=\"nombre\"  class=\"form-control\" required>
	            </div>
	            <div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>Apellidos</strong></label>
	               <input type=\"text\" value=\"" . $data['APELLIDOS'] . "\" name=\"apellido\" id=\"ape\"  class=\"form-control\" required>
	            </div>
	            <div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>Direccion</strong></label>
	               <input type=\"text\" value=\"" . $data['DIRECCION'] . "\" name=\"direccion\" id=\"direccion\"  class=\"form-control\" required>
	            </div>
	            <div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>NIT</strong></label>
	               <input type=\"text\" value=\"" . $data['NIT'] . "\" name=\"nit\" id=\"nit\"  class=\"form-control\" required>
	            </div>
			  <input type=\"hidden\" value=\"" . $data['ID_CLIENTE'] . "\" name=\"id_cliente\" /> ";
	        }
	    }
	    exit($response);
	}

	if (isset($_POST['prod'])) {
	    $response = "<ul ><li ><a href=\"clientes.create.php\">Agregar este cliente</a></li></ul>";
	    include 'connection.php';
	    $q   = $conector->real_escape_string($_POST['q']);
	    $sql = $conector->query("SELECT * FROM BODEGA WHERE DESCRIPCION LIKE '%$q%' ");
	    if ($sql->num_rows > 0) {
	        $response = '<ul class=list>';
	        while ($data = $sql->fetch_array()) {
	            $response .= "<li id=\"item\">" . $data['DESCRIPCION'] . "</li>";
	        }
	        $response .= "</ul>";
	    }
	    exit($response);
	}

	if(isset($_POST['button'])){
		$bodega='';
		$numeroSerie=$_POST['numeroSerie'];
		$fecha=$_POST['fecha'];
		$bodega=$_POST['bodega'];
		$id_cliente=$_POST['id_cliente'];
		$select="SELECT ID_BODEGA FROM BODEGA WHERE DESCRIPCION='" .$bodega. "' ";
		$resultado = mysqli_query($conector, $select);
		if($resultado) {
			$fila = " ";
			  while($fila){
				$fila = mysqli_fetch_array($resultado);
				if($fila['ID_BODEGA']!=''){
					$id_bodega=$fila['ID_BODEGA'];
				}
			 }
		}
		$insert="INSERT INTO FACTURA VALUES(null,'" . $numeroSerie . "', '" . $fecha . "', $id_cliente, $id_bodega, 1)";
		if ($conector->query($insert) === TRUE) {
		    $last_id = $conector->insert_id;
		    for ($i=0; $i < count($_POST["id_producto"]); $i++) {
			    $insert='';
			    $id_producto=$_POST['id_producto'][$i];
			    $cantidad=$_POST['cantidad'][$i];
			    $precio=$_POST['precio'][$i];
			    $insert="INSERT INTO FACTURA_DETALLE VALUES(null, $last_id, $id_producto, $cantidad, $precio)";
			    $resultado = mysqli_query($conector, $insert);
		    }
		} else {
		    echo "Error";
		}
		$conector->close();
	}


 ?>
