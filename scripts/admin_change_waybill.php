<?php
session_start();
$id=$_SESSION["waybill_id"];
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
$query=$pdo->query("UPDATE waybill SET Supplyer_id=".$supplyer_name.", Product_ID=".$product_name.",Weight=".$weight.", Price=".$price.", Delivery_date='".$delivery_date."' WHERE Waybill_ID=".$id."");
echo "<h1>Изменение завершено</h1>";
}
?>