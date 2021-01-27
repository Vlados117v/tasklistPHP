<?php 
       require_once 'mysql_connect.php';                        //Connecting to db
       $today = date("Y-m-d");

       if(isset($_POST['addTask'])) {
        require_once 'sqlRequests/tasklistAddTask.php';         //To Add new task request
    } elseif(isset($_POST['deleteAll'])) {
        require_once 'sqlRequests/tasklistDeleteAllTasks.php';  //To Delete all tasks request      
    } elseif(isset($_POST['doneAll'])) {
        require_once 'sqlRequests/tasklistDoneAllTasks.php';    //To Do all tasks request        
    }

    require_once 'sqlRequests/tasklistPrintAllTasks.php';       //To Print all tasks request 

    ?>