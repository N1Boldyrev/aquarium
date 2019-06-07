<?php
$id=$_GET["id"];
$id=explode('+',$id);

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
$query=$pdo->query('SELECT * FROM product_buyer WHERE buyer_id='.$id[1].'');
$row=$query->rowCount();
if($row>1){
    $stmt=$pdo->query('DELETE FROM product_buyer WHERE proudct_buyer_id='.$id[0].'');
}else{
    $stmt=$pdo->query('DELETE FROM product_buyer WHERE proudct_buyer_id='.$id[0].'');
    $pdo->query('DELETE FROM buyer WHERE Buyer_ID='.$id[1].'');
}

?>