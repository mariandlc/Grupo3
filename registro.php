<?php

require_once('funciones/usuarios.php');

$nombre = isset($_POST['name']) ? $_POST['name'] : null;
$apellido = isset($_POST['surname']) ? $_POST['surname'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$genero = isset($_POST['sex']) ? $_POST['sex'] : null;
$horario= $_POST['time_to_run'] ?? [];
$rango = isset($_POST['age_range_to_run']) ? $_POST['age_range_to_run'] : null;


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
  			    <label for="name">Nombre</label>
  			    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre" value=" <?php echo $nombre; ?>">
  			  </div>

          <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" class="form-control" id="surname" name="surname" value=" <?php echo $apellido; ?>" placeholder="Ingrese su apellido" >
          </div>
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese nombre" value=" <?php echo $username; ?>">
          </div>

          <div class="form-group">
            <label for="date">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="" required>
          </div>

          <div class="radio">
            <label class="radio-inline">
              <input type="radio" name="sex" id="male" value="0"  <?php echo($genero === "0") ? 'checked="checked"' : ''; ?>> Hombre
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" id="female" value="1"  <?php echo($genero == "1") ? 'checked="checked"' : ''; ?>> Mujer
            </label>
          </div>


        <label for="time_to_run">
          ¿En qué momento del día podes correr?</label>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="time_to_run[]" id="morning_run" value="0" <?php echo($horario === "0") ? 'checked="checked"' : ''; ?>>
            A la mañana
          </label>
          
          <label>
            <input type="checkbox" name="time_to_run[]" id="afternoon_run" value="1" <?php echo($horario == "1") ? 'checked="checked"' : ''; ?>>
            A la tarde
          </label>
    
          <label>
            <input type="checkbox" name="time_to_run[]" id="night_run" value="2" <?php echo($horario == "2") ? 'checked="checked"' : ''; ?>>
            A la noche
          </label>
        </div>

        <label for="age_range_to_run">
          ¿Te gustaria correr con personas en tu rango de edad?
        </label>
        <div class="radio">
        <label>
          <input type="radio" name="age_range_to_run" id="" value="0" <?php echo($rango === "0") ? 'checked="checked"' : ''; ?>>
          Si
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="age_range_to_run" id="" value="1" <?php echo($rango == "1") ? 'checked="checked"' : ''; ?>>
          No
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="age_range_to_run" id="indistinto" value="2" <?php echo($rango == "2") ? 'checked="checked"' : ''; ?>>
          ¡Me es indistinto!
        </label>
      </div>


          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingrese Email">
          </div>
        

          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="" >
          </div>


          <div class="form-group">
            <label for="password_confirm">Repetí tu contraseña</label>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="" >
          </div>

          <div class="checkbox">
					<label>
						<input type="checkbox" id="terms" name="terms"> Acepto los términos y condiciones
					</label>
				</div>

          <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Regístrate"/>
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
