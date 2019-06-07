<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
$id=$_GET["id"];
$size=$_GET["size"];
$full_price=0;
if(!$id){
    echo "<p><h1>В корзине пусто!</h1><h3>Вернитесь в магазин и подберите себе что-нибудь<br><br><button class='buy_button'onclick='back_button()'>В магазин</button></h3></p>";
}else{
    $id=explode(' ',$id);
    $size=explode(' ',$size);
    session_start();
    $_SESSION['id']=$id;
    $_SESSION['size']=$size;
    include "../pdo.php";
$counter=count($id);
echo "<table><tr><td>Имя товара</td><td>Количество</td><td>Цена</td><td>Удаление</td></tr>";
for($i=1;$i<$counter;$i++){
    $temp_id=$id[$i];
    $stmt=$pdo->query("SELECT * FROM product WHERE Product_ID=$temp_id;");
    foreach($stmt as $array){
        echo "<tr><td>".$array["Name"]."</td>
        <td id='size".$array["Product_ID"]."'>".$size[$i]."шт.</td>
        <td id='price".$array["Product_ID"]."'>".$array["Price"]*$size[$i]."₽</td>
        <td><a href='#' class='bucket_delete' id='".$array["Product_ID"]."' onclick='bucket_delete(this.id)'>Удалить</a></td>
        </tr>";
    }
    $full_price+=$array["Price"]*$size[$i];
}
echo"</table>
<p id='full_price'><h4>Цена заказа: ".$full_price."₽</h4></p>
<br><button id='bucket_btn' class='buy_button bucket_btn' onclick='show_contact_form()'>Сделать заказ</button>
<div id='contact_form'></div>
";
}
?>