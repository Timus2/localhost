<?php

$connection = mysqli_connect('127.0.0.1','root','','it_cube');
if ($connection == false)
{
    echo "Не удалось подключиться к базе данных";
    echo "-------------------------------";
    echo mysqli_connect_error();
    exit();
}
