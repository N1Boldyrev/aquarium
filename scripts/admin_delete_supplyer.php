<?php
$id=$_GET["id"];

include "../pdo.php";
try{
  $stmt=$pdo->query("DELETE FROM supplyer where Supplyer_ID=".$id."");
  echo "<h1>Поставщик удален</h1>";
}
catch(PDOException $e){
  echo"<h1>Ошибка, поставщик используется в накладной!</h1>";
}
?>