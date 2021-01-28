<?php
session_start();

$task_to_delete = intval($_POST['delete']);
$done_task = intval($_POST['done']);

require_once 'mysql_connect.php';	

require_once 'sqlFunctions/taskButtonFunc.php';	

if(isset($_POST['delete'])) {
	deleteThisTask($task_to_delete,intval($_SESSION["user_id"]),$pdo);
} elseif(isset($_POST['done'])) {
	changeStatus($done_task,intval($_SESSION["user_id"]),$pdo);
}
header('Location: tasklist.php ');
?>