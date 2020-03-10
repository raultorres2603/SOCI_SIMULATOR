<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location:./app/menu.php");
}
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>International Simulator</title>
     <!--/////////////BOOTSTRAP///////////////////-->
     <link rel="stylesheet" href="./css/Bootstrap/css/bootstrap.min.css">
     <script src="./css/Bootstrap/js/bootstrap.min.js"></script>
     <!--/////////////////////////////////////////-->
     <link rel="stylesheet" href="./css/main.css">
     <!--//////////////////JQUERY/////////////////-->
     <script src="./ext/JQuery.js"></script>
     <!--/////////////////////////////////////////-->
   </head>
   <body>
     <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <h1 class="title transitions">REGISTRO</h1>
      <h1 class="sub-title transitions">Simulador de Operaciones de Comercio Internacional</h1>
			<div class="row">
				<div class="col-md-6">
          <label class="label_form transitions">Nombre:</label><input type="text" class="button-reg-log transitions" placeholder="Nombre" maxlength="10" id="name" name="name">
				</div>
				<div class="col-md-6">
          <label class="label_form transitions">Apellido:</label><input type="text" class="button-reg-log transitions" placeholder="Apellido" maxlength="10" id="surname" name="surname">
				</div>
			</div>
		</div>
	</div>
</div>
   </body>
 </html>
