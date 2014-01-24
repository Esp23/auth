<?php
	if(isset($_COOKIE['login']) &&	isset($_COOKIE['passwd']))
		echo "Hello ". $_COOKIE["login"];
	if(isset($_GET["login"])	&& isset($_GET["passwd"]))
		echo "Hello ". $_GET["login"];
?>