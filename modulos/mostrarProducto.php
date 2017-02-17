 <?php
$id= $_GET['id'];
 ?>
 <div id="main-buy">
    	 <h1>Datos de <?php echo getDatosProducto($id,'Producto');?></h1>
     <ul class="listing-buy">
	<?php imprimirProducto($id);?>
	</ul>
    </div>