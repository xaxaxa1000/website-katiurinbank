<?php
$phone_number = filter_var(trim($_POST['phone_number']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$firstname = filter_var(trim($_POST['firstname']),FILTER_SANITIZE_STRING);
$patronymic = filter_var(trim($_POST['patronymic']),FILTER_SANITIZE_STRING);
$date = date("Y-m-d",strtotime($_POST['date']));
$password=md5($password);
//print_r($phone_number;
$mysql=new mysqli('localhost','root','root','site');
if (!$mysql) {
	die("Connection failed: " . mysqli_connect_error());
}

//$mysql->query("INSERT INTO `register` (`phone_number`,`email`,`password`,`surname`
//,`name`,`patronymic`,'birthday') VALUES('$phone_number','$email','$password',
//'$surname','$firstname','$patronymic')");

//$result=$mysql->query("INSERT INTO `regtest` (`name`) VALUES('$phone_number','$email','$password',
//'$surname','$firstname','$patronymic','$date')");

$result=$mysql->query("INSERT INTO `register` (`phone_number`,`email`,`password`,`surname`
,`name`,`patronymic`,`birthday`) VALUES('$phone_number','$email','$password',
'$surname','$firstname','$patronymic','$date')");

if ($result === TRUE) {
   echo "Успешно создана новая запись";

} else {
   echo $mysql->error;
}

mysql->close();
//header('Location /');
 ?>
