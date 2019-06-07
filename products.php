<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Аквариум - товары</title>
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
                        <h1>Управление товарами</h1>
                        <div>
                            <button class="buy_button" onclick="to_new_product()">Добавить новый товар</button>
                        </div>
                        <div id="base_out">
                            <?php
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
                             $stmt=$pdo->query("SELECT * FROM product");
                             foreach($stmt as $array){
                                 $price=$array["Price"];
                                 echo '<div class="product_admin_element">';
                                 echo '<script>var price='.$price.';</script>';
                                 echo "<h1 style='text-align:left'>".$array["Name"]."</h1>";
                                 echo "<h3 style='text-align:left'>".$array["Type"]."</h3>";
                                 echo"
                                 <div class='description_text change'><p><textarea name='' id='".$array["Product_ID"]."+description' cols='150' rows='10'>".$array["Description"]."</textarea></p>
                                 <br><p class='description_price'>Цена: <span id='description_price'><input type='text' id='".$array["Product_ID"]."+price' value='".$array["Price"]."'></span>₽ 
                                 <button class='yellow_button admin_product_btn' id='".$array["Product_ID"]."' onclick='change_product_elem(this.id)'>Изменить</button>
                                 <button class='red_button' id='".$array["Product_ID"]."' onclick='delete_product_elem(this.id)'>Удалить</button>
                                 <br>
                                 </div>";
                                 echo '</div>';
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

