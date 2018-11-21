<?php
	include'header.php';
	if (isset($_POST['search'])) {
	    $response = "<ul><li><a href=\"#\">No existe este rol/a></li></ul>";
	    include 'connection.php';
	    $q   = $conector->real_escape_string($_POST['q']);
	    $sql = $conector->query("SELECT * FROM ROL WHERE DESCRIPCION LIKE '%$q%' ");
	    if ($sql->num_rows > 0) {

	        $response = '<ul class=list>';
	        while ($data = $sql->fetch_array()) {

	            $response .= "<li>" . $data['DESCRIPCION'] . "</li>";
	        }
	        $response .= "</ul>";
	    }

	    exit($response);
	}
?>
<body class="user-profile">
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
<body class="user-profile">
<div class="wrapper ">
	<!-- Sidebar -->
	<?php include'sidebar.php'; ?>

	<div class="main-panel">

		<!-- Navbar -->
		<?php include'top-navbar.php'; ?>

		<!-- Canvas -->
		<div class="panel-header panel-header-sm">
		</div>

		<!-- Forms -->
		<div class="content">
			<?php include('forms/usuarios/create.form.php'); ?>
		</div>

	</div>
	<script type="text/javascript">
		$('#rol').keyup(function(){
			var a = $('#rol').val();
			$.ajax({
				url:'usuarios.create.php',
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
		$("#j").on('click', 'li', function(){
			rol = $(this).text();
			$('#rol').val(rol);
			$('#response').html('');
		});
	</script>
</div>
	<!--   Core JS Files   -->
	<?php include'bottom-scripts.php'; ?>
</body>

</html>
