<?php

// var_dump($_SERVER);

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
$url = explode('/', $_SERVER['REQUEST_URI']);
}

// var_dump($url);


switch ($url) {
case $url[2] == '':
    require 'controllers/home_controller.php';
// echo 'Home page';
break;
default:
    http_response_code(404);
    require 'views/page404.php';
break;
}

?>   

