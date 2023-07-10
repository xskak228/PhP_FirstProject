<?php
include('includes/db.php');

$results = mysqli_query($link, "SELECT * FROM `Notes`");
while (($rec = mysqli_fetch_assoc($results)))
{
    echo '<b>id: </b>' . $rec['id'] . "<br>";
    echo '<b>title: </b>' . $rec['title'] . "<br>";
    echo '<b>text: </b>' . $rec['text'] . "<br>";
    echo "<hr>";
}
?>
<br>
<form method="post" action="/handle.php">
    <p>title: <input type="text" name="title"></p>
    <p>text: <input type="text" name="text"></p>
    <input type="submit">
</form>
