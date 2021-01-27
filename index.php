<?php require_once 'blocks/head.php';?>
<body>

<div class="container">
<form class="authForm" method="post" action="auth.php">
	<label>Введите логин:<input type="text" name="login"></label>
	<label>Введите пароль: <input type="text" name="password"></label>
	<button type="submit">Регистрация/Авторизация</button>
</form>

<?php require_once 'blocks/authError.php';?>	

</div>
</body>
</html>
