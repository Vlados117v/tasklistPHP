<?php 
     // require_once 'mysql_connect.php';                        //Connecting to db
       $today = date("Y-m-d");
       require_once 'mysql_connect.php';
       require_once 'sqlFunctions/taskListFunc.php';              

       if(isset($_POST['addTask'])) {
        $postTaskItem = strval($_POST['taskItem']);
        taskListAddTask(intval($_SESSION["user_id"]),$postTaskItem,$today,$pdo);    //To Add new task request
    } elseif(isset($_POST['deleteAll'])) {
        tasklistDeleteAllTasks(intval($_SESSION["user_id"]),$pdo);              //To Delete all tasks request   
    } elseif(isset($_POST['doneAll'])) {  
        tasklistDoneAllTasks(intval($_SESSION["user_id"]),$pdo);                //To Do all tasks request    
    }

      tasklistPrintAllTasks(intval($_SESSION["user_id"]),$pdo);                //To Print all tasks request 

    ?>