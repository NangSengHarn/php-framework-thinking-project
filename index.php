<?php
require "vendor/autoload.php";
require "core/bootstrap.php";


Router::load("route.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);

