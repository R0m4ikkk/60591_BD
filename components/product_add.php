<?php
require('../dbconnect.php');
require('meta.php');
require('auth.php');
if ($_SESSION['is_admin'] == 1){
    if ($_POST['title'])
            //получение загруженного файла
            if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')){
                //получение расширения
                $ext = explode('.', $_FILES["filename"]["name"]);
                $ext = $ext[count($ext) - 1];
                $filename = 'file' . rand(100000, 999999) . '.' . $ext;

                $resource = Container::getFileUploader()->store($file, $filename);
                $img_url = $resource['ObjectURL'];
            }
            else
            {
                $img_url = '/img/default.jpg';
            }
            echo ("INSERT INTO car(model_name,price_day,price_hour,color,gearbox,consumption,
                                                        power,year,rent,mileage,img_url)
                    VALUES ('".$_POST['title']."',".$_POST['price'].",".$_POST['price_hour'].",'".$_POST['colors']."',
                    '".$_POST['gearbox']."',".$_POST['consumption'].",".$_POST['power'].",".$_POST['year'].",
                    ".$_POST['rent'].",".$_POST['mileage'].",'".$img_url."')");
    require('product_form.php');
        $result = $conn->query("INSERT INTO car(model_name,price_day,price_hour,color,gearbox,consumption,
                                                        power,year,rent,mileage,img_url)
                    VALUES ('".$_POST['title']."',".$_POST['price'].",".$_POST['price_hour'].",'".$_POST['colors']."',
                    '".$_POST['gearbox']."',".$_POST['consumption'].",".$_POST['power'].",".$_POST['year'].",
                    ".$_POST['rent'].",".$_POST['mileage'].",'".$img_url."')");


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
