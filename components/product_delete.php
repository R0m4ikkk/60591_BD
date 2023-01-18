<?php
require('../dbconnect.php');
require('auth.php');

if($_SESSION['is_admin'] == 1)
{
    $conn->query(" DELETE FROM car WHERE id=".$id);
}
require ('message.php');
require('footer.php');
