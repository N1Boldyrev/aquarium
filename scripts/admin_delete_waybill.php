<?php
$id=$_GET["id"];
include "../pdo.php";
$stmt=$pdo->query("DELETE FROM waybill where Waybill_ID=".$id."");
echo "<h1>Удаление завершено</h1>"
?>