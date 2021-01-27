<?php
	$sql='SELECT `id` FROM `users` WHERE `login`=:login';
	$query=$pdo->prepare($sql);
	$query->execute(['login'=>$login]);
	$user_id = $query->fetch(PDO::FETCH_OBJ);
?>