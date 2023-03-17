<?php
require('auth.php');
require('../dbconnect.php');

if($_SESSION['is_admin'] == 1)
{
    $conn->query("DELETE FROM car WHERE car.id=".$_GET['product_id']);
}
require ('message.php');
header('Location: ../catalog.php');
