<?php
session_start();

$login=trim(filter_var($_POST['login'],FILTER_SANITIZE_STRING));
$password=trim(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
$hash = password_hash($password, PASSWORD_BCRYPT);	

<<<<<<< HEAD
require_once 'mysql_connect.php';
require_once 'sqlFunctions/authFunc.php';						
	authMain($login,$password,$hash,$pdo);
=======
require_once 'mysql_connect.php';	
require_once 'sqlFunctions/authFunc.php';						

$user = authGetUserId($login,$pdo);									//To get user's id and password from db

if ($user->id == 0) {
	authAddUser($login,$hash,$pdo);									//To Add New user to db
	$user_id = authGetUserId($login,$pdo);							//To Get New User's id for session
	$_SESSION["user_id"] = $user_id->id;
	$_SESSION["auth_err"] = '';	
	header('Location: tasklist.php ');

} elseif (($user->id!=0)&&(password_verify($password, $user->password))) {
	$_SESSION["user_id"] = $user->id;
	$_SESSION["auth_err"] = '';	
	header('Location: tasklist.php ');
} else {
	$_SESSION["auth_err"] = 'Введите верный пароль';
	header('Location: index.php ');
}


>>>>>>> 4a1eb6558dcd6ceb929a441a4f7cfb5b379cca0b
?>