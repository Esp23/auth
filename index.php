<?php
			if(isset($_COOKIE['login']) && isset($_COOKIE['passwd']))
				header("Location:page1.php");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<title>Начальная страница</title>
	</head>

	<body>
		<H3 align=center>Пример авторизации пользователя</H3>
		<form action=page1.php class="login">
			<p>Логин</p>
			<input type=text name="login" required pattern="[0-9a-zA-z]{5,}" size=45><br>
			<p>Пароль</p>
			<input type=password required name="passwd" size=45><br>
			<input type=submit id="submit" value="Войти"/>
			<a href="reg.php" id="a_reg">Регистрация</a>
			<p>
				<input type="checkbox" name="rememberCheckBox">
				запомнить меня
			</p>
		</form>
	</body>
</html>

