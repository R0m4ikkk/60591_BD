<?php

use Framework\Request;
use Framework\Router;
use Framework\Application;
date_default_timezone_set('Asia/Yekaterinburg');
if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

$request = new Request();
Application::init();
echo (new Router($request))->getContent();
exit();

require('dbconnect.php');
require('components/meta.php');
require ('components/auth.php');
require('components/header.php');
require('components/main.php');
require ('components/message.php');
require('components/footer.php');
