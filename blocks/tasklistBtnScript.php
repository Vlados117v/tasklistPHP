<?php 
     // require_once 'mysql_connect.php';                        //Connecting to db
       $today = date("Y-m-d");
       require_once 'sqlFunctions/taskListFunc.php';              

       if(isset($_POST['addTask'])) {
        taskListAddTask($_SESSION["user_id"],$_POST['taskItem'],$today);    //To Add new task request
    } elseif(isset($_POST['deleteAll'])) {
        tasklistDeleteAllTasks($_SESSION["user_id"]);              //To Delete all tasks request   
    } elseif(isset($_POST['doneAll'])) {  
        tasklistDoneAllTasks($_SESSION["user_id"]);                //To Do all tasks request    
    }

      tasklistPrintAllTasks($_SESSION["user_id"]);                //To Print all tasks request 

    ?>