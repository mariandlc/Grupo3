<?php

define('PASSWORD_MIN_LENGTH', 8);

function validate(array $datos)
{
	$errores = [];

	if(!isset($datos['nombre']) ||
		trim($datos['nombre']) == '')
	{
		$errores['nombre'] = 'Debe ingresar un nombre';
	}

	if(!isset($datos['apellido']) ||
		trim($datos['apellido']) == '')
	{
		$errores['apellido'] = 'Debe ingresar un apellido';
	}



	if(!isset($datos['email']) ||
		!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)
	)
	{
		$errores['email'] = 'Debe ingresar un email válido';
	}
  //HACER CHECKDUPLICADO
  /*
  elseif(checkDuplicado('email', $datos['email'])) //chequear que el mail no exista aun
	{
		$errores['email'] = 'El mail ingresado ya existe en nuestra base de datos';
	}
  */

	if(strlen($datos['contrasena']) < PASSWORD_MIN_LENGTH)
	{
		$errores['contrasena'] = 'El contraseña debe tener al menos ' . PASSWORD_MIN_LENGTH . ' caracteres';
	}
	elseif($datos['contrasena'] != $datos['contrasena_confirm'])
	{
		$errores['contrasena_confirm'] = 'El contraseña y su confirmacióm deben coincidir';
	}

	if(!isset($datos['genero']))
	{
		$errores['genero'] = 'Debe seleccionar su sexo';
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

	if(!isset($datos['terminos']))
	{
		$errores['terminos'] = 'Debe aceptar los términos y condiciones';
	}

	return $errores;
}



 ?>
