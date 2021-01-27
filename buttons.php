<?php
session_start();
$task_to_delete = $_POST['delete'];
$done_task = $_POST['done'];

require_once 'sqlFunctions/taskButtonFunc.php';	

if(isset($_POST['delete'])) {
	deleteThisTask($task_to_delete);
} elseif(isset($_POST['done'])) {
	changeStatus($done_task);
}
header('Location: tasklist.php ');
?>