<?php
        $sql = 'DELETE FROM `tasks` WHERE `user_id`='.$_SESSION["user_id"].'';
        $query = $pdo->query($sql);
?>