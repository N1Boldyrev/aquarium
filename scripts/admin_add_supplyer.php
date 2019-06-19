<?php
$supplyer_name=$_GET["supplyer_name"];
$country=$_GET["country"];
$city=$_GET["city"];
$street=$_GET["street"];
$phone_number=$_GET["phone_number"];

if(!$supplyer_name||!$country||!$city||!$street||!$phone_number){
    echo "<h1>Вы заполнили не все поля формы</h1>";
}
else{
    include "../pdo.php";
    $stmt=$pdo->query("INSERT INTO supplyer VALUES(NULL,'".$supplyer_name."','".$country."','".$city."','".$street."','".$phone_number."')");
    echo "<h1>Добавление поставщика завершено</h1>";
}



?>