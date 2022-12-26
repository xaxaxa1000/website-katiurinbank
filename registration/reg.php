<?php
$login = filter_var(trim($_POST['loginname']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$password=md5($password);

$mysql=new mysqli('localhost','root','root','kb');
//if (!$mysql) {
//	die("Connection failed: " . mysqli_connect_error());
//	}

$mysql->query("INSERT INTO `login` (`login`,`password`) VALUES('$login','$password')");

mysql->close();
header('Location /');
 ?>
