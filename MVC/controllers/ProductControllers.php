<?php
//tạo ra từng hàm để thực thi từng chức năng riêng biệt
require_once "model/Product.php";
class ProductControllers{
    public function listProduct()
    {
        $product = new Product();
        $product = $product ->getAllProduct();
        // $product = getAllProduct();
        // var_dump($product);
        // die();
        // include "./MVC/view/Product/list.php";
        include __DIR__ . "/../view/Product/list.php";
    }
    
    public function addProduct()
    {
        // include "../view/Product/add.php";
        include __DIR__ . "/../view/Product/add.php";
    }
    
    public function editProduct()
    {
        // include "../view/Product/edit.php";
        include __DIR__ . "/../view/Product/edit.php";
    }
}

