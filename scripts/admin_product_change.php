<?php
$id=$_POST["id"];
$price=$_POST["price"];
$description=$_POST["description"];

include "../pdo.php";
$stmt=$pdo->query("UPDATE product SET Price=".$price.",Description='".$description."' WHERE Product_ID='".$id."'");
?>