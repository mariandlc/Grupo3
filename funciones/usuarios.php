<?php

define('USERS_FILE', 'users.json');

require_once('validacion.php');

function registrar(array $post){
	
	$datos = $post;

	if(!$errores = validate($datos)){
	    echo "OKK";
	    saveUser($datos);
	}

	return $errores;
}

// not yet

/*function checkDuplicado($field, $value)
{

	$usuarios = listUsers();

	foreach($usuarios as $usuario)
	{
		if(strtolower(trim($usuario[$field])) == strtolower(trim($value)))
		{
			return $usuario;
		}
	}

	return false;
}*/

function saveUsersFile(array $users = [])
{
	$content = [
		'usuarios' => $users 
	];
	
	$writable = ( is_writable('users.json') ) ? true : chmod('users.json', 0755);

	if ( $writable ) {
	    echo file_put_contents('users.json', json_encode($content)); 
	} else {
	    echo "FAIL PERMISSION";
	}

}

/**
 * @return array
 */
function listUsers()
{
	if(!file_exists(USERS_FILE))
	{
		saveUsersFile();
		
	}

	$usuarios = file_get_contents(USERS_FILE);
	$usuarios = json_decode($usuarios, true);

	return $usuarios['usuarios'];
}

function saveUser(array $datos)
{
	$datos['password'] = password_hash($datos['password'], PASSWORD_DEFAULT);

	unset($datos['password_confirm']);

	$datos['email'] = strtolower(trim($datos['email']));
	unset($datos['email_confirm']);

	$datos['username'] = strtolower(trim($datos['username']));

	unset($datos['terms']);

	//id
	$datos['id'] = nextId();

	$usuarios = listUsers();
	$usuarios[] = $datos;


	saveUsersFile($usuarios);

	//guardarUserEnSession($datos);
}

function nextId()
{
	$usuarios = listUsers();

	$id = 0;

	if(count($usuarios) == 0){
		return 1;
	}

	foreach($usuarios as $usuario){
		
		if($id < $usuario['id'])
		{
			$id = $usuario['id'];
		}
	}

	return $id + 1;
}


 ?>
