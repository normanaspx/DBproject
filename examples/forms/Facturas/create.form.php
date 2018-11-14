<div class="row">
   <div class="col-md-12">
	 <div class="card">
	    <div class="card-header">
		  <a style="float:right; text-align:center; font-size:20px;" href="facturas.list.php">
			<i class="now-ui-icons arrows-1_minimal-left"></i>
			<p><strong>Cancelar</strong></p>
		  </a>
		  <h3 class="title">Facturacion</h3>
	    </div>
	    <div class="container">
		  <br><br>
		  <!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
		  <form>
			<div class="form-row">
			   <div class="form-group col-md-4">
				 <label for="inputPassword4"> <strong>Numero de serie</strong></label>
				 <input type="text" class="form-control" id="inputPassword4" placeholder="A18">
			   </div>
			   <div class="form-group col-md-4">
				 <label for="inputPassword4"> <strong>Fecha</strong></label>
				 <input type="date" class="form-control" id="inputDate" placeholder="">
			   </div>
			   <div class="form-group col-md-4 ">
				 <label for="inputEmail4"><strong>Bodega</strong></label>
				 <input type="text" class="form-control" id="inputEmail4" placeholder="">
			   </div>
			</div>
			<hr>
			<div class="form-row">
			   <div class="form-row col-md-4">
				 <h4 class="title">Agregar cliente</h4>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				 Buscar cliente
				 </button>
				 <button type="button" class="btn btn-primary" onclick="addDefault();">
				 Consumidor final
				 </button>
			   </div>
			</div>
			<div class="form-row" id="row">
			   <div class="form-group col-md-3">
				 <label for="name"><strong>Nombre</strong></label>
				 <input type="text" name="nombre" id="nombre" value="" class="form-control">	
			   </div>
			   <div class="form-group col-md-3">
				 <label for="ape"> <strong>Apellido</strong></label>
				 <input type="text" class="form-control" id="ape" placeholder="">
			   </div>
			   <div class="form-group col-md-3">
				 <label for="dir"> <strong>Dirección</strong></label>
				 <input type="text" class="form-control" id="dir" placeholder="">
			   </div>
			   <div class="form-group col-md-3 ">
				 <label for="nit"><strong>Nit</strong></label>
				 <input type="text" class="form-control" id="nit" placeholder="">
			   </div>
			</div>
			<hr>
			<div class="form-row" id="mydiv">
			   <div class="form-row col-md-4">
				 <h4 class="title">Agregar productos</h4>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				 Buscar productos
				 </button>
				 <?php include('customer.php'); ?>
			   </div>
			</div>
		  </form>
		  <br>
	    </div>
	 </div>
   </div>
</div>
