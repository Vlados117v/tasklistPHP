<?php
//require_once 'mysql_connect.php';

function authGetUserId($login,$pdo) {
<<<<<<< HEAD
	$sql='SELECT `id`, `password` FROM `users` WHERE `login`=:login';
	$query=$pdo->prepare($sql);
	$query->execute(['login'=>$login]);
	$user = $query->fetch(PDO::FETCH_OBJ);
	return $user;
}

function authAddUser($login,$hash,$pdo) {
	$sql='INSERT INTO users(login,password) VALUES(?,?)';
	$query=$pdo->prepare($sql);
	$query->execute([$login,$hash]);
}


function authMain($login,$password,$hash,$pdo) {
	$user = authGetUserId($login,$pdo);	
	$return;
	$header_loc;
if ($user->id == 0) {
	authAddUser($login,$hash,$pdo);									//To Add New user to db
	$user_id = authGetUserId($login,$pdo);
	$_SESSION["user_id"] = $user_id->id;
	$_SESSION["auth_err"] = '';	
	$return = $user_id->id;
	$header_loc = 'Location: tasklist.php ';
} elseif (($user->id!=0)&&(password_verify($password, $user->password))) {
	$_SESSION["user_id"] = $user->id;
	$_SESSION["auth_err"] = '';	
	$return = $user_id->id;
	$header_loc = 'Location: tasklist.php ';
} else {
	$_SESSION["auth_err"] = 'Введите верный пароль';
	$header_loc = 'Location: index.php ';
	$return = FALSE;
}

	header(''.$header_loc.'');
	return $return;

=======
$sql='SELECT `id`, `password` FROM `users` WHERE `login`=:login';
$query=$pdo->prepare($sql);
$query->execute(['login'=>$login]);
$user = $query->fetch(PDO::FETCH_OBJ);
return $user;
}

function authAddUser($login,$hash,$pdo) {
$sql='INSERT INTO users(login,password) VALUES(?,?)';
$query=$pdo->prepare($sql);
$query->execute([$login,$hash]);
>>>>>>> 4a1eb6558dcd6ceb929a441a4f7cfb5b379cca0b
}
?>