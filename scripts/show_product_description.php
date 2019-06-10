<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
$id=$_GET["id"];
include "../pdo.php";
    $stmt=$pdo->query("SELECT * FROM product WHERE Product_ID=$id;");
    foreach($stmt as $array){
        $price=$array["Price"];
        echo '<script>var price='.$price.';</script>';
        echo "<h1>".$array["Name"]."</h1>";
        echo "<h3>".$array["Type"]."</h3>";
        echo"<img src='http://172.23.64.64/ftp/22/2222756/aquarium/imgs/description_imgs/id".$array["Product_ID"].".jpg' class='img-rounded pull-xs-left description_img' width='500'>
        <div class='description_text'><p>".$array["Description"]."</p>
        <br><p class='description_price'>Цена: <span id='description_price'>".$array["Price"]."</span>₽
        <br><br> 
        Кол-во <button class='size_of' onclick='size_less()'>-</button><span id='size_val'>1</span><button class='size_of' onclick='size_more()'>+</button>
        <button class='buy_button' onclick='send_to_bucked()'>Купить</button></p><span id='send_complete'> <span>
        </div>";
    }
?>