<?php
$id=$_GET["id"];
$id=explode('+',$id);

include "../pdo.php";
$query=$pdo->query('SELECT * FROM product_buyer WHERE buyer_id='.$id[1].'');
$row=$query->rowCount();
if($row>1){
    $stmt=$pdo->query('DELETE FROM product_buyer WHERE proudct_buyer_id='.$id[0].'');
}else{
    $stmt=$pdo->query('DELETE FROM product_buyer WHERE proudct_buyer_id='.$id[0].'');
    $pdo->query('DELETE FROM buyer WHERE Buyer_ID='.$id[1].'');
}

?>