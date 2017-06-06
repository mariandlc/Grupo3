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

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

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
		<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
		<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
	</body>
	</html>
	';
}
