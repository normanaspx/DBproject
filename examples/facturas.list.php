<?php
   //Header html
   include'header.php';
   if(isset($_POST['search'])){
   	$response = "<ul><li>No se ecuentra</li></ul>";
	include'connection.php';
	$a='';
   	$q=$conector->real_escape_string($_POST['q']);
   	$sql = $conector->query("SELECT * FROM CLIENTE WHERE NIT LIKE '%$q%' ");
   	if($sql -> num_rows > 0){

   		$response = '<ul class=list>';
   		while($data = $sql->fetch_array()){

   			$response .="<li>".$data['NIT']."</li>";
   		}
   		$response .= "</ul>";
   	}

   	exit($response);
   }
 ?>
 <h1><?php $a; ?></h1>
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
     		<?php include('forms/Facturas/create.form.php'); ?>
         </div>
         <script type="text/javascript">
	    	let nit;
		$(document).ready(function(){
			$('#searchBox').keyup(function(){
				var a = $('#searchBox').val();
				$.ajax({
					url:'facturas.list.php',
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
				nit = $(this).text();
				$('#searchBox').val(nit);
				$('#response').html('');
			});
			$('#save').on('click', function(){
				$('#searchBox').val('');
				$('#nit').val(nit);
			});
		});
         </script>
      </div>
      <!-- Footer -->
   </div>
   </div>
   <!--   Core JS Files   -->
   <?php include'bottom-scripts.php'; ?>
</body>
</html>
