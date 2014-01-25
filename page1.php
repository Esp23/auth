<?php
// Страница на которую ссылается форма авторизации и на которую осуществляется переход если пришли cookies
// 

//Проверяем пришли ли куки.Если пришли инициализируем переменные $login и $passwd из глобального массива $_COOKIES.
//Если не пришли значит данные были присланы через форму инициализируем данные из глобального массива $_GET.
	if(isset($_COOKIE['login']) &&	isset($_COOKIE['passwd'])){
		$login=$_COOKIE['login'];
		$passwd=$_COOKIE['passwd'];
	}
	else{
		$login=$_GET['login'];
		$passwd=$_GET['passwd'];
	}

// Подключаемся к серверу mysql() если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта
	$link=mysql_connect("localhost","root","zdimenia9379992") or die("Could not connect.Error: ".mysql_errno());

// Выбираем базу данных если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта
	mysql_select_db("mydb") or die("Could not select database.Error: ".mysql_errno());

// Формируем запрос SQL(взять все записи из таблицы user в которых поле логин равно нашему логину.Поле должно быть 1 но т.к. при создании таблицы поле логин было указано как первичный ключ) 
	$request="SELECT * FROM users WHERE login='$login'";

// Отправляем запрос если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта  
	$result=mysql_query($request) or die("Could not execute query");

// извлекаем обьект $user из результата зароса если обьекта нет то выводим ошибку
// иначе проверяем пароль если все верно проверяем был ли установлен чекбокс "запомнить меня" если да то устанавливаем куки и выводим информацию пользователя
	if(!$user=mysql_fetch_object($result))
		print "Неправильное имя пользователя или пароль";
	elseif($user->passwd!=$passwd)
		print "Неправильное имя пользователя или пароль";
	else{
			if(isset($_GET['rememberCheckBox']))
			{
				setcookie('login',$login);
				setcookie('passwd',$passwd);
			}
			echo "<h2>Ваше имя:&nbsp			$user->name</h2>";
			echo "<h2>Ваша фамилия:&nbsp		$user->surname<h2>";
			echo "<h2>Год рождения:&nbsp		$user->DOB</h2>";
			echo "<h2>e-mail:&nbsp				$user->email</h2>";
	}

?>
<html>
	<head>
		<title>Страница пользователя</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>

	</body>
</html>