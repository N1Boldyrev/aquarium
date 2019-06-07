<?php
session_start();
$get_id=$_SESSION["send_buyer_id"];
$lastname=$_GET["lastname"];
$firstname=$_GET["firstname"];
$patronymic=$_GET["patronymic"];
$city=$_GET["city"];
$street=$_GET["street"];
$apartment_number=$_GET["apartment_number"];
$phone_number=$_GET["phone_number"];

include "../pdo.php";
$stmt=$pdo->query("UPDATE buyer SET Lastname='".$lastname."',Firstname='".$firstname."',Patronymic='".$patronymic."',City='".$city."',Street='".$street."',Apartment_number=".$apartment_number.",Phone_number='".$phone_number."' WHERE Buyer_ID=".$get_id."");
?>