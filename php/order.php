<?php
require_once 'config.php';


$connection = new mysqli(DB_LOCAL,DB_LOGIN,DB_PASS,DB_NAME);
//$query = "select * from books";
$query ='SELECT `name`,`description`,`avtor` FROM books left join avtor_books on `id`=`id_book`';
$result = $connection->query($query);
while($result)
{
    echo $result['name']."<br>";
    echo $result['description']."<br>";
}
echo '<pre>';
var_dump($result);