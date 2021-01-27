<?php
        $sql = 'UPDATE `tasks` SET `status`=1 WHERE `user_id`='.$_SESSION["user_id"].'';
        $query = $pdo->query($sql);
?>