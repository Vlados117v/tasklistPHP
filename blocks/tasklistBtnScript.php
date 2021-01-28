<?php 
      require_once 'mysql_connect.php';                        //Connecting to db
       $today = date("Y-m-d");
       require_once 'mysql_connect.php';
       require_once 'sqlFunctions/taskListFunc.php';              

<<<<<<< HEAD
       if(isset($_POST['addTask'])) {
        $postTaskItem = strval($_POST['taskItem']);
        taskListAddTask(intval($_SESSION["user_id"]),$postTaskItem,$today,$pdo);    //To Add new task request
    } elseif(isset($_POST['deleteAll'])) {
        tasklistDeleteAllTasks(intval($_SESSION["user_id"]),$pdo);              //To Delete all tasks request   
    } elseif(isset($_POST['doneAll'])) {  
        tasklistDoneAllTasks(intval($_SESSION["user_id"]),$pdo);                //To Do all tasks request    
    }

      tasklistPrintAllTasks(intval($_SESSION["user_id"]),$pdo);                //To Print all tasks request 
=======
       if (isset($_POST['addTask'])) {
        taskListAddTask($_SESSION["user_id"],$_POST['taskItem'],$today,$pdo);    //To Add new task request
    } elseif (isset($_POST['deleteAll'])) {
        tasklistDeleteAllTasks($_SESSION["user_id"],$pdo);              //To Delete all tasks request   
    } elseif (isset($_POST['doneAll'])) {  
        tasklistDoneAllTasks($_SESSION["user_id"],$pdo);                //To Do all tasks request    
    }; 

      tasklistPrintAllTasks($_SESSION["user_id"],$pdo);                //To Print all tasks request 
>>>>>>> 4a1eb6558dcd6ceb929a441a4f7cfb5b379cca0b

    ?>