<?php
$sql='SELECT `id`, `password` FROM `users` WHERE `login`=:login';
$query=$pdo->prepare($sql);
$query->execute(['login'=>$login]);
$user = $query->fetch(PDO::FETCH_OBJ);
?>