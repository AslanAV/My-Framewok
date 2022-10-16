<?php

namespace App;

require_once 'Application.php';

//function server($url)
//{
//    if ('/' === $url) {
//        return "<p>Welcome to PHP </p>";
//    }
//
//    if ('/about' === $url) {
//        return "about company";
//    }
//
//    if ('/server' === $url) {
//        print_r($_SERVER);
//    }
//}
//echo server($_SERVER['REQUEST_URI']);

$routes = [
    ['/', fn () => '<p>main page</p>'],
    ['/sign_in', fn () => 'you signed in'],
];

$app = new Application($routes);
$app->run();