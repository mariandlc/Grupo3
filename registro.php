<?php
require_once('requires.php');

$nombre = isset($_POST['name']) ? $_POST['name'] : null;
$apellido = isset($_POST['surname']) ? $_POST['surname'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$genero = isset($_POST['gender']) ? $_POST['gender'] : null;
$horario = isset($_POST['time_to_run']) ? $_POST['time_to_run'] : [];
$rango = isset($_POST['age_range_to_run']) ? $_POST['age_range_to_run'] : null;
print_r($_POST);
print_r($horario);

$errores = [];

if($_POST)
{
	//if(!$errores)
	//if(count($errores) == 0)
	if(!($errores = registrar($_POST)))
	{
		header('location: index.php');
		exit;
	}
}

abrirHtml('Registración', '');
cabecera();

?>

	<div class="container" style="width:500px; margin:0 auto">


				<div class="alert alert-danger" id="errors" style=" margin-top:20px ;display:none ">

				</div>

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


  			<form style="margin-top:10px" role="form" id="form-register" action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
  			    <label for="name">Nombre</label>
  			    <input type="text" class="form-control" id="name" name="name"  value=" <?php echo $nombre; ?>">
  			  </div>

          <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" class="form-control" id="surname" name="surname" value=" <?php echo $apellido; ?>"  >
          </div>
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input type="text" class="form-control" id="username" name="username" value=" <?php echo $username; ?>">
          </div>


          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" >
          </div>

					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" name="password" id="password" >
					</div>

          <div class="form-group">
            <label for="password_confirm">Repetí tu contraseña</label>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm"  >
          </div>

          <div class="form-group">
            <label for="date">Fecha de nacimiento</label>
<<<<<<<
            <input type="date" class="form-control" id="date" name="date" required>
=======
            <input type="date" class="form-control" id="date" name="date" placeholder="" value="" required>
>>>>>>>
          </div>

          <div class="radio">
            <label class="radio-inline">
              <input type="radio" name="gender" id="male" value="0"  <?php echo($genero === "0") ? 'checked="checked"' : ''; ?>> Hombre
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" id="female" value="1"  <?php echo($genero == "1") ? 'checked="checked"' : ''; ?>> Mujer
            </label>
          </div>

<<<<<<<

=======

        <label for="time_to_run">
          ¿En qué momento del día podes correr?</label>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="time_to_run[]" id="morning_run" value="0" <?php echo($horario[0] === "0") ? 'checked="checked"' : ''; ?>>
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

>>>>>>>
          <div class="checkbox">
					<label>
						<input type="checkbox" id="terms" name="terms"> Acepto los términos y condiciones
					</label>
				</div>

          <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Registrase "/>
  			</form>

  	  </div>

	</div>


<?php
footer();
cerrarHtml();
?>
