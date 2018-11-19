<?php
 	$acum=0;
	if(isset($_POST['new2'])) {
	    include 'connection.php';
	    $q   = $conector->real_escape_string($_POST['q']);
	    $sql = $conector->query("SELECT * FROM PRODUCTO WHERE NOMBRE = '$q' ");
	    if ($sql->num_rows > 0) {
	        while ($data = $sql->fetch_array()) {
			    	$acum++;
				$response = "<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Cantidad</strong></label>
				  <input type=\"text\" value=\"1\" name=\"cantidad\"  class=\"form-control\">
				</div>
				<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Descripción</strong></label>
				  <input type=\"text\" readonly value=\"" . $data['NOMBRE'] . "\" name=\"nombreProd[]\" id=\"nombre\" class=\"form-control\">
				</div>
				<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Descuento</strong></label>
				  <input type=\"number\" max=\"" . (integer)$data['PRECIO'] . "\"  name=\"descuento\" id=\"direccion\"  class=\"form-control\">
				</div>
				<div class=\"form-group col-md-3\">
				  <label for=\"name\"><strong>Precio</strong></label>
				  <input type=\"text\" readonly value=\"" . $data['PRECIO'] . "\"  name=\"precio\" id=\"direccion\"  class=\"form-control\">
				</div>";
	        }
	    }
	    exit($response);
	}

	if (isset($_POST['new'])) {
	    $response = "<ul><li><a href=\"clientes.create.php\">Agregar este cliente</a></li></ul>";
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
	               <input type=\"text\" value=\"" . $data['NOMBRES'] . "\" name=\"nombre\" id=\"nombre\"  class=\"form-control\">
	            </div>
	            <div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>Apellidos</strong></label>
	               <input type=\"text\" value=\"" . $data['APELLIDOS'] . "\" name=\"apellido\" id=\"ape\"  class=\"form-control\">
	            </div>
	            <div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>Direccion</strong></label>
	               <input type=\"text\" value=\"" . $data['DIRECCION'] . "\" name=\"direccion\" id=\"direccion\"  class=\"form-control\">
	            </div>
	            <div class=\"form-group col-md-3\">
	               <label for=\"name\"><strong>NIT</strong></label>
	               <input type=\"text\" value=\"" . $data['NIT'] . "\" name=\"nit\" id=\"nit\"  class=\"form-control\">
	            </div>
	            ";
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

	print_r($_POST);
	if(isset($_POST["nombreProd"]) && is_array($_POST["nombreProd"])){
	    $subject = implode(", ", $_POST["nombreProd"]);
	    echo $subject;
	}


 ?>
