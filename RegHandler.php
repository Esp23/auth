<?php
// скрипт принимающий данные от формы регистрации
// 

// извлекаем данные присланные нам формой 
	$login=$_GET['login'];
	$passwd=$_GET['passwd'];
	$name=$_GET['name'];
	$surname=$_GET['surname'];
	$DOB=$_GET['DOB'];
	$email=$_GET['email'];

// Подключаемся к серверу mysql() если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта
	$link = mysql_connect('localhost', 'root', 'zdimenia9379992') 
        or die("Could not connect : " . mysql_error());

// Формируем запрос SQL(если не существует базы с именем mydb то создаем ее)
	$request="CREATE DATABASE IF NOT EXISTS mydb";

// Отправляем запрос если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта  
	mysql_query($request) or die("Could not create database");

// Выбираем базу данных если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта
	mysql_select_db("mydb") or die("Could not select database");

// Формируем запрос SQL(если не существует таблицы users то создаем ее с полями: login,passwd,name,surname,DOB,email)
	$request="CREATE TABLE IF NOT EXISTS users(	login 	VARCHAR(100) PRIMARY KEY,
												passwd 	VARCHAR(100) NOT NULL,
												name 	VARCHAR(100) NOT NULL,
												surname VARCHAR(100) NOT NULL,
												DOB 	INTEGER(100) NOT NULL,
												email	VARCHAR(100) NOT NULL 
												)";

// Отправляем запрос если не вышло выводим сообщение, код ошибки mysql() и выходим из скрипта  														
	mysql_query($request) or die("Could not create Table ".mysql_error());

// Формируем запрос SQL(добавить данные пользователя полученные из формы)
	$request="INSERT INTO users VALUES ('$login','$passwd','$name','$surname','$DOB','$email')";

// Отправляем запрос и вызываем функцию mysql_errno() и анализируем код ошибки если "0" то выводим сообщение о том что регистрация прошла успешно
// если код "1062" выводим сообшение что пользователь с таким именем уже есть. В остальных случаях выводим сообщение что не могу добавить пользователя и код ошибки
	mysql_query($request);
	switch (mysql_errno()) {
		case 0:
			echo "<h3>Congratulation!Registration was successful.</h3>
			<a href=\"index.php\">Войти</a>";
			break;
		case 1062:
			echo "<h3>User alredy exist.</h3>";
			break;
		default:
			echo "<h3>Could not create user mysql_error()</h3>";# code...
			break;
	}
?>
<html>
	<head>
		<title>Результат регистрации</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>


	<body>
	</body>
