<?php
	//Header html
	include'header.php';
?>
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
			<?php include('forms/providers/create.form.php'); ?>
		</div>

		<!-- Footer -->
		<?php include'footer.php'; ?>
	</div>
</div>
	<!--   Core JS Files   -->
	<?php include'bottom-scripts.php'; ?>
</body>

</html>