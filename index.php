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
        $type = $_POST['type'];

        if(empty($pet)) {
            echo "Please supply a pet animal type";
        } else {
            if ($type == "robotic"){
                $pet1 = new RoboticPet($pet, $color);
            }else {
                $pet1 = new StuffedPet($pet, $color);
            }

            $f3->set('SESSION.pet1', $pet1);

            ($type == "robotic") ? $f3->reroute('robotic-order'): $f3->reroute('stuffed-order');;
        }
    }
    // render a view page
    $view = new Template();
    echo $view->render('views/pet-order.html');

});

$f3->route('GET|POST /stuffed-order', function () {
    $view = new Template();
    echo $view->render('views/stuffed-order.html');
});


$f3->route('GET|POST /robotic-order', function () {
    $view = new Template();
    echo $view->render('views/robotic-order.html');
});

$f3->route('GET /summary', function() {
//     echo '<h1>Pet Home</h1>';
    // render a view page
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

// run fat-free
$f3->run();
