<?php
$user = 'mysql';
$pass = 'mysql';
$db = 'tasklist';
$host = 'localhost';


$dsn='mysql:host='.$host.';dbname='.$db;
$pdo=new PDO($dsn,$user,$pass);
 ?>
