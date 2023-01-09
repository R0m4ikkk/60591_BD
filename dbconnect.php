<?php
// подключение к БД
try {
    $conn = new PDO("mysql:host=92.246.214.15:5000;dbname=ais_efremov4559_60591erv", 'ais_efremov4559_60591erv', 'xsV9joah7KjIBnfE9U05wA57');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Ошибка подключения к БД: " . $e->getMessage(), $e->getCode( );
    die();
