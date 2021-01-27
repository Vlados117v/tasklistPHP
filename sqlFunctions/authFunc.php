<?php
//require_once 'mysql_connect.php';

function authGetUserId($login) {
$user = 'mysql';
$pass = 'mysql';
$db = 'tasklist';
$host = 'localhost';
$dsn='mysql:host='.$host.';dbname='.$db;
$pdo=new PDO($dsn,$user,$pass);
$sql='SELECT `id`, `password` FROM `users` WHERE `login`=:login';
$query=$pdo->prepare($sql);
$query->execute(['login'=>$login]);
$user = $query->fetch(PDO::FETCH_OBJ);
return $user;
}

function authAddUser($login,$hash) {
$user = 'mysql';
$pass = 'mysql';
$db = 'tasklist';
$host = 'localhost';
$dsn='mysql:host='.$host.';dbname='.$db;
$pdo=new PDO($dsn,$user,$pass);
$sql='INSERT INTO users(login,password) VALUES(?,?)';
$query=$pdo->prepare($sql);
$query->execute([$login,$hash]);
}
?>