                       <?php
                       echo "<h1>Изменение поставщика</h1>";
                       $id=$_GET["id"];
                       session_start();
                       $_SESSION["sup_id"]=$id;
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
                       $stmt=$pdo->query("SELECT * FROM supplyer WHERE Supplyer_ID=".$id."");
                       foreach($stmt as $query){
                           echo ' Имя поставщика: <input type="text" name="" id="supplyer_name" value="'.$query["Supplyer_name"].'">
                           <br><br>
                           Страна поставщика: <input type="text" name="" id="country" value="'.$query["Country"].'">
                           <br><br>
                           Город поставщика: <input type="text" name="" id="city" value="'.$query["City"].'">
                           <br><br>
                           Улица: <input type="text" name="" id="street" value="'.$query["Street"].'">
                           <br><br>
                           Контактный номер: <input type="text" name="" id="phone_number" value="'.$query["Phone_number"].'">
                           <br><br>';
                       }
                       $stmt=$pdo->query("SELECT * FROM waybill WHERE Supplyer_ID=".$id."");
                       foreach($stmt as $query){
                           echo' <h3  style="text-align:left">Накладная</h3>
                           <br>
                           Вес товара: <input type="text" name="" id="weight" value="'.$query["Weight"].'">
                           <br><br>
                           Цена за поставку: <input type="text" name="" id="waybill_price" value="'.$query["Price"].'">
                           <br><br>
                           Дата доставки: <input type="date" name="" id="waybill_date" value="'.$query["Delivery_date"].'">
                           <br><br>
                           ';
                           echo '<button class="yellow_button" onclick="change_supplyer_fin()">Изменить</button>';
                        }
?>
                       