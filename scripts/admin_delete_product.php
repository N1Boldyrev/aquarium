<?php
$id=$_GET["id"];

include "../pdo.php";
$stmt=$pdo->query("DELETE FROM product WHERE Product_ID=".$id."");
?>