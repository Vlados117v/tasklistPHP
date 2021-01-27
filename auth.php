<?php
session_start();

$login=trim(filter_var($_POST['login'],FILTER_SANITIZE_STRING));
$password=trim(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
$hash = password_hash($password, PASSWORD_BCRYPT);	

require_once 'mysql_connect.php';								//Connecting to db

require_once 'sqlRequests/authRequest.php';						//To get user's id and password from db


if ($user->id==0) {
	require_once 'sqlRequests/authAddUser.php';					//To Add New user to db
	require_once 'sqlRequests/authGetUserId.php';				//To Get New User's id for session
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


?>