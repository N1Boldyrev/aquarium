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
                        <h1>Добавление нового товара</h1>
                        <div id="base_out">
                            <h3 style="text-align:left">Поставщик товара</h3>
                            <br>
                            Имя поставщика: <input type="text" name="" id="supplyer_name">
                            <br><br>
                            Страна поставщика: <input type="text" name="" id="country">
                            <br><br>
                            Город поставщика: <input type="text" name="" id="city">
                            <br><br>
                            Улица: <input type="text" name="" id="street">
                            <br><br>
                            Контактный номер: <input type="text" name="" id="phone_number">
                            <br><br>
                            <h3  style="text-align:left">Накладная</h3>
                            <br>
                            Вес товара: <input type="text" name="" id="weight">
                            <br><br>
                            Цена за поставку: <input type="text" name="" id="waybill_price">
                            <br><br>
                            Дата доставки: <input type="date" name="" id="waybill_date">
                            <br><br>
                            <h3  style="text-align:left">Товар</h3>
                            <br>
                            Тип товара: <select name="" id="type">
                              <option value="Рыбка аквариумная">Рыбка аквариумная</option>
                              <option value="Аквариум">Аквариум</option>
                              <option value="Декорации для аквариумов">Декорации для аквариумов</option>
                              <option value="Декорации для террариумов">Декорации для террариумов</option>
                            </select>
                            <br>
                            <br>
                            Наименование товара: <input type="text" name="" id="name">
                            <br>
                            <br>
                            Цена за единицу: <input type="text" name="" id="price">
                            <br><br>
                            Описание товара: <br> <textarea name='' id='description' cols='150' rows='10'></textarea>
                                <br><br>
                                <button class="buy_button" onclick="add_new_product()">Добавить товар</button> <button class="red_button" onclick="to_products()">Назад</button>
                                <br><br>
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