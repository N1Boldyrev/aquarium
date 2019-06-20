<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Аквариум - поставщики и поставки</title>
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
                         <div id="base_out">
                        <h1>Поставщики и поставки</h1>
                        
                       
                       <?php
                       include "pdo.php";
                       $stmt=$pdo->query("SELECT * FROM supplyer");
                       $count=$stmt->rowCount();
                       if($count==0){
                        echo "<h3>Нет активных поставщиков</h3>
                        <button class='buy_button' id='waybill_btn' onclick='add_supplyer()'>Добавить поставщика</button>";
                       }
                       else{
                       echo "<button class='buy_button' onclick='add_supplyer()'>Добавить поставщика</button>
                       <br><br>
                       <table> <tr><td>Имя поставщика</td><td>Страна</td><td>Город</td><td>Улица</td><td>Контактный номер</td><td></td><td></td></tr>";
                       foreach($stmt as $query){
                        echo"<tr>
                        <td>".$query["Supplyer_name"]."</td>
                        <td>".$query["Country"]."</td>
                        <td>".$query["City"]."</td>
                        <td>".$query["Street"]."</td>
                        <td>".$query["Phone_number"]."</td>";
                      
                      
                        echo "<td><a href='#' onclick='change_supplyer(this.id)' id='".$query["Supplyer_ID"]."'>Изменить</a></td>
                        <td><a href='#' onclick='delete_supplyer(this.id)' id='".$query["Supplyer_ID"]."'>Удалить</a></td>
                        </tr>";
                        }
                        
                       echo "</table>";
                      }
                       ?>
                       <br>
                       <br>
                       <hr>
                       <br>
                       <br>
                       
                            <h1>Накладные на товар</h1>
                            
                            <?php
                            include "pdo.php";
                            $stmt=$pdo->query("SELECT * FROM waybill");
                            $count=$stmt->rowCount();
                            if($count==0){
                              echo "<h3>Нет активных накладных</h3>
                              
                              <button class='buy_button'id='waybill_btn' onclick='add_waybill()'>Добавить накладную</button>";

                            }
                            else{

                            echo "<button class='buy_button' onclick='add_waybill()'>Добавить накладную</button>
                            <br>
                            <br>
                            <table><tr><td>Название товара</td><td>Название поставщика</td><td>Вес поставки</td><td>Цена поставки</td><td>Дата доставки</td><td></td><td></td></tr>";
                           
                            
                            foreach($stmt as $array){
                              echo "<tr>";
                              $query=$pdo->query("SELECT * FROM product WHERE Product_ID=".$array["Product_ID"]."");
                              foreach($query as $q){
                                echo"<td>".$q["Name"]."</td>";
                                $zapr=$pdo->query("SELECT * FROM supplyer WHERE Supplyer_ID=".$array["Supplyer_ID"]."");
                                foreach($zapr as $z){
                                  echo "<td>".$z["Supplyer_name"]."</td>
                                  <td>".$array["Weight"]."</td>
                                  <td>".$array["Price"]."</td>
                                  <td>".$array["Delivery_date"]."</td>
                                  <td><a href='#' id='".$array["Waybill_ID"]."' onclick='change_waybill(this.id)'>Изменить</a></td>
                                  <td><a href='#' id='".$array["Waybill_ID"]."' onclick='delete_waybill(this.id)'>Удалить</a></td>
                                  </tr>";
                                }
                              }
                            }

                            echo "</table>";
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