<?php

class PagesController{
    public function home(){
        $users=App::get("database")->selectAll("users");

    view('index',[
        "users"=>$users
        ]);
    }
    public function about(){
        view("about");
    }
    public function contact(){
        view("contact");
    }
    public function order(){
        view("order");
    }
    public function createUser(){
        App::get("database")->insert([
        "name"=>$_POST["name"]
        ],"users");

        header("Location: /");
    }
}