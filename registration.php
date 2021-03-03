<?php include ('database/db.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>
    <div class="container-fruid">
      <form method="POST" action="database/db_reg.php">
          <label> Фамилия</label>
        <input type="text" name="lname" placeholder="Введите свою фамилию">
          <label> Имя</label>
        <input type="text" name="fname" placeholder="Введите свое имя">
          <label> Отчество</label>
        <input type="text" name="mname" placeholder="Введите свое отчество">
          <label> Логин </label>
        <input type="text" name="login" placeholder="Придумайте логин">
          <label> Пароль</label>
        <input type="password" name="password" placeholder="Придумайте пароль">
          <label> Дата рождения</label>
        <input type="date" name="date" placeholder="Введите пароль">
          <label> Email</label>
        <input type="email" name="email" placeholder="Введите пароль">
          <label> Пол</label>
        <select name="gender">
            <option value="1">Мужской</option>
            <option value="2">Женский</option>
        </select><br>
        <input type="submit" value="Регистрация">
      </form>
      <form class="container-fruid" action="address.php" method="post">
        <input type="submit"  action="address.php" name="address" value="Добавить адрес">
      </form>
  </body>
</html>
