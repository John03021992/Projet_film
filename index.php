<?php

 include "./views/includes/header.php"; 

// var_dump($_SERVER);

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
$url = explode('/', $_SERVER['REQUEST_URI']);
}

// var_dump($url);


switch ($url) {
case $url[2] == '':
    require './views/home_view.php';
// echo 'Home page';
break;
case $url[2] == 'film' AND !empty($url[3]):
echo 'Film numéro '.$url[3];
break;
case $url[2] == 'film':
echo 'LA page des films';
break;
default:
http_response_code(404);
echo "404";
break;
}


  include "./views/includes/footer.php"?>   
