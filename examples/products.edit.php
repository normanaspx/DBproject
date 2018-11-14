<?php
	//Header html
	include'header.php';
	if(isset($_POST['search'])){
	  $response = "<ul><li>No existe</li></ul>";
	  include'connection.php';
	  $q=$conector->real_escape_string($_POST['q']);
	  $sql = $conector->query("SELECT * FROM PROVEEDOR WHERE NOMBRE  LIKE '%$q%' ");
	  if($sql -> num_rows > 0){
		  $response = '<ul class=list>';
		  while($data = $sql->fetch_array()){
   			  	$response .="<li>".$data['NOMBRE']."</li>";
				$id_p=$data['ID_PROVEEDOR'];
		  }
		  $response .= "</ul>";
	  }
	  exit($response);
	}
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
			<?php include('forms/products/edit.form.php'); ?>
		</div>
		<br><br>
		<script type="text/javascript">
		   $(document).ready(function(){
		    $('#searchBox').keyup(function(){
			    var a = $('#searchBox').val();
			    $.ajax({
				    url:'products.edit.php',
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
		<!-- Footer -->
		<?php include'footer.php'; ?>
	</div>
</div>
	<!--   Core JS Files   -->
	<?php include'bottom-scripts.php'; ?>
</body>

</html>
