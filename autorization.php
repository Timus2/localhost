<?php include ('database/db.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>
    <div class="container-fruid">
      <form method="POST" action="database/db_users.php">
        <label> Логин </label>
          <input type="text" name="login" placeholder="Введите логин">
        <label> Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" value="Войти">
        <p>
              У вас нет аккаунта сотрудника? - <a href="/registeration.php">Зарегаааистрируйтесь</a>
          </p>
      </form>
    </div>

  </body>
</html>
