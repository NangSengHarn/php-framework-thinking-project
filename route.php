<?php


// $router->get("","PagesController@home");
// $router->get("about","PagesController@about");
// $router->get("contact","PagesController@contact");
// $router->get("order","PagesController@order");
// $router->post("names","PagesController@createUser");

// $router->get("users","UserController@index");

use controllers\PagesController;

$router->get('',[PagesController::class,"home"]);
$router->get('about',[PagesController::class,"about"]);
$router->get('contact',[PagesController::class,"contact"]);
$router->get('order',[PagesController::class,"order"]);
$router->get('names',[PagesController::class,"createUser"]);
$router->get('users',[PagesController::class,"index"]);