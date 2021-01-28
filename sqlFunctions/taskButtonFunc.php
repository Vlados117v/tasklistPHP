<?php

function deleteThisTask($task_to_delete,$user_id,$pdo) {

	$sql='SELECT `user_id`, `status` FROM `tasks` WHERE `id`= :id';
	$query=$pdo->prepare($sql);
	$query->execute(['id'=>$task_to_delete]);
	$taskStatus = $query->fetch(PDO::FETCH_OBJ);
	if (($taskStatus) && ($user_id == $taskStatus->user_id)) {
		$sql = 'DELETE FROM `tasks` WHERE `id`='.$task_to_delete.'';
		$query = $pdo->query($sql);
	}	
}

function changeStatus($done_task,$user_id,$pdo) {

	$sql='SELECT `user_id`, `status` FROM `tasks` WHERE `id`= :id';
	$query=$pdo->prepare($sql);
	$query->execute(['id'=>$done_task]);
	$taskStatus = $query->fetch(PDO::FETCH_OBJ);
	if (($taskStatus) && ($user_id == $taskStatus->user_id)) {
		if ($taskStatus->status==0) {
			$sql = 'UPDATE `tasks` SET `status`=1 WHERE `id`='.$done_task.'';
			$query = $pdo->query($sql);
		} else {
			$sql = 'UPDATE `tasks` SET `status`=0 WHERE `id`='.$done_task.'';
			$query = $pdo->query($sql);	
		}
	}
}


?>