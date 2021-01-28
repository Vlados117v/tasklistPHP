<?php
//require_once 'mysql_connect.php';

function authGetUserId($login,$pdo) {
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
?>