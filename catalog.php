<?php
require('components/auth.php');
require('components/meta.php');
require('dbconnect.php');


$limit =3;
$page = intval($_GET['page']) ?: 1;
$offset = ($page - 1) * $limit;
//Запрос для получения количества записей в таблице
$result = $conn->query("SELECT count(*) AS C FROM car");
$row = $result->fetch();
$products_quantity = $row['C'];

$result = $conn->query("SELECT * FROM car LIMIT ".$limit." OFFSET ".$offset);

$pages = $products_quantity / $limit;
$pages_total = ceil($pages);

$months = [1 => 'января', 2 => 'февраля', 3 => 'марта', 4 => 'апреля', 5 => 'мая', 6 => 'июня', 7 => 'июля', 8 => 'августа', 9 => 'сентября', 10 => 'октября', 11 => 'ноября', 12 => 'декабря'];

$day = date('j');
$month = date('n');
$year = date('Y');

$today = $day . $months[$month] . $year;

require('components/header.php');
require('components/products_list.php');
require('components/footer.php');

