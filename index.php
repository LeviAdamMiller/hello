<?php
// This is my controller

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload
require_once ('vendor/autoload.php');

// instantiate the F3 Base class
$f3 = Base::instance();
//Base F3 = new Base();

//define a default route
$f3 ->route('GET /', function (){
    echo "<h1>Hello!</h1>";
});

// run fat free
$f3->run();


