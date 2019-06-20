<?php

echo "<h1>Добавление новой накладной</h1>";
include "../pdo.php";
$stmt=$pdo->query("SELECT * FROM supplyer");
$count_supplyer=$stmt->rowCount();

$stmt=$pdo->query("SELECT * FROM product");
$count_product=$stmt->rowCount();

if($count_supplyer==0){
    echo "<h1>Невозможно добавить накладную. Нет активных поставщиков.</h1>";
}
else if($count_product==0){
    echo "<h1>Невозможно добавить накладную. Нет активных товаров.</h1>";
}
 else{
$query=$pdo->query("SELECT * FROM product");
echo "Название товара: <select id='product_name_selection'>";
foreach($query as $array){
    echo "<option value='".$array["Product_ID"]."'>".$array["Name"]."</option>";
}
echo"</select><br><br>";
echo "Имя поставщика: <select id='supplyer_name_selection'>";
$query=$pdo->query("SELECT * FROM supplyer");
foreach($query as $array){
    echo "<option value='".$array["Supplyer_ID"]."'>".$array["Supplyer_name"]."</option>";
}
echo "</select>
<br></br>
Вес поставки: <input type='text' id='weight'>
<br><br>
Цена поставки: <input type='text' id='price'>
<br></br>
Дата доставки: <input type='date' id='delivery_date'>
<br></br>
<button class='buy_button' onclick='add_waybill_fin()'>Добавить</button>
";
}
?>