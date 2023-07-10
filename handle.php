<?php
include('includes/db.php');

$title = $_POST['title'];
$text = $_POST['text'];


$res = mysqli_query($link, "INSERT INTO `Notes` (`id`, `title`, `text`) VALUES
                                                        (NULL, $title, $title)");

if (!$res)
{
    echo "Ошибка: Невозможно подключиться к MySQL <br>";
    echo mysqli_connect_error();
    exit();
}
header("Location: http://test.ru/");
exit();

// INSERT INTO `Notes` (`id`, `title`, `text`, `date`) VALUES (NULL, 'Second', 'Second Note', NULL);