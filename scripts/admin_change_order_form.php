<?php
$id=$_GET["id"];
session_start();
$_SESSION["send_buyer_id"]=$id;

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
$stmt=$pdo->query("SELECT * FROM buyer WHERE Buyer_ID=".$id."");
foreach($stmt as $array){
    echo'<h3 style="text-align:left;">Изменение данных о покупателе</h3>
    Фамилия: <input type="text" name="" id="lastname" value="'.$array["Lastname"].'">
    <br>
    <br>
    Имя: <input type="text" name="" id="firstname" value="'.$array["Firstname"].'">
    <br>
    <br>
    Отчество: <input type="text" name="" id="patronymic" value="'.$array["Patronymic"].'">
    <br>
    <br>
    Город: <input type="text" name="" id="city" value="'.$array["City"].'">
    <br>
    <br>
    Улица: <input type="text" name="" id="street" value="'.$array["Street"].'">
    <br>
    <br>
    Номер дома: <input type="text" name="" id="apartment_number" value="'.$array["Apartment_number"].'"size=1>
    <br>
    <br>
    Номер телефона: <input type="text" name="" id="phone_number" value="'.$array["Phone_number"].'">
    ';
}

echo '<button class="yellow_button"onclick="admin_change_order_fin()">Изменить</button><button class="red_button"onclick="to_admin()">Отмена</button><br><br><h3 style="text-align:left;">Удаление товаров из заказа</h3><table>
<tr><td>Тип товара</td><td>Имя товара</td><td>Кол-во</td><td>Цена</td><td></td></tr>';
$query=$pdo->query("SELECT * FROM product_buyer WHERE buyer_id=".$id."");
foreach($query as $q){
   $qu=$pdo->query("SELECT * FROM product WHERE Product_ID=".$q["product_id"]."");
   foreach($qu as $st){
       $price=(float)$st["Price"];
       $size=(float)$q["size"];
       $size_price=$price*$size;
       $order_price+=$size_price;
      echo'
       <tr>
       <td>'.$st["Type"].'</td>
       <td>'.$st["Name"].'</td>
       <td>'.$q["size"].'</td>
       <td>'.$size_price.'</td>
       <td><a href="#" id="'.$q["proudct_buyer_id"].'+'.$q["buyer_id"].'" onclick="delete_from_order(this.id)">Удалить</td>
       </tr>
       ';
   }
}
echo'</table>';

?>