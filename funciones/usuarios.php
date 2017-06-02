<?php

require_once('validacion.php');

function registrar(array $post){
	
	$datos = $post;

	if(!$errores = validate($datos)){
	    echo "OKK";
	    //guardarUsuario($datos);
	}

	return $errores;
}


 ?>
