<?php

include ('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `Login` = '$login' AND `Password` = '$password'");

if(mysqli_num_rows($count) == 0)
{
  echo 'Вы не заригистрированны';
}
else
{
  header('Location: ../main_website.php');
  exit();
}

?>
