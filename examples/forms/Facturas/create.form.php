<div class="row">
   <div class="col-md-12">
	 <div class="card">
	    <div class="card-header">
		  <a style="float:right; text-align:center; font-size:20px;" href="facturas.list.php">
			<i class="now-ui-icons arrows-1_minimal-left"></i>
			<p><strong>Cancelar</strong></p>
		  </a>
		  <h3 class="title">Facturación</h3>
	    </div>
	    <div class="container">
		  <br><br>
		  <!-- Para el grid: https://getbootstrap.com/docs/4.1/components/forms/#layout -->
		  <form method="post">
			<div class="form-row"  id="c">
			   <div class="form-group col-md-4">
				 <label for="inputPassword4"> <strong>Numero de serie</strong></label>
				 <input type="text" name="numeroSerie" class="form-control" id="inputPassword4" placeholder="A18">
			   </div>
			   <div class="form-group col-md-4">
				 <label for="inputPassword4"> <strong>Fecha</strong></label>
				 <input type="date" class="form-control" id="inputDate" placeholder="" name="fecha">
			   </div>
			   <div class="form-group col-md-4 ">
				 <label for="productsBox"><strong>Bodega</strong></label>
				 <input type="text" name="bodega" class="form-control" placeholder="" id="productsBox">
				 <div id="responseProd"></div>
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
			   <?php include'customer.php'; ?>
			</div>
			<div class="form-row" id="values">
				<div class="form-group col-md-3">
				   <label for="name"><strong>Nombre</strong></label>
				   <input type="text"  name="nombre" id="nombre"  class="form-control"  >
				</div>
				<div class="form-group col-md-3">
				   <label for="name"><strong>Apellidos</strong></label>
				   <input type="text"  name="apellido" id="ape"  class="form-control"  >
				</div>
				<div class="form-group col-md-3">
				   <label for="name"><strong>Direccion</strong></label>
				   <input type="text"  name="direccion" id="direccion"  class="form-control"  >
				</div>
			   <div class="form-group col-md-3">
				 <label for="nit"><strong>Nit</strong></label>
				 <input type="text" name="nit" class="form-control" id="nit" placeholder="" readonly>
			   </div>
			</div>
			<hr>
			<div class="form-row" id="mydiv">
			   <div class="form-row col-md-4">
				 <h4 class="title">Agregar productos</h4>
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
				 Buscar productos
				 </button>
				 <div class="modal fade bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
				   <div class="modal-dialog" role="document">
				     <div class="modal-content">
				       <div class="modal-header">
				         <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
				         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				           <span aria-hidden="true">&times;</span>
				         </button>
				       </div>
				       <div class="modal-body">
				 	     <div class="container">
				 	     	<div class="row" id="l">
				 				<input type="text" name="" value="" placeholder="Nombre producto..." id="Inputproducts" class="form-control">
				 				<div id="productsDiv">

				 				</div>
				 			</div>
				 	     </div>
				       </div>
				       <div class="modal-footer">
				         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				         <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveProduct">Grabar</button>
				       </div>
				     </div>
				   </div>
				 </div>

			   </div>
			</div>
			<div class="form-row" id="pdiv">

			</div>
			<br><hr>
			<button type="submit" name="button" class="btn">Grabar</button>
		  </form>
		  <br>
	    </div>
	 </div>
