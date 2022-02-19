<?php


$router->get("","PagesController@home");
$router->get("about","PagesController@about");
$router->get("contact","PagesController@contact");
$router->get("order","PagesController@order");
$router->post("names","PagesController@createUser");

$router->get("users","UserController@index");