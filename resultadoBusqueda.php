<?php
session_start();
require_once('core/conexion.php');
require_once('core/functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Todo Vehiculos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/motor.png" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/popUp.css" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/validar.js"></script>
<script type="text/javascript" src="js/popUp.js"></script>
<script type="text/javascript" src="js/js_axaj.js"></script>
</head>
<body>
<div id="wrap">
<div id="header">
    <div id="sitename">
      <h1 id="logo"><a href="index.html"><img src="images/logo.png"/></a></h1>
    </div>
    <div class="lenguage">
    <?php include_once('modulos/idioma.php');?>
    </div>
    <div id="useractions">
	<?php 
	include_once('modulos/formLogin.php');
	 echo'</div>';
    include_once('modulos/formRegistro.php');
    ?>
	</div>
	</div>
  	<div id="content">
    	<div id="home_main">
      	<?php include_once('modulos/formBusqueda.php'); ?>
    	</div>
    <div id="home_sidebar">
      	<?php include_once('modulos/menu.php'); ?>
    </div>
    <div class="clear">&nbsp;</div>
    <div id="main-buy">
	<?php
	busqueda();
	?>
    </div>
    <div class="clear">&nbsp;</div>
  </div>
  <div id="footer">
  <?php include_once('footer.php') ?>
   </div>
</div>
</body>
</html>
