<?php
require "dbconnect.php";
$result = $conn->query("SELECT *  FROM orders") ;
echo "<h2>Avtomobili</h2>";
while ($row = $result->fetch()) {
    echo $row['name']."<br>";
}