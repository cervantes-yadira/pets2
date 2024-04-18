<?php

// controller
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require_once('vendor/autoload.php');

// instantiate F3 base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function() {
//     echo '<h1>Pet Home</h1>';
    // render a view page
    $view = new Template();
    echo $view->render('views/home.html');

});

// pet order route
$f3->route('GET|POST /order', function($f3) {

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $pet = $_POST['pet'];
        $color = $_POST['color'];

        if(empty($pet)) {
            echo "Please supply a pet type";
        } else {
            $f3->set('SESSION.pet', $pet);
            $f3->set('SESSION.color', $color);

            $f3->reroute('summary');
        }


    }
    // render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');

});

$f3->route('GET /summary', function() {
//     echo '<h1>Pet Home</h1>';
    // render a view page
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

// run fat-free
$f3->run();
