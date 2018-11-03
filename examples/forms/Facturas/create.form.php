<div class="row">
  <div class="col-md-12">
    <div class="card">
		<div class="card-header">
			<a style="float:right; text-align:center; font-size:20px;" href="facturas.list.php">
				<i class="now-ui-icons arrows-1_minimal-left"></i>
				<p><strong>Cancelar</strong></p>
				
			</a>
			<h3 class="title">Agregar factura</h3>
		</div>
	 	<div class="container">
			 <br><br>
			<!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
			<form>
				<div class="form-row">
			       <div class="form-group col-md-3">
			         <label for="inputEmail4"><strong>Numero de factura</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="">
			       </div>
			       <div class="form-group col-md-3">
			         <label for="inputPassword4"> <strong>Numero de serie</strong></label>
			         <input type="text" class="form-control" id="inputPassword4" placeholder="">
			       </div>
				  <div class="form-group col-md-3">
				    <label for="inputPassword4"> <strong>Fecha</strong></label>
				    <input type="text" class="form-control" id="inputPassword4" placeholder="">
					</div>
					<div class="form-group col-md-3 ">
			         <label for="inputEmail4"><strong>Bodega</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="">
			       </div>
			 </div>
			
			</form>
			<h6>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h1>
			<form>
				<div class="form-row">
			       <div class="form-group col-md-3">
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
			 </div>
			 <h6>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h1>
			 <form>
				<div class="form-row" id="mydiv">
			       <div class="form-group col-md-3">
			         <label for="inputEmail4"><strong>Producto</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="">
						 </div>
						 <div class="form-group col-md-3">
			         <label for="inputEmail4"><strong>Cantidad</strong></label>
			         <input type="text" class="form-control" id="inputEmail4" placeholder="">
						 </div>
						 <button class="btn" type="button" 	onclick="myFunction()">Otro</button>
						 <h6> ------------------------------------------------------</h6>
			 </div>
			
			<script>
						function myFunction() {
    				var para = document.createElement("INPUT");
    				para.setAttribute('class', 'form-control col-md-3');
						document.body.appendChild(para);
    				document.getElementById("mydiv").appendChild(para);
						}
			</script>
			 
			 
			 <div class="form-row" style="float:center;">
					<button class="btn" type="button" name="button">Guardar</button>
				</div>
			</form>
			
			
			<br>
	 	</div>
	 </div>
    </div>
  </div>
</div>
