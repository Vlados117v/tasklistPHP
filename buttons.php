<?php
session_start();
$task_to_delete = $_POST['delete'];
$done_task = $_POST['done'];
require_once 'mysql_connect.php';							//Connecting to db

if(isset($_POST['delete'])) {
	$sql = 'DELETE FROM `tasks` WHERE `id`='.$task_to_delete.'';
	$query = $pdo->query($sql);
} elseif(isset($_POST['done'])) {
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
header('Location: tasklist.php ');
?>