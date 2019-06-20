<?php
$type=$_GET["type"];
$name=$_GET["name"];
$price=$_GET["price"];
$description=$_GET["description"];

$image_dir="../imgs/description_imgs";

if(!$type||!$name||!$price||!$description){
    echo "<h1>Вы не заполнили все данные формы</h1>"
   return;
}
else{
    include "../pdo.php";
$stmt=$pdo->query("INSERT INTO product VALUES(NULL,".$current_waybill_id.",'".$type."','".$name."','".$price."','".$description."')");
$stmt=$pdo->query("SELECT LAST_INSERT_ID();");
foreach($stmt as $q){
    $current_product_id=$q["LAST_INSERT_ID()"];
}

echo "<h3>Товар добавлен. Для добавления изображения, добавте файл с изображением ".$current_product_id.".jpg</h3>";

}
?>