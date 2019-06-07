<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Аквариум - администрирование</title>
</head>
<body>
    <header><a href="index.html" class="brand"">Аквариум</a></header>
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbar_gallery">
          <ul class="navbar-nav" id="navbar_line">
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Заказы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Управление товарами</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="supplyer.php">Поставщики и поставки</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Магазин</a>
            </li>
          </ul>
        </div>
      </nav>


       <!------------------------------------Content---------------------------------------------------->
       <div class="container-fluid">
            <div class="row" id="row">
              <div class="col-md-1 underwear"> 
                  </div>
                     <div class="col-md-10 wear main_content">
                        <h1>Заказы</h1>
                        <div id="base_out">
                            <?php
                            $order_price=0;
                             include "pdo.php";
                             $stmt=$pdo->query("SELECT * FROM buyer");
                           $row=$stmt->rowCount();
                           if($row==0){
                               echo '<h2>У нас нет активных заказов</h2>';
                           }
                           else{
                             foreach($stmt as $array){
                                 $order_price=0;
                                 echo '<div class="admin_orders"><h2>Покупатель</h2><table>
                                 <tr><td>Фамилия</td><td>Имя</td><td>Отчество</td><td>Адрес</td><td>Номер телефона</td><td>Дата оформления</td></tr>
                                 <tr><td>'.$array["Lastname"].'</td>
                                 <td>'.$array["Firstname"].'</td>
                                 <td>'.$array["Patronymic"].'</td>
                                 <td>г. '.$array["City"].' улица '.$array["Street"].' д. '.$array["Apartment_number"].'</td>
                                 <td> '.$array["Phone_number"].'</td>
                                 <td>'.$array["registration_date"].'</td>
                                 </tr>
                                 </table>
                                 <h2>Заказ</h2>';
                                 echo '<table>
                                 <tr><td>Тип товара</td><td>Имя товара</td><td>Кол-во</td><td>Цена</td></tr>';
                                 $query=$pdo->query("SELECT * FROM product_buyer WHERE buyer_id=".$array["Buyer_ID"]."");
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
                            
                                        </tr>
                                        ';
                                    }
                                    
                                 }
                                 echo'</table><h3 style="text-align:right">Цена заказа: '.$order_price.' рублей</h3>
                                 <button class="admin_button red_button" onclick="admin_delete(this.id)" id='.$array["Buyer_ID"].'>Удалить</button>
                                 <button class="admin_button yellow_button" id='.$array["Buyer_ID"].' onclick="admin_change_order(this.id)">Изменить</button>
                                 <button id='.$array["Buyer_ID"].' class="admin_button buy_button" onclick="admin_delete(this.id)">Выполнен</button></div>';
                             }
                            }
                            ?>

                        </div>
                     </div>
                         <div class="col-md-1 underwear"> 
                            </div>
                          </div>
                      </div>
                        </div> 
     
      <!---------------------Scripts--------------------------> 
     <script src="scripts/jquery.js"></script>
     <script src="scripts/admin_script.js"></script>
  </body>
</html>

