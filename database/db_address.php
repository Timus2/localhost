<?php

include ('db.php');

$region = $_POST['region'];
$city = $_POST['city'];
$street = $_POST['street'];
$numhome = $_POST['numhouse'];
$numapart = $_POST['numapartament'];

$buff = mysqli_query($connection, "INSERT INTO `address`(`Region`, `City`, `Street`, `NumberHouse`, `NumderApartment`) VALUES ('$region','$city','$street','$numhome','$numapart')");
exit("INSERT INTO `address`(`Region`, `City`, `Street`, $arrayName = array('' => , );`NumberHouse`, `NumderApartment`) VALUES ('$region','$city','$street','$numhome','$numapart')");
if($buff == 0)
{
    echo "ОШИБКА";
}
else {
  header('Location: ../registration.php');
  exit();
}

?>
