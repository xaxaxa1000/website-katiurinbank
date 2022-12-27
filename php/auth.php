<<?php

$mysql = new mysqli('localhost','root','root','site');

$result =$mysql->query("SELECT phone_number,password FROM `register`");




 ?>
