<?php
function abrirHtml($title, $description)
{
	echo '
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registración</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
			<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>
	';
}

function cabecera()
{
	echo '
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

      <!-- Logo -->
      <div class="navbar-header">

        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#mainNavBar">
          <spam class="icon-bar"></spam>
          <spam class="icon-bar"></spam>
          <spam class="icon-bar"></spam>
        </button>

        <a href="index.php" class="navbar-brand">
          <!-- <img src="images/logo.jpg" width="55" height="50" alt="">-->
          Run Argentina
        </a>
      </div>

      <!-- Menu -->
      <div class="collapse navbar-collapse " id="mainNavBar">
        <ul class="nav navbar-nav">
          <li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
        </ul>

      <!--right align-->
        <ul id="ul-right" class="nav navbar-nav navbar-right">
        ';

          if(isUserLoggedIn())
          {
						echo '<li style="font-size:16px;"><a style="color:cyan;">Hola, '.$_SESSION['user']['name'].'</a></li>;
            <li><a href="logout.php">Logout</a></li>';

          }
          else {
            echo '<li><a href="login.php">Inicia sesión</a></li>
            <li class="active"><a href="registro.php">Regístrate</a></li>';
          }

          echo '



        </ul>
      </div>
    </div>
  </nav>
	';
}

function footer()
{
	echo '
		<div class="text-center">&copy; ' . date('Y') . '</div>
	';
}

function cerrarHtml()
{
	echo '
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
		<script>
	AOS.init();
	</script>
	</body>
	</html>
	';
}
