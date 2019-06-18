<?php
$id=$_GET["id"];

include "../pdo.php";
  $stmt=$pdo->query("DELETE FROM supplyer where Supplyer_ID=".$id."");
  echo "<h1>Поставщик удален</h1>";
?>