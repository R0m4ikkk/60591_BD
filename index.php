<?php
require "dbconnect.php";
$result = $conn->query("SELECT *  FROM car") ;
echo "<h2>Avtomobili</h2>";
while ($row = $result->fetch()) {
    echo $row['model_name'];
    echo $row['price_day']."<br>";
}