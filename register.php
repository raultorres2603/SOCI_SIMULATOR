<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location:./app/menu.php");
}
include("./ext/conn.php");
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>International Simulator</title>
     <!--//////////////////JQUERY/////////////////-->
     <script src="./ext/JQuery.js"></script>
     <!--/////////////////////////////////////////-->
     <!--/////////////BOOTSTRAP///////////////////-->
     <link rel="stylesheet" href="./css/Bootstrap/css/bootstrap.min.css">
     <script src="./css/Bootstrap/js/bootstrap.min.js"></script>
     <!--/////////////////////////////////////////-->
     <link rel="stylesheet" href="./css/main.css">
   </head>
   <body>
     <div class="container-fluid" id="principal-content">
	<div class="row">
		<div class="col-md-12">
      <h1 class="title transitions">REGISTRO</h1>
      <h1 class="sub-title transitions">Simulador de Operaciones de Comercio Internacional</h1>
			<div class="row">
				<div class="col-md-6">
          <label class="label_form transitions" id="label1">Nombre:</label><input type="text" class="button-reg-log transitions" maxlength="10" id="input1" name="input1">
				</div>
				<div class="col-md-6">
          <label class="label_form transitions" id="label2">Apellido:</label><input type="text" class="button-reg-log transitions" maxlength="30" id="input2" name="input2">
				</div>
			</div>
      <input type="text" style="display:none" value="first" id="position">
      <button type="button" class="button-register-login transitions" onclick="next($('#position').val())">NEXT</button>
		</div>
	</div>
</div>
<script src="./js/main.js"></script>
   </body>
 </html>
