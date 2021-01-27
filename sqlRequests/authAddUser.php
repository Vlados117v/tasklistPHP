<?php

	$sql='INSERT INTO users(login,password) VALUES(?,?)';
	$query=$pdo->prepare($sql);
	$query->execute([$login,$hash]);
?>