<?php
require('auth.php');
require('../dbconnect.php');

$id = $_GET['product_id'];
$result = $conn->query("SELECT * FROM car WHERE id=".$id);
$row = $result->fetch();
$title = $row['model_name'];
$img_url = $row['img_url'];
$price = $row['price_day'];
$colors = $row['color'];
$price_hour=$row['price_hour'];
$gearbox=$row['gearbox'];
$consumption=$row['consumption'];
$power=$row['power'];
$year=$row['year'];
$rent=$row['rent'];
$mileage=$row['mileage'];

require('product_info.php');
require('footer.php');
