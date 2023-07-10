<?php
$link = mysqli_connect("localhost", "root", "", "notes");
if (!$link){
    echo "Ошибка: Невозможно подключиться к MySQL <br>";
    echo mysqli_connect_error();
    exit();
}