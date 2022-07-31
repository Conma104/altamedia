<?php
// config

define('__VIEW__', __DIR__.'/../App/Views/');

//load config
$routeArray = ['app','database'];
foreach ($routeArray as $route) {
    include __DIR__.'/../config/'.$route.'.php';
}


// load helper
include __DIR__.'/Helper.php';

// load routes
$routeArray = ['web', 'api'];
foreach ($routeArray as $route) {
    include __DIR__.'/../routes/'.$route.'.php';
}


?>