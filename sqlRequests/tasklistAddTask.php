<?php
        $sql='INSERT INTO tasks(user_id,description,created_at,status) VALUES(?,?,?,?)';
        $query=$pdo->prepare($sql);
        $query->execute([$_SESSION["user_id"],$_POST['taskItem'],$today,0]);
?>