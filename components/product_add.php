<?php
require('../dbconnect.php');
require('meta.php');
require('auth.php');
if ($_SESSION['is_admin'] == 1){
    if ($_POST['title']){
        if ($_FILES && $_FILES["img_url"]["error"]== UPLOAD_ERR_OK)
        {
            $img_url = "img/file".rand(100000, 999999).$_FILES["img_url"]["name"];
            move_uploaded_file($_FILES["img_url"]["tmp_name"], $img_url);
        }
        $result = $conn->query("INSERT INTO car(model_name,price_day,price_hour,color,gearbox,consumption,
                                                        power,year,rent,mileage,img_url)
                    VALUES ('".$_POST['title']."',".$_POST['price'].",".$_POST['price_hour'].",'".$_POST['colors']."',
                    '".$_POST['gearbox']."',".$_POST['consumption'].",".$_POST['power'].",".$_POST['year'].",
                    ".$_POST['rent'].",".$_POST['mileage'].",'".$img_url."')");
    }
    require('product_form.php');
}
else{
    $_SESSION['message'] = 'Для добавления продукта войдите в систему';
    header("Location: login.php");
    session_unset();
    die();
}
?>
    <li><a href="../catalog.php">В каталог</a></li>
    <li><a href="../index.php">На главную</a></li>
<?
require ('message.php');
require('footer.php');
