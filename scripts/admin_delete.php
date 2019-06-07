<?php
$id=$_GET["id"];
try{
    include "../pdo.php";
                             $stmt=$pdo->query("DELETE FROM product_buyer WHERE buyer_id=".$id."");
                             $stmt=$pdo->query("DELETE FROM buyer WHERE Buyer_ID=".$id."");
                             echo "<h2>Операция выполнена</h2>";
                            }
                            catch(PDOException $e){
                                echo "<h2>Ошибка</h2>";
                            }
?>