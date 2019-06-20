<?php
session_start();
$id=$_SESSION["sup_id"];
$supplyer_name=$_GET["supplyer_name"];
$country=$_GET["country"];
$city=$_GET["city"];
$street=$_GET["street"];
$phone_number=$_GET["phone_number"];

include "../pdo.php";
$stmt=$pdo->query("UPDATE supplyer SET Supplyer_name='".$supplyer_name."',Country='".$country."',City='".$city."',Street='".$street."',Phone_number='".$phone_number."' WHERE Supplyer_ID=".$id."");
?>