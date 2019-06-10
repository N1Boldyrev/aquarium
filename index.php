<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://172.23.64.64/ftp/22/2222756/aquarium/styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Аквариум - главная</title>
</head>
<body>
    <header><a href="index.html" class="brand"">Аквариум</a></header>
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbar_gallery">
          <ul class="navbar-nav ml-auto" id="navbar_line">
            <li class="nav-item">
              <a class="nav-link" href="#" id="bucket" onclick="open_bucket()"></a>
            </li>
          </ul>
        </div>
      </nav>


       <!------------------------------------Content---------------------------------------------------->
       <div class="container-fluid">
            <div class="row" id="row">
              <div class="col-md-1 underwear"> 
                  </div>
                     <div class="col-md-2 wear main_content left_block">
                            <span class="left_menu" id="left_menu"> 
                              <div class="main_menu">
                            Тип товара
                                <br><select name="type_select" id="type_select" onchange="front_product_show()">
                                    <option value="*" selected>Все</option>
                                    <option value="Рыбка аквариумная">Рыбка аквариумная</option>
                                    <option value="Аквариум">Аквариум</option>
                                    <option value="Декорации для аквариумов">Декорации для аквариумов</option>
                                    <option value="Декорации для террариумов">Декорации для террариумов</option>
                                </select>
                              </div>
                              <br>
                              <div class="main_menu">
                                 Цена
                                 <br> От <input type="text" name="min_price" id="min_price" value="0" size="2" onkeyup="front_product_show()">
                                  до 
                                  <input type="text" name="max_price" id="max_price" size="2"  value="0" onkeyup="front_product_show()" >
                              </div>
                              <br>
                            <button id="reset_btn" onclick="reset()">Сброс</button>
                            <div class="info">
                            Телефон: +7-(910)-222-27-56
                            <br>
                            <br>
                            e-mail:aquarim-shop@mail.mail
                            <br>
                            <br>
                            <button class="buy_button" onclick="to_admin()">Администрирование</button>
                          </div>
                        </span>
                     </div>
                     <div class="col-md-8 wear main_content">
                        <h1>Наши товары</h1>
                        <div id="base_out">
                        </div>
                     </div>
                         <div class="col-md-1 underwear"> 
                            </div>
                          </div>
                      </div>
                        </div> 
     
      <!---------------------Scripts--------------------------> 
     <script src="scripts/jquery.js"></script>
     <script src="scripts/script.js"></script>
  </body>
</html>

