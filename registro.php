<?php

require_once('funciones/usuarios.php');

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$genero = isset($_POST['genero']) ? $_POST['genero'] : null;
$horario = isset($_POST['horario']) ? $_POST['horario'] : null;
$rango = isset($_POST['rango']) ? $_POST['rango'] : null;



$errores = [];
if($_POST)
{
	//if(!$errores)
	//if(count($errores) == 0)
	if(!($errores = registrar($_POST)))
	{
		header('location: index.html');
		exit;
	}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registración</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">

          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#mainNavBar">
            <spam class="icon-bar"></spam>
            <spam class="icon-bar"></spam>
            <spam class="icon-bar"></spam>
          </button>

          <a href="index.html" class="navbar-brand">
            <!-- <img src="images/logo.jpg" width="55" height="50" alt="">-->
            Run Argentina
          </a>
        </div>

        <!-- Menu -->
        <div class="collapse navbar-collapse " id="mainNavBar">
          <ul class="nav navbar-nav">
            <li><a href="preguntasfrecuentes.html">Preguntas frecuentes</a></li>
          </ul>

        <!--right align-->
          <ul id="ul-right" class="nav navbar-nav navbar-right">
            <li><a href="login.html">Inicia sesión</a></li>
            <li class="active"><a href="registro.html">Regístrate</a></li>
          </ul>
        </div>
      </div>
    </nav>

  		<div class="col-xs-0 col-sm-4 col-md-4">

  		</div>

  	  <div class="col-xs-12 col-sm-4 col-md-4">


        <div class="row">
        			<?php
        			//if(count($errores) > 0) {
        			//if(!empty($errores)) {
        			if($errores) { ?>
        				<div class="alert alert-danger">
        				<?php foreach($errores as $error) {
        					echo $error . '<br>';
        				}?>
        				</div>
        			<?php } ?>


  			<form role="form" action="" method="post" enctype="multipart/form-data">
  			  <div class="form-group">
  			    <label for="exampleInputEmail1">Nombre</label>
  			    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" value=" <?php echo $nombre; ?>">
  			  </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value=" <?php echo $apellido; ?>" placeholder="Ingrese su apellido" >
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="" required>
          </div>

          <div class="radio">
            <label class="radio-inline">
              <input type="radio" name="genero" id="genero_masculino" value="0"  <?php echo($genero === "0") ? 'checked="checked"' : ''; ?>> Hombre
            </label>
            <label class="radio-inline">
              <input type="radio" name="genero" id="genero_femenino" value="1"  <?php echo($genero == "1") ? 'checked="checked"' : ''; ?>> Mujer
            </label>
          </div>


            <label for="exampleInputEmail1">¿En qué momento del día podes correr?</label>
            <div class="radio">
          <label>
            <input type="radio" name="horario" id="mañana" value="0" <?php echo($horario === "0") ? 'checked="checked"' : ''; ?>>
            A la mañana
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="horario" id="tarde" value="1" <?php echo($horario == "1") ? 'checked="checked"' : ''; ?>>
            A la tarde
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="horario" id="noche" value="2" <?php echo($horario == "2") ? 'checked="checked"' : ''; ?>>
            A la noche
          </label>
        </div>

        <label for="exampleInputEmail1">¿Te gustaria correr con personas en tu rango de edad?</label>
        <div class="radio">
        <label>
          <input type="radio" name="rango" id="si" value="0" <?php echo($rango === "0") ? 'checked="checked"' : ''; ?>>
          Si
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="rango" id="no" value="1" <?php echo($rango == "1") ? 'checked="checked"' : ''; ?>>
          No
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="rango" id="indistinto" value="2" <?php echo($rango == "2") ? 'checked="checked"' : ''; ?>>
          ¡Me es indistinto!
        </label>
      </div>


          <div class="form-group">
            <label for="exampleInputPassword1">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingrese Email">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="" >
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1">Repetí tu contraseña</label>
            <input type="password" class="form-control" name="contrasena_confirm" id="contrasena_confirm" placeholder="" >
          </div>

          <div class="checkbox">
					<label>
						<input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
					</label>
				</div>

          <input type="submit" class="btn btn-primary btn-lg btn-block" name="btn_submit" value="Regístrate"/>
  			</form>

  	  </div>


  		<div class="col-xs-0 col-sm-4 col-md-4">

  		</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
