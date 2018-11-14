<?php
	if(isset($_POST['search'])){
		$response = "<ul><li>No data found</li></ul>";
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$dbName = "ACME_DB";
		$connection = mysqli_connect($servidor, $usuario, $password, $dbName);
		$q=$connection->real_escape_string($_POST['q']);
		$sql = $connection->query("SELECT * FROM CLIENTE WHERE NIT LIKE '%$q%' ");
		if($sql -> num_rows > 0){
			$response = "<ul>";
			while($data = $sql->fetch_array()){
				$response .="<li>".$data['NIT']."</li>";
			}
			$response .= "</ul>";
		}
		exit($response);
	}
 ?>
 <style type="text/css">
 	ul{
 		float: left;
 		list-style: none;
 		padding: 0px;
 		border: 1px solid black;
 		margin-top: 0px;
 	}
 	input, ul{
 		width: 250px;
 	}
 	li:hover{
 		color: silver;
 		cursor: pointer;
 		background: #0088cc;
 	}
 </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<h1>ola k aze</h1>
<input type="text" name="" value="" placeholder="NIT" id="searchBox">
	<div id="response"></div>
	<h1>ala gran puta joel</h1>
<script type="text/javascript">
	$(document).ready(function(){
		$('#searchBox').keyup(function(){
			var a = $('#searchBox').val();
			$.ajax({
				url:'bah.php',
				method:'post',
				data: {
					search: 1,
					q:a
				},
				success: function(data){
					$('#response').html(data);
				},
				datatype:'text'

			});
		});
		$(document).on('click', 'li', function(){
			var b = $(this).text();
			$('#searchBox').val(b);
			$('#response').html('');
		})
	});
</script>





















<!--<div class="form-group col-md-3">
   <label for="inputEmail4"><strong>Nombre</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<div class="form-group col-md-3">
   <label for="inputPassword4"> <strong>Apellido</strong></label>
   <input type="text" class="form-control" id="inputPassword4" placeholder="">
</div>
<div class="form-group col-md-3">
   <label for="inputPassword4"> <strong>Dirección</strong></label>
   <input type="text" class="form-control" id="inputPassword4" placeholder="">
</div>
<div class="form-group col-md-3 ">
   <label for="inputEmail4"><strong>Nit</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>

-----------------------------------

<div class="form-group col-md-3">
   <label for="inputEmail4"><strong>Producto</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<div class="form-group col-md-3">
   <label for="inputEmail4"><strong>Cantidad</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<button class="btn" type="button" onclick="myFunction()">Otro</button>
<hr>
</div>
</div>-->

















<!--<div class="form-group col-md-3">
   <label for="inputEmail4"><strong>Nombre</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<div class="form-group col-md-3">
   <label for="inputPassword4"> <strong>Apellido</strong></label>
   <input type="text" class="form-control" id="inputPassword4" placeholder="">
</div>
<div class="form-group col-md-3">
   <label for="inputPassword4"> <strong>Dirección</strong></label>
   <input type="text" class="form-control" id="inputPassword4" placeholder="">
</div>
<div class="form-group col-md-3 ">
   <label for="inputEmail4"><strong>Nit</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>

-----------------------------------

<div class="form-group col-md-3">
   <label for="inputEmail4"><strong>Producto</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<div class="form-group col-md-3">
   <label for="inputEmail4"><strong>Cantidad</strong></label>
   <input type="text" class="form-control" id="inputEmail4" placeholder="">
</div>
<button class="btn" type="button" onclick="myFunction()">Otro</button>
<hr>
</div>
</div>-->
