                       <?php
                       echo "<h1>Изменение поставщика</h1>";
                       $id=$_GET["id"];
                       session_start();
                       $_SESSION["sup_id"]=$id;
                       include "../pdo.php";
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
                           echo '<button class="yellow_button" onclick="change_supplyer_fin()">Изменить</button>';
?>
                       