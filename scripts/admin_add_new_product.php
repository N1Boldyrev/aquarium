<?php
$supplyer_name=$_GET["supplyer_name"];
$country=$_GET["country"];
$city=$_GET["city"];
$street=$_GET["street"];
$phone_number=$_GET["phone_number"];
$type=$_GET["type"];
$name=$_GET["name"];
$price=$_GET["price"];
$description=$_GET["description"];
$weight=$_GET["weight"];
$waybill_price=$_GET["waybill_price"];
$waybill_date=$_GET["waybill_date"];

$image_dir="../imgs/description_imgs";

$current_waybill_id=0;
$current_supplyer_id=0;
$current_product_id=0;
$price=(double)$price;


if(!$supplyer_name||!$country||!$city||!$street||!$phone_number||!$type||!$name||!$price||!$description||!$weight||!$waybill_price||!$waybill_date){
   return;
}
else{
    include "../pdo.php";
$stmt=$pdo->query("INSERT INTO supplyer VALUES (NULL,'".$supplyer_name."','".$country."','".$city."','".$street."','".$phone_number."')");
$stmt=$pdo->query("SELECT LAST_INSERT_ID();");
foreach($stmt as $q){
    $current_supplyer_id=$q["LAST_INSERT_ID()"];
}
$stmt=$pdo->query("INSERT INTO waybill VALUES(NULL,".$current_supplyer_id.",'".$weight."',".$waybill_price.",'".$waybill_date."')");
$stmt=$pdo->query("SELECT LAST_INSERT_ID();");
foreach($stmt as $q){
    $current_waybill_id=$q["LAST_INSERT_ID()"];
}
$stmt=$pdo->query("INSERT INTO product VALUES(NULL,".$current_waybill_id.",'".$type."','".$name."','".$price."','".$description."')");
$stmt=$pdo->query("SELECT LAST_INSERT_ID();");
foreach($stmt as $q){
    $current_product_id=$q["LAST_INSERT_ID()"];
}

echo "<h3>Товар добавлен. Для добавления изображения, добавте файл ".$current_product_id.".jpg</h3>";

}
?>