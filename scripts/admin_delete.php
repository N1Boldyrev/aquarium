<?php
$id=$_GET["id"];
$host='localhost';
try{
                             $port='3306';
                             $dbname='aquarium';
                             $charset='utf8';
                             $dsn="mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
                             $options=[
                                 PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                                 PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
                             ];
                             $pdo=new PDO($dsn,'root','',$options);
                             $stmt=$pdo->query("DELETE FROM product_buyer WHERE buyer_id=".$id."");
                             $stmt=$pdo->query("DELETE FROM buyer WHERE Buyer_ID=".$id."");
                             echo "<h2>Операция выполнена</h2>";
                            }
                            catch(PDOException $e){
                                echo "<h2>Ошибка</h2>";
                            }
?>