<?php
require_once "controllers/ProductController.php";
require_once "controllers/CategoryControllers.php";
include "./views/header.php";

$url = isset($_GET['url']) ? $_GET['url'] : "/";
$ProductControllers = new ProductControllers();
$CategoryControllers = new CategoryControllers();

switch ($url) {
    case '/':
        break;
        //sản phẩm khóa học
    case 'list-product':
       $ProductControllers -> listProduct();
        break;
    case 'add-product':
        if (isset($_POST['Save'])) {
            $ProductControllers -> addProducts($_POST['name'], $_POST['price'], $_FILES['image'], $_POST['id_category']);
        }
        $ProductControllers -> addProduct();
        break;
    case 'update-product':
        if (isset($_POST['update'])) {
            $ProductControllers -> postUpdateProduct($_POST['name'], $_POST['price'], $_FILES['image'], $_POST['id_category']);
        }
        $ProductControllers -> updateView();
        break;
    case 'delete-product':
        $ProductControllers -> postDeleteProduct();
        break;

        //danh mục
    case 'list-category':
        $CategoryControllers->listCategory();
        break;
    case 'add-category':
        if (isset($_POST['them'])) {
            $CategoryControllers->addCategorys($_POST['category_name']);
        }
        $CategoryControllers-> addCategory();
        break;
    case 'update-category':
        if (isset($_POST['capnhat'])) {
            $CategoryControllers-> postUpdateCategory($_POST['category_name']);
        }
        $CategoryControllers->updateViewCategory();
        break;
    case 'delete-category':
        $CategoryControllers->postDeleleCategory();
        break;
}
//  Danh mục khóa học: Id, Tên môn học
// Khóa học: id, Tên khóa học, hình ảnh, giá, id danh mục
// 1. dựa trên base MVC chuyển sang có class 
// 2. thực hiện đầy đủ tính năng CRUD cho bảng hóa học 
//  HẠN THỨ 3 TUẦN SAU 