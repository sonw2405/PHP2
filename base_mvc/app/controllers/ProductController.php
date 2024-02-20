<?php

namespace App\Controllers;

use App\Models\Product;

class  ProductController extends BaseController
{
    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        //        echo "123";
        $products = $this->product->getProduct();
        //        var_dump($products);
        //        die();
        return $this->render('product.list', compact('products'));
    }
    public function addProduct()
    {
        return $this->render('product.add');
    }
    public function postProduct()
    {
        // validate form
        if (isset($_POST['gui'])) {
            $error = [];
            // rỗng
            if (empty($_POST['ten'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (empty($_POST['gia'])) {
                $error[] = "Bạn vui lòng nhập gia";
            }
            // if (empty($_POST['danhmuc'])) {
            //     $error[] = "Bạn vui lòng chọn danh mục";
            // }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-product');
            } else {
                $check = $this->product->addProduct(null, $_POST['ten'], $_POST['gia']);
                if ($check) {
                    flash('success', "Thêm thành công", 'add-product');
                }
            }
        }
    }
    public function detail($id)
    {
        //        var_dump($id);
        //        die();
        $products = $this->product->detailProduct($id);
        return $this->render('product.edit', compact('products'));
    }
    public function editProduct($id)
    {
        if (isset($_POST['gui'])) {
            $error = [];
            // rỗng
            if (empty($_POST['ten'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (empty($_POST['gia'])) {
                $error[] = "Bạn vui lòng nhập gia";
            }
            // if (empty($_POST['danhmuc'])) {
            //     $error[] = "Bạn vui lòng chọn danh mục";
            // }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-product');
            } else {
                $check = $this->product->updateProduct($id, $_POST['ten'], $_POST['gia']);
                if ($check) {
                    $editRoute = 'detail-product/' . $id;
                    flash('success', "Sửa thành công", $editRoute);
                }
            }
        }
    }
    public function deleteProduct($id)
    {
        $check = $this->product->deleteProduct($id);
        if ($check) {
            flash('success',  "Xóa thành công", 'list-product');
        }
    }
}
