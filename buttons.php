<?php
session_start();
<<<<<<< HEAD
$task_to_delete = intval($_POST['delete']);
$done_task = intval($_POST['done']);

require_once 'mysql_connect.php';	
=======
$task_to_delete = $_POST['delete'];
$done_task = $_POST['done'];
require_once 'mysql_connect.php';
>>>>>>> 4a1eb6558dcd6ceb929a441a4f7cfb5b379cca0b
require_once 'sqlFunctions/taskButtonFunc.php';	

if(isset($_POST['delete'])) {
	deleteThisTask($task_to_delete,$pdo);
} elseif(isset($_POST['done'])) {
	changeStatus($done_task,$pdo);
}
header('Location: tasklist.php ');
?>