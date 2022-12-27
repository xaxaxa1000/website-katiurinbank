<<?php
$phone_number = filter_var(trim($_POST['phone_number']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
$password=md5($password);
//echo $phone_number;
$mysql = new mysqli('localhost','root','root','site');

$result=$mysql->query("SELECT phone_number,password FROM `register` WHERE
   `phone_number`='$phone_number' AND `password` = '$password'");
$user=$result->fetch_assoc();
if($result->num_rows == 0){
  echo "Неверный пароль";
  exit();
}
  echo $user['phone_number'],'  ',$user['password'];
  echo "Логин и пароль верный!";

setcookie('user',$user['phone_number'],time()+60,"/");
 ?>
