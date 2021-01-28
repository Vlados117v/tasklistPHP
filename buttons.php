<?php
session_start();
$task_to_delete = $_POST['delete'];
$done_task = $_POST['done'];
require_once 'mysql_connect.php';
require_once 'sqlFunctions/taskButtonFunc.php';	

if(isset($_POST['delete'])) {
	deleteThisTask($task_to_delete,$pdo);
} elseif(isset($_POST['done'])) {
	changeStatus($done_task,$pdo);
}
header('Location: tasklist.php ');
?>