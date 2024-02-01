<?php
session_start();

// definir la constante URL
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once 'models/BlogsController.class.php';
$blogsController = New BlogsController();

// Routes
$route = $_GET['route'] ?? 'home';

try{
    if(empty($_GET['route'])){
        $blogsController->displayBlogs();
    } else {
        $url = explode("/", filter_var($_GET['route']),FILTER_SANITIZE_URL);

        switch($url[0]){
            case "accueil" : $blogsController->displayBlogs();
            break;
            
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/pages/error.view.php";
}


