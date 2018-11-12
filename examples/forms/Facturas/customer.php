<?php
	include'connection.php';
	$nit="asda";
	$output='';
	$querySelect = "SELECT * FROM CLIENTE WHERE NIT LIKE ' ".$nit." %' ";
	$resultado = mysqli_query($conector, $querySelect);
	$count=mysqli_num_rows($resultado);
	echo $count;
/*	if($count==0){
		$output = 'No existe este cliente';
	}else{

	}*/

 ?>
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	     <div class="container">
	     	<div class="row">
				<formmethod="post">
					<input type="text" name="nit" value="" class="form-control" placeholder="NIT">
					<button type="submit" name="button">Verficar</button>
				</form>

	     	</div>
	     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
