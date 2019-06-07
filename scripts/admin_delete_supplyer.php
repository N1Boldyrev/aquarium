<?php
$id=$_GET["id"];

include "../pdo.php";
  $stmt=$pdo->query("DELETE FROM waybill where Supplyer_ID=".$id."");
  $stmt=$pdo->query("DELETE FROM supplyer where Supplyer_ID=".$id."");
?>