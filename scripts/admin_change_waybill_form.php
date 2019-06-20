<?php
$id=$_GET["id"];
session_start();
$_SESSION["waybill_id"]=$id;

echo "<h1>Изменение накладной</h1>Название товара: <select id='product_name_selection'>";
include "../pdo.php";
$query=$pdo->query("SELECT * FROM product");
foreach($query as $array){
    echo "<option value='".$array["Product_ID"]."'>".$array["Name"]."</option>";
}
echo"</select><br><br>";
echo "Имя поставщика: <select id='supplyer_name_selection'>";
$query=$pdo->query("SELECT * FROM supplyer");
foreach($query as $array){
    echo "<option value='".$array["Supplyer_ID"]."'>".$array["Supplyer_name"]."</option>";
}
$query=$pdo->query("SELECT * FROM waybill WHERE Waybill_ID=".$id."");
echo"</select>";
foreach($query as $stmt){
echo "<br><br>Вес поставки: <input type='text' value='".$stmt["Weight"]."' id='weight'>кг
<br><br>
Цена поставки:  <input type='text' value='".$stmt["Price"]."' id='price'>
<br><br>
Дата доставки: <input type='date' value='".$stmt["Delivery_date"]."' id='delivery_date'>
<br></br>
<button class='yellow_button' onclick='change_waybill_fin()'>Изменить</button>
";
}

?>

