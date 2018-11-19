<?php
	include 'header.php';
	include('forms/Facturas/functions.php');
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
     		<?php include('forms/Facturas/create.form.php'); ?>
         </div>
         <script type="text/javascript">
	    	let nit, js, almacen;
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
			$("#j").on('click', 'li', function(){
				nit = $(this).text();
				$('#searchBox').val(nit);
				$('#response').html('');
			});

			$('#productsBox').keyup(function(){
				var a = $('#productsBox').val();
				$.ajax({
					url:'facturas.list.php',
					method:'post',
					data: {
						prod: 1,
						q:a
					},
					success: function(data){
						$('#responseProd').html(data);
					},
					datatype:'text'

				});
			});
			$("#c").on('click', 'li', function(){
				almacen = $(this).text();
				$('#productsBox').val(almacen);
				$('#responseProd').html('');
			});


			$('#Inputproducts').keyup(function(){
				var a = $('#Inputproducts').val();
				$.ajax({
					url:'facturas.list.php',
					method:'post',
					data: {
						new: 1,
						q:a
					},
					success: function(data){
						$('#productsDiv').html(data);
					},
					datatype:'text'

				});
			});
			$("#l").on('click', 'li', function(){
				almacen = $(this).text();
				$('#Inputproducts').val(almacen);
				$('#productsDiv').html('');
			});




			$('#save').on('click', function(){
				//$('#values').html('');
				var a = $('#searchBox').val();
				$.ajax({
					url:'facturas.list.php',
					method:'post',
					data: {
						boton: 1,
						q:a
					},
					success: function(data){
						$('#values').html(data);
					}
				});
				$('#searchBox').val('');
				$('#nit').val(nit);
			});

			$('#saveProduct').on('click', function(){
				//$('#values').html('');
				var a = $('#Inputproducts').val();
				$.ajax({
					url:'facturas.list.php',
					method:'post',
					data: {
						new2: 1,
						q:a
					},
					success: function(data){
						$('#pdiv').append(data);
					}
				});
				$('#Inputproducts').val('');
			});
		});
		function addDefault(){
			$('#nit').val('C/F');
		}
         </script>
      </div>
      <!-- Footer -->
   </div>
   </div>
   <!--   Core JS Files   -->
   <?php include'bottom-scripts.php'; ?>
</body>
</html>
