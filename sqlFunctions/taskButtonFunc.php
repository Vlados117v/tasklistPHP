<?php

function deleteThisTask($task_to_delete) {
	$user = 'mysql';
	$pass = 'mysql';
	$db = 'tasklist';
	$host = 'localhost';
	$dsn='mysql:host='.$host.';dbname='.$db;
	$pdo=new PDO($dsn,$user,$pass);

	$sql = 'DELETE FROM `tasks` WHERE `id`='.$task_to_delete.'';
	$query = $pdo->query($sql);
}

function changeStatus($done_task) {
	$user = 'mysql';
	$pass = 'mysql';
	$db = 'tasklist';
	$host = 'localhost';
	$dsn='mysql:host='.$host.';dbname='.$db;
	$pdo=new PDO($dsn,$user,$pass);
	
	$sql='SELECT `status` FROM `tasks` WHERE `id`='.$done_task.'';
	$query=$pdo->prepare($sql);
	$query->execute(['login'=>$login]);
	$taskStatus = $query->fetch(PDO::FETCH_OBJ);
	
	if ($taskStatus->status==0) {
		$sql = 'UPDATE `tasks` SET `status`=1 WHERE `id`='.$done_task.'';
		$query = $pdo->query($sql);
	} else {
		$sql = 'UPDATE `tasks` SET `status`=0 WHERE `id`='.$done_task.'';
		$query = $pdo->query($sql);	
	}
}

?>