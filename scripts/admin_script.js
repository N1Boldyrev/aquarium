document.getElementById("row").style.height="100%";
function admin_delete(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_delete.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.location.href="admin.php";
    document.getElementById("row").style.height="100%";
}
function admin_change_order(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_change_order_form.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function delete_from_order(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_delete_from_order.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.location.href="admin.php";
    document.getElementById("row").style.height="100%";
}

function admin_change_order_fin(){
    var lastname=document.getElementById("lastname").value;
    var firstname=document.getElementById("firstname").value;
    var patronymic=document.getElementById("patronymic").value;
    var city=document.getElementById("city").value;
    var street=document.getElementById("street").value;
    var apartment_number=document.getElementById("apartment_number").value;
    var phone_number=document.getElementById("phone_number").value;

    $.ajax({
        type: "GET",
        url: "scripts/admin_delete_from_order_fin.php",
        data:{lastname:lastname,firstname:firstname,patronymic:patronymic,city:city,street:street,apartment_number:apartment_number,phone_number:phone_number},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.location.href="admin.php";
    document.getElementById("row").style.height="100%";
}

function to_admin(){
    document.location.href="admin.php";
}
function change_product_elem(getID){
    var price=document.getElementById(""+getID+"+price").value;
    var description=document.getElementById(""+getID+"+description").value;
    
    $.ajax({
        type: "POST",
        url: "scripts/admin_product_change.php",
        data:{price:price,description:description,id:getID},
        success: function (response) {
        }
    });
    document.location.href="products.php";
    document.getElementById("row").style.height="100%";
}
function to_new_product(){
    document.location.href="add_new_product_form.php"
}
function to_products(){
    document.location.href="products.php"
}

function add_new_product(){
    var supplyer_name=document.getElementById("supplyer_name").value;
    var country=document.getElementById("country").value;
    var city=document.getElementById("city").value;
    var street=document.getElementById("street").value;
    var phone_number=document.getElementById("phone_number").value;
    var type=document.getElementById("type").value;
    var name=document.getElementById("name").value;
    var price=document.getElementById("price").value;
    var description=document.getElementById("description").value;
    var weight=document.getElementById("weight").value;
    var waybill_price=document.getElementById("waybill_price").value;
    var waybill_date=document.getElementById("waybill_date").value;
    $.ajax({
        type: "GET",
        url: "scripts/admin_add_new_product.php",
        data:{supplyer_name:supplyer_name,country:country,city:city,street:street,phone_number:phone_number,type:type,name:name,price:price,description:description,weight:weight,waybill_date:waybill_date,waybill_price:waybill_price},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";

}

function delete_product_elem(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_delete_product.php",
        data:{id:getID},
        success: function (response) {
        }
    });
    to_products();
    document.getElementById("row").style.height="100%";
}

function add_supplyer(){
    $.ajax({
        type: "GET",
        url: "scripts/admin_add_supplyer_form.php",
        data:{},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function add_supplyer_fin(){

    var supplyer_name=document.getElementById("supplyer_name").value;
    var country=document.getElementById("country").value;
    var city=document.getElementById("city").value;
    var street=document.getElementById("street").value;
    var phone_number=document.getElementById("phone_number").value;
    $.ajax({
        type: "GET",
        url: "scripts/admin_add_supplyer.php",
        data:{supplyer_name:supplyer_name,country:country,city:city,street:street,phone_number:phone_number},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function change_supplyer(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_change_supplyer_form.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function change_supplyer_fin(){
    var supplyer_name=document.getElementById("supplyer_name").value;
    var country=document.getElementById("country").value;
    var city=document.getElementById("city").value;
    var street=document.getElementById("street").value;
    var phone_number=document.getElementById("phone_number").value;
    $.ajax({
        type: "GET",
        url: "scripts/admin_change_supplyer.php",
        data:{supplyer_name:supplyer_name,country:country,city:city,street:street,phone_number:phone_number},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
    document.location.href="supplyer.php";
}

function delete_supplyer(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_delete_supplyer.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";

}

function delete_waybill(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_delete_waybill.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}
function change_waybill(getID){
    $.ajax({
        type: "GET",
        url: "scripts/admin_change_waybill_form.php",
        data:{id:getID},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function change_waybill_fin(){
    var product_name=document.getElementById("product_name_selection").value;
    var supplyer_name=document.getElementById("supplyer_name_selection").value;
    var weight=document.getElementById("weight").value;
    var price=document.getElementById("price").value;
    var delivery_date=document.getElementById("delivery_date").value;

    $.ajax({
        type: "GET",
        url: "scripts/admin_change_waybill.php",
        data:{product_name:product_name,supplyer_name:supplyer_name,weight:weight,price:price,delivery_date:delivery_date},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function add_waybill(){
    $.ajax({
        type: "GET",
        url: "scripts/admin_add_waybill_form.php",
        data:{},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
}

function add_waybill_fin(){
    var product_name=document.getElementById("product_name_selection").value;
    var supplyer_name=document.getElementById("supplyer_name_selection").value;
    var weight=document.getElementById("weight").value;
    var price=document.getElementById("price").value;
    var delivery_date=document.getElementById("delivery_date").value;

    $.ajax({
        type: "GET",
        url: "scripts/admin_add_waybill.php",
        data:{product_name:product_name,supplyer_name:supplyer_name,weight:weight,price:price,delivery_date:delivery_date},
        success: function (response) {
            $("#base_out").html(response);
        }
    });
    document.getElementById("row").style.height="100%";
    
}