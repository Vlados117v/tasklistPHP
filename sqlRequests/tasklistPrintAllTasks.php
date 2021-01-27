<?php
    $sql='SELECT * FROM `tasks` WHERE `user_id`=:user_id';
    $query=$pdo->prepare($sql);
    $query->execute(['user_id'=>$_SESSION["user_id"]]);
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
?>