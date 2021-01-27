<?php require_once 'blocks/head.php';?>

<body>
    <div class="container">
        <form class="adder" name="form" action="" method="post">
         <input type="text" name="taskItem">
         <button name="addTask">Добавить задачу</button>
         <button name="deleteAll">Удалить все</button>
         <button name="doneAll">Выполнить все</button>
     </form>	
     <h1 class="listHead">Список дел</h1>


     <?php require_once 'blocks/tasklistBtnScript.php';?>
     <a href="index.php">На страницу авторизации</a>
 </div>
</body>
</html>

