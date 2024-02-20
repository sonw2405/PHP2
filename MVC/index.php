<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url'])? $_GET['url'] : "/";
switch ($url){
    case "/":
        $productController = new ProductController();
        $productController->listProduct();
        break;
    case "add-product":
        echo "Ban ve trang them";
        break;
}