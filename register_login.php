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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
      <div id="form_login_register">
        <form id="Register">
          <h1 id="Title_Register" class="tittle">REGISTER</h1>
			<div class="row">
				<div class="col-md-6">
          <div class="form-group">
    <label for="exampleInputEmail1" class="inputs_register_login">Nombre</label>
    <input type="text" class="input_register_login" id="nom" name="nom" placeholder="Nombre...">
  </div>
  <div class="form-group">
<label for="exampleInputEmail1" class="inputs_register_login">Usuario</label>
<input type="text" class="input_register_login" id="user" name="user" placeholder="Usuario...">
</div>
<div class="form-group">
<label for="exampleInputEmail1" class="inputs_register_login">E-mail</label>
<input type="email" class="input_register_login" id="e-mail" name="e-mail" placeholder="E-Mail...">
</div>
				</div>
				<div class="col-md-6">
          <div class="form-group">
        <label for="exampleInputEmail1" class="inputs_register_login">Apellidos</label>
        <input type="text" class="input_register_login" id="cognoms" name="cognoms" placeholder="Apellidos...">
        </div>
          <div class="form-group">
        <label for="exampleInputEmail1" class="inputs_register_login">Contraseña</label>
        <input type="password" class="input_register_login" id="pass" name="pass" placeholder="Contraseña...">
        </div>
          <div class="form-group">
    <label for="exampleInputEmail1" class="inputs_register_login">Instituto</label>
    <input type="text" class="input_register_login" id="inst" name="inst" placeholder="Instituto...">
  </div>
				</div>
			</div>
    </form>
		</div>
  </div>
	</div>
</div>
   </body>
 </html>
