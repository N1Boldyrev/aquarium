<?php
$firstname=$_GET["firstname"];
$lastname=$_GET["lastname"];
$pathronymic=$_GET["pathronymic"];
$city=$_GET["city"];
$street=$_GET["street"];
$apartment_number=$_GET["apartment_number"];
$postcode=$_GET["postcode"];
$phone_number=$_GET["phone_number"];
session_start();
$id=$_SESSION["id"];
$size=$_SESSION["size"];

$buyer_id=0;
$product_buyer_id=0;
$today=date('Y-m-d');
if(!$firstname||!$lastname||!$pathronymic||!$city||!$street||!$apartment_number||!$postcode||!$phone_number){
    echo '<h3>Пожалуйста, заполните персональные данные</h3>
    <h4 class="error">Вы ввели не все данные</h4>
    <br>
    <br>
    Фамилия:<input type="text" name="" id="lastname">
    <br>
    <br>
    Имя:<input type="text" name="" id="firstname">
    <br>
    <br>
    Отчество:<input type="text" name="" id="pathronymic">
    <br>
    <br>
    Город: <input type="text" name="" id="city">, улица <input type="text" name="" id="street">, номер дома: <input type="text" name="" id="apartment_number" size=2>
    <br>
    <br>
    Почтовый индекс: <input type="text" name="" id="postcode">
    <br>
    <br>
    Номер телефона: <input type="text" name="" id="phone_number">
    <br>
    <br>
    <button class="buy_button bucket_btn" onclick="send_order()">Сделать заказ</button>
    ';
}
else{
    $host='localhost';
$port='3306';
$dbname='aquarium';
$charset='utf8';
$dsn="mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
$options=[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
];
$pdo=new PDO($dsn,'root','',$options);
try{
$stmt=$pdo->query("INSERT INTO buyer VALUES(NULL,'$lastname','$firstname','$pathronymic','$city','$street','$apartment_number','$postcode','$phone_number','$today');");
    $stmt=$pdo->query("SELECT LAST_INSERT_ID();"); 
    foreach($stmt as $array){
        $buyer_id=$array["LAST_INSERT_ID()"];
    }
for($i=1;$i<count($id);$i++){
    $stmt=$pdo->query("INSERT INTO product_buyer VALUES(NULL,$id[$i],$buyer_id,$size[$i]);");
}
echo "<h3>Заказ совершен, ожидайте звонка от оператора!</h3>";
}
catch(PDOException $e){
    echo "<h3>Ошибка при составлении заказа</h3>";
}
}
?>