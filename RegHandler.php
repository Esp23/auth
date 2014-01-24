<?php
$login=$_GET['login'];
$passwd=$_GET['passwd'];
$name=$_GET['name'];
$surname=$_GET['surname'];
$DOB=$_GET['DOB'];
$email=$_GET['email'];

$link = mysql_connect('localhost', 'root', 'zdimenia9379992') 
        or die("Could not connect : " . mysql_error());

$request="CREATE DATABASE IF NOT EXISTS mydb";

mysql_query($request) or die("Could not create database");
mysql_select_db("mydb") or die("Could not select database");

$request="CREATE TABLE IF NOT EXISTS users2(login 	VARCHAR(15) PRIMARY KEY,
											passwd 	VARCHAR(15) NOT NULL,
											name 	VARCHAR(15) NOT NULL,
											surname VARCHAR(15) NOT NULL,
											DOB 	INTEGER(4)	NOT NULL,
											email	VARCHAR(30) NOT NULL 
											)";
											
mysql_query($request) or die("Could not create Table ".mysql_error());

$request="INSERT INTO users2 VALUES ('$login','$passwd','$name','$surname','$DOB','$email')";
mysql_query($request) or die("Could not create new user! User alredy exist	".mysql_error());

#while ($row = mysql_fetch_object($db_list)) {
#    echo $row->Database . "\n";
#}
/**/
/*
class user{
	private $login;
	private $passwd;
	private $name;
	private $surname;
	private $email;
	private $DOB;

	public function __construct($login,$passwd,$name,$surname,$DOB,$email)
	{
		$this->login=$login;
		$this->passwd=$passwd;
		$this->name=$name;
		$this->surname=$surname;
		$this->DOB=$DOB;
		$this->email=$email;
	}
	
	function SetLogin($login)

}
*/
?>