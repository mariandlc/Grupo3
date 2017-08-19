<?php
require_once('requires.php');


$errores = [];
if ($_POST)
{
	$errores = validarLogin($_POST);
	if(!count($errores))
	{
		$errores = loguearUsuario($_POST);
    if(!count($errores))
  	{
      header('location: index.php');
  		exit;

  	}
	}
}


abrirHtml('Login', '');
cabecera();


?>

<?php if (count($errores)){ ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Error!</strong><br/>
			<?php foreach($errores as $field => $message) {
				echo '<b>' . $field . ': </b>' . $message . '<br/>';
			} ?>
		</div>
	<?php } ?>
	<div class="container" style="height:100vh">

    <div class="col-xs-0 col-sm-4 col-md-4">

    </div>

    <div class="col-xs-12 col-sm-4 col-md-4" style="margin-top:100px">

      <form method="post" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="text" name="email" value="<?php echo(isset($_POST['email']) ? $_POST['email'] : '') ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="recordarme" value="1"> Recordarme
          </label>
        </div>
                  <!-- //FALTA PROGRAMAR !!! -->
        <a href="index.php">¿Olvidaste tu contraseña?</a>
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Inicia sesión</button>
      </form>

    </div>


    <div class="col-xs-0 col-sm-4 col-md-4">

    </div>
	</div>

<?php
footer();
cerrarHtml();
?>
