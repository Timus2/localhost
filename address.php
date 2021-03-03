<?php
include 'database/db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Адрес</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>
    <div class="container-fruid">
      <form method="POST" action="database/db_address.php">
        <label> Регион</label>
        <input type="text" name="region" placeholder="Название региона">
        <label> Город</label>
        <input type="text" name="city" placeholder="Название города">
        <label> Улица</label>
        <input type="text" name="street" placeholder="Название улицы">
        <label> Номе дома</label>
        <input type="text" name=numhouse placeholder="Номер дома">
        <label> Номер квартиры</label>
        <input type="text" name="numapartament" placeholder="Номер квартиры">
        <input type="submit" value="Добавить">
      </form>
    </div>
  </body>
</html>
