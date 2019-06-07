<?php
session_start();
$id=$_SESSION["sup_id"];
$supplyer_name=$_GET["supplyer_name"];
$country=$_GET["country"];
$city=$_GET["city"];
$street=$_GET["street"];
$phone_number=$_GET["phone_number"];
$weight=$_GET["weight"];
$price=$_GET["price"];
$waybill_date=$_GET["waybill_date"];

$host='localhost';
$port='3306';
$dbname='aquarium';
$charset='utf8';
$dsn="mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
$options=[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
];
$pdo=new PDO($dsn,'root','',$options);
$stmt=$pdo->query("UPDATE supplyer SET Supplyer_name='".$supplyer_name."',Country='".$country."',City='".$city."',Street='".$street."',Phone_number='".$phone_number."' WHERE Supplyer_ID=".$id."");
$stmt=$pdo->query("UPDATE waybill SET Weight='".$weight."',Price='".$price."',Delivery_date='".$waybill_date."' WHERE Supplyer_ID=".$id."");
?>