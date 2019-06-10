<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
$selected=$_GET["selection"];
$min=$_GET["min"];
$max=$_GET["max"];
include "../pdo.php";
    if($selected=='*'){
        if($min==0 && $max==0){
            $stmt=$pdo->query("SELECT * FROM product;");
            }
           else if($min==0){
                $stmt=$pdo->query("SELECT * FROM product WHERE Price<=$max;"); 
            }
            else if($max==0){
                $stmt=$pdo->query("SELECT * FROM product WHERE Price>=$min;"); 
            }
            else{
                $stmt=$pdo->query("SELECT * FROM product WHERE Price>=$min AND Price<=$max;"); 
            }
    }
    else{
        if($min==0 && $max==0){
            $stmt=$pdo->query("SELECT * FROM product WHERE Type='".$selected."';");
            }
           else if($min==0){
                $stmt=$pdo->query("SELECT * FROM product WHERE Type='".$selected."' AND Price<=$max;"); 
            }
            else if($max==0){
                $stmt=$pdo->query("SELECT * FROM product WHERE Type='".$selected."' AND Price>=$min;"); 
            }
            else{
                $stmt=$pdo->query("SELECT * FROM product WHERE Type='".$selected."' AND Price>=$min AND Price<=$max;"); 
            }
    }
   
    $count=$stmt->rowCount();
    foreach($stmt as $array){
    echo "<div id='shop_element'> 
    <a href='#' id='".$array["Product_ID"]."' onclick='show_product_description(this.id)'>
    <img src='http://172.23.64.64/ftp/22/2222756/aquarium/imgs/description_imgs/id".$array["Product_ID"].".jpg' class='img-rounded'width='300'height='300'><br>".$array["Name"]."
    <br>".$array["Type"]."
    <br>".$array["Price"]."₽
    </a>
    </div>";
    }
?>
