<?php

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){
    echo '<h1>Git Lab</h1>';
});

$f3->route('GET /page1',
    function() {
        $view = new View;
        echo $view->render('views/page1.html');
    });

//Run fat free
$f3->run();

