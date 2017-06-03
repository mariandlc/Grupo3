<?php

define('PASSWORD_MIN_LENGTH', 8);

function validate(array $datos)
{
	$errores = [];

	if(!isset($datos['name']) ||
		trim($datos['name']) == '')
	{
		$errores['name'] = 'Debe ingresar un nombre';
	}

	if(!isset($datos['surname']) ||
		trim($datos['surname']) == '')
	{
		$errores['surname'] = 'Debe ingresar un apellido';
	}

	if(!isset($datos['username']) ||
		trim($datos['username']) == '')
	{
		$errores['username'] = 'Debe ingresar un apellido';
	}



	if(!isset($datos['email']) ||
		!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)
	)
	{
		$errores['email'] = 'Debe ingresar un email válido';
	}
  elseif(checkDuplicado('email', $datos['email'])) //chequear que el mail no exista aun
	{
		$errores['email'] = 'El mail ingresado ya existe en nuestra base de datos';
	}


	if(strlen($datos['password']) < PASSWORD_MIN_LENGTH)
	{
		$errores['password'] = 'El contraseña debe tener al menos ' . PASSWORD_MIN_LENGTH . ' caracteres';
	}
	elseif($datos['password'] != $datos['password_confirm'])
	{
		$errores['password_confirm'] = 'La contraseña y su confirmacióm deben coincidir.';
	}

	if(!isset($datos['gender']))
	{
		$errores['gender'] = 'Debe seleccionar su sexo';
	}

/*
	if(
		!$datos['fnac_dia'] || !$datos['fnac_mes'] || !$datos['fnac_anio'] ||
		!checkdate($datos['fnac_mes'], $datos['fnac_dia'], $datos['fnac_anio'])
	)
	{
		$errores['fnac_dia'] = 'La fecha de nacimiento es inválida';
	}
*/

	if(!isset($datos['time_to_run']) || count($datos['time_to_run']) < 1)
	{
		$errores['time_to_run'] = 'Debe seleccionar al menos ' . 1 . ' horario.';
	}

	if(!isset($datos['terms']))
	{
		$errores['terms'] = 'Debe aceptar los términos y condiciones';
	}

	return $errores;
}

function validarLogin(array $datos)
{
	$errores = [];

	if(!isset($datos['email']) ||
		!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)
	)
	{
		$errores['email'] = 'Debe ingresar un email válido';
	}

	if(trim($datos['password']) == '')
	{
		$errores['password'] = 'Debe ingresar un password';
	}

	return $errores;

}

 ?>
