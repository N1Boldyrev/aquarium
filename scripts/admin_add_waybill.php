<?php
$product_name=$_GET["product_name"];
$supplyer_name=$_GET["supplyer_name"];
$weight=$_GET["weight"];
$price=$_GET["price"];
$delivery_date=$_GET["delivery_date"];
if(!$product_name||!$supplyer_name||!$weight||!$price||!$delivery_date){
    echo "<h1>Вы заполнили не все поля</h1>";
}
else{
include "../pdo.php";
$query=$pdo->query("INSERT INTO waybill VALUES(NULL,".$supplyer_name.",".$product_name.",".$weight.",".$price.",'".$delivery_date."')");
echo "<h1>Добавление завершено</h1>";
}
?>