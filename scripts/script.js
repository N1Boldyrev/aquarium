    var selector;//Переменная, хранящая выбранное в выпадающем меню значение.
    var min_price;//Хранит минимальное значение цены
    var max_price;//Хранит максимальное значение цены
    var size_val=1;//Задает минимальное количество покупаемого товара
    var product_id;//Хранит id товара, который просматривает пользователь
    var bucket_price=0.0;//Хранит общую цену в корзине
    var product_counter=0;//Хранит общее количество товара в корзине
    var send_bucket_id='';//Строка, хранящая id всех выбранных пользователем товаров
    var send_bucket_size='';//Строка, хранящая количество каждого выбранного товара

    function loading_animation_start(){//Разметка для анимации загрузки
        document.getElementById("base_out").innerHTML='\
        <div id="circularG">\
	<div id="circularG_1" class="circularG"></div>\
	<div id="circularG_2" class="circularG"></div>\
	<div id="circularG_3" class="circularG"></div>\
	<div id="circularG_4" class="circularG"></div>\
	<div id="circularG_5" class="circularG"></div>\
	<div id="circularG_6" class="circularG"></div>\
	<div id="circularG_7" class="circularG"></div>\
	<div id="circularG_8" class="circularG"></div>\
</div>'
    }
function front_product_show(){//Функция, отображающая ассортимент из базы данных
    loading_animation_start();
    selector=document.getElementById("type_select").value;
    min_price=document.getElementById("min_price").value;
    max_price=document.getElementById("max_price").value;
    if(max_price==''){
        max_price=0;
    }
    if(min_price==''){
        min_price=0;
    }
    $.ajax({
        type: "GET",
        url: "scripts/front_show_products.php",
        data: {selection:selector,min:min_price,max:max_price},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("base_out").style.height="100%";
}
document.onload=front_product_show();
document.getElementById("bucket").innerHTML='Товары: '+product_counter+'шт. за '+bucket_price+' ₽';
function back_button(){
    loading_animation_start();
    size_val=1;
    document.getElementById("row").innerHTML=
        '<div class="col-md-1 underwear"> \
        </div>\
           <div class="col-md-2 wear main_content left_block">\
                  <span class="left_menu" id="left_menu"> \
                    <div class="main_menu">\
                  Тип товара\
                      <br><select name="type_select" id="type_select" onchange="front_product_show()">\
                          <option value="*">Все</option>\
                          <option value="Рыбка аквариумная">Рыбка аквариумная</option>\
                          <option value="Аквариум">Аквариум</option>\
                          <option value="Декорации для аквариумов">Декорации для аквариумов</option>\
                          <option value="Декорации для террариумов">Декорации для террариумов</option>\
                      </select>\
                    </div>\
                    <br>\
                    <div class="main_menu">\
                       Цена\
                       <br> От <input type="text" name="min_price" id="min_price" size="2" value="'+min_price+'" onkeyup="front_product_show()">\
                        до \
                        <input type="text" name="max_price" id="max_price" size="2" value="'+max_price+'" onkeyup="front_product_show()" >\
                    </div>\
                    <br>\
                            <button id="reset_btn" onclick="reset()">Сброс</button>\
                            <div class="info">\
                            Телефон: +7-(910)-222-27-56\
                            <br>\
                            <br>\
                            e-mail:aquarim-shop@mail.mail\
                          </div>\
              </span>\
           </div>\
           <div class="col-md-8 wear main_content">\
           <h1>Наши товары</h1>\
           <div style="width:100%;" id="base_out">\
           </div>\
        </div>\
            <div class="col-md-1 underwear"> \
               </div>\
             </div>\
           </div>';
           document.getElementById("navbar_line").innerHTML='\
           <li class="nav-item">\
           <a class="nav-link" href="#" onclick="open_bucket()" id="bucket">Товары: '+product_counter+'шт. за '+bucket_price+' ₽</a>\
         </li>';
           document.getElementById("type_select").value=selector;
           front_product_show();
    }   

function reset(){
    selector='*';
    min_price=0;
    max_price=0;
    document.getElementById("type_select").value=selector;
    document.getElementById("min_price").value=min_price;
    document.getElementById("max_price").value=max_price;
    front_product_show();
}

function show_product_description(currentID){
    product_id=currentID;
    document.getElementById("navbar_line").innerHTML='\
    <li class="nav-item">\
    <a class="nav-link" href="#" onclick="open_bucket()" id="bucket"> Товары: '+product_counter+'шт. за '+bucket_price+' ₽</a>\
  </li>\
  <li class="nav-item">\
    <a class="nav-link" href="#"onclick="back_button()"id="back_button">Назад</a>\
  </li>\
  '
    document.getElementById("row").innerHTML="\
    <div class='col-md-1 underwear'> \
    </div>\
    <div class='col-md-10 wear main_content'>\
                        <div style='width:100%;' id='base_out'>\
                        <div id='circularG'>\
                        <div id='circularG_1' class='circularG'></div>\
                        <div id='circularG_2' class='circularG'></div>\
                        <div id='circularG_3' class='circularG'></div>\
                        <div id='circularG_4' class='circularG'></div>\
                        <div id='circularG_5' class='circularG'></div>\
                        <div id='circularG_6' class='circularG'></div>\
                        <div id='circularG_7' class='circularG'></div>\
                        <div id='circularG_8' class='circularG'></div>\
                    </div>\
                    </div>\
                        </div>\
                     </div>\
                         <div class='col-md-1 underwear'> \
                            </div>\
                          </div>\
                        </div>\
                        </div> \
    "
    $.ajax({
        type: "GET",
        url: "scripts/show_product_description.php",
        data: {id:currentID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("base_out").style.height="100%";
}

function size_less(){
    if (size_val<=1){
        new_price=price;
        size_val=1;
    }else {
        size_val-=1;
        new_price=new_price-price;
    }
    document.getElementById("size_val").innerHTML=size_val;
    document.getElementById("description_price").innerHTML=new_price;
}
function size_more(){
    if(size_val<=1){
        new_price=price;
    }
    size_val+=1;
    new_price=new_price+price;
    document.getElementById("size_val").innerHTML=size_val;
    document.getElementById("description_price").innerHTML=new_price;
}

function send_to_bucked(){
    $("#send_complete").fadeTo(1,1,function(){
        document.getElementById("send_complete").innerHTML='Добавлено в корзину'; 
    });
    $("#send_complete").fadeTo(1000,0,function(){
        document.getElementById("send_complete").innerHTML='';
    });
    if(size_val<=1){
        new_price=price;
    }
    product_counter+=size_val;
    bucket_price+=new_price;
    send_bucket_id+=' '+product_id;
    send_bucket_size+=' '+size_val;
    document.getElementById("bucket").innerHTML='Товары: '+product_counter+'шт. за '+bucket_price+' ₽';
}

function open_bucket(){
    document.getElementById("navbar_line").innerHTML='\
    <li class="nav-item">\
    <a class="nav-link" href="#" onclick="open_bucket()" id="bucket"> Товары: '+product_counter+'шт. за '+bucket_price+' ₽</a>\
  </li>\
  <li class="nav-item">\
    <a class="nav-link" href="#"onclick="back_button()"id="back_button">Назад</a>\
  </li>\
  ';
  document.getElementById("row").innerHTML="\
    <div class='col-md-1 underwear'> \
    </div>\
    <div class='col-md-10 wear main_content'>\
                        <div style='width:100%;' id='base_out'>\
                        <div id='circularG'>\
                        <div id='circularG_1' class='circularG'></div>\
                        <div id='circularG_2' class='circularG'></div>\
                        <div id='circularG_3' class='circularG'></div>\
                        <div id='circularG_4' class='circularG'></div>\
                        <div id='circularG_5' class='circularG'></div>\
                        <div id='circularG_6' class='circularG'></div>\
                        <div id='circularG_7' class='circularG'></div>\
                        <div id='circularG_8' class='circularG'></div>\
                    </div>\
                    </div>\
                        </div>\
                     </div>\
                         <div class='col-md-1 underwear'> \
                            </div>\
                          </div>\
                        </div>\
                        </div> \
    "
    $.ajax({
        type: "GET",
        url: "scripts/bucket.php",
        data: {id:send_bucket_id,size:send_bucket_size},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("base_out").style.height="100%";
}

function bucket_delete(delete_id){
    var price=document.getElementById("price"+delete_id).innerText;
    var size=document.getElementById("size"+delete_id).innerText;
    price=parseInt(price);
    size=parseInt(size);
    send_bucket_id=send_bucket_id.replace(' '+delete_id,'');
    send_bucket_size=send_bucket_size.replace(' '+size,'');
    bucket_price-=price;
    product_counter-=size;
    open_bucket();
}

function show_contact_form(){
    $("#bucket_btn").hide();
    document.getElementById("contact_form").innerHTML='\
    <h3>Пожалуйста, заполните персональные данные</h3>\
    <br>\
    <br>\
    Фамилия:<input type="text" name="" id="lastname">\
    <br>\
    <br>\
    Имя:<input type="text" name="" id="firstname">\
    <br>\
    <br>\
    Отчество:<input type="text" name="" id="pathronymic">\
    <br>\
    <br>\
    Город: <input type="text" name="" id="city">, улица <input type="text" name="" id="street">, номер дома: <input type="text" name="" id="apartment_number" size=2>\
    <br>\
    <br>\
    Почтовый индекс: <input type="text" name="" id="postcode">\
    <br>\
    <br>\
    Номер телефона: <input type="text" name="" id="phone_number">\
    <br>\
    <br>\
    <button class="buy_button bucket_btn" onclick="send_order()">Сделать заказ</button>\
    ';
}

function send_order(){
    var firstname=document.getElementById("firstname").value;
    var lastname=document.getElementById("lastname").value;
    var pathronymic=document.getElementById("pathronymic").value;
    var city=document.getElementById("city").value;
    var street=document.getElementById("street").value;
    var apartment_number=document.getElementById("apartment_number").value;
    var postcode=document.getElementById("postcode").value;
    var phone_number=document.getElementById("phone_number").value;
    $.ajax({
        type: "GET",
        url: "scripts/order.php",
        data: {firstname:firstname,lastname:lastname,pathronymic:pathronymic,city:city,street:street,apartment_number:apartment_number,postcode:postcode,phone_number:phone_number},
        success: function (response) {
            $("#contact_form").html(response);
        }
    });
    document.getElementById("base_out").style.height="100%";
     bucket_price=0.0;
     product_counter=0;
     send_bucket_id='';
     send_bucket_size='';
     document.getElementById("navbar_line").innerHTML='\
     <li class="nav-item">\
     <a class="nav-link" href="#" onclick="open_bucket()" id="bucket"> Товары: '+product_counter+'шт. за '+bucket_price+' ₽</a>\
   </li>\
   <li class="nav-item">\
     <a class="nav-link" href="#"onclick="back_button()"id="back_button">Назад</a>\
   </li>\
   ';
}

function to_admin(){
    document.location.href="admin.php";
}
