<?php

function taskListAddTask($user_id,$taskItem,$today,$pdo) {

    $sql='SELECT `id` FROM `users` WHERE `id`= :id';
    $query=$pdo->prepare($sql);
    $query->execute(['id'=>$user_id]);
    $taskStatus = $query->fetch(PDO::FETCH_OBJ);
    if ($taskStatus) {
        $sql='INSERT INTO tasks(user_id,description,created_at,status) VALUES(?,?,?,?)';
        $query=$pdo->prepare($sql);
        $query->execute([$user_id,$taskItem,$today,0]);
    }   

}

function tasklistDeleteAllTasks($user_id,$pdo) {

    $sql='SELECT `id` FROM `users` WHERE `id`= :id';
    $query=$pdo->prepare($sql);
    $query->execute(['id'=>$user_id]);
    $taskStatus = $query->fetch(PDO::FETCH_OBJ);
    if ($taskStatus) {
        $sql = 'DELETE FROM `tasks` WHERE `user_id`='.$user_id.'';
        $query = $pdo->query($sql);
    }   
}

function tasklistDoneAllTasks($user_id,$pdo) {

    $sql='SELECT `id` FROM `users` WHERE `id`= :id';
    $query=$pdo->prepare($sql);
    $query->execute(['id'=>$user_id]);
    $taskStatus = $query->fetch(PDO::FETCH_OBJ);
    if ($taskStatus) {
        $sql = 'UPDATE `tasks` SET `status`=1 WHERE `user_id`='.$user_id.'';
        $query = $pdo->query($sql);
    }   
}

function tasklistPrintAllTasks($user_id,$pdo) {
    $sql='SELECT `id` FROM `users` WHERE `id`= :id';
    $query=$pdo->prepare($sql);
    $query->execute(['id'=>$user_id]);
    $taskStatus = $query->fetch(PDO::FETCH_OBJ);
    if ($taskStatus) {
        $sql='SELECT * FROM `tasks` WHERE `user_id`=:user_id';
        $query=$pdo->prepare($sql);
        $query->execute(['user_id'=>$user_id]);
        while ($row=$query->fetch(PDO::FETCH_OBJ)){
            $is_done = 0;
            if ($row->status!=0) {
                $is_done = "done";
            } else {
                $is_done = "notDone";
            }
            echo "<form class='list' action='buttons.php' method='post'><div class='{$is_done}'><p class='task'>{$row->description}</p><br>
            <div class='buttons'><button name=delete value='{$row->id}'>Удалить</button>
            <button name=done value='{$row->id}'>Выполнено/Не выполнено</button></div>
            </div>
            <form>"; 
        }
    } 
}

?>