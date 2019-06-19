<?php
include "../pdo.php";
echo '
<h1>Добавление поставщика</h1>
Имя поставщика: <input type="text" name="" id="supplyer_name">
<br><br>
Страна: <input type="text" name="" id="country">
<br><br>
Город: <input type="text" name="" id="city">
<br><br>
Улица: <input type="text" name="" id="street">
<br><br>
Контактный номер: <input type="text" name="" id="phone_number">
<br><br>
<button class="buy_button" onclick="add_supplyer_fin()">Добавить</button>
'
?>