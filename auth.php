<?php
session_start();

$login=trim(filter_var($_POST['login'],FILTER_SANITIZE_STRING));
$password=trim(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
$hash = password_hash($password, PASSWORD_BCRYPT);	


require_once 'mysql_connect.php';
require_once 'sqlFunctions/authFunc.php';						
	authMain($login,$password,$hash,$pdo);

?>