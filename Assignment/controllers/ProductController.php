<?php
require_once "models/Category.php";
require_once "models/Product.php";
session_start();
class ProductControllers
{
    public function listProduct()
    {
        $listProduct = new Product();
        $listProduct = $listProduct->getAllProduct();
        include "views/product/list.php";
    }
    public function addProduct()
    {
        $listCategory = new Category();
        $listCategory = $listCategory->getAllCategory();
        include "views/product/add.php";
    }
    public function addProducts($name, $price, $image, $id_category)
    {
        $error = [];

        // Validate sản phẩm $name 
        if (empty(trim($name))) {
            $error['name']['required'] = 'Không được bỏ trống tên sản phẩm';
        } else {
            if (strlen(trim($name)) < 5) {
                $error['name']['length'] = 'Tên sản phẩm phải có ít nhất 5 ký tự';
            }
        }

        // Validate giá tiền $price
        if (empty($price)) {
            $error['price']['required'] = 'Không được bỏ trống giá tiền';
        } else {
            if (!is_numeric($price) || $price <= 0 || floor($price) != $price) {
                $error['price']['invalid'] = 'Giá tiền phải là số nguyên dương';
            }
        }

        // Validate ảnh sản phẩm $image
        if (empty($image['name'])) {
            $error['image']['required'] = 'Không được bỏ trống ảnh sản phẩm';
        } else {
            $allowedFormats = ['jpg', 'jpeg', 'png']; // Thêm các định dạng ảnh hỗ trợ
            $maxFileSize = 5 * 1024 * 1024; // 5MB

            $imageInfo = getimagesize($image['tmp_name']);

            if (!$imageInfo || !in_array(strtolower(pathinfo($image['name'], PATHINFO_EXTENSION)), $allowedFormats)) {
                $error['image']['format'] = 'Ảnh sản phẩm phải là định dạng (jpg, jpeg, png)';
            } elseif ($image['size'] > $maxFileSize) {
                $error['image']['size'] = 'Ảnh sản phẩm không được nặng hơn 5MB';
            }
        }

        // Validate danh mục sản phẩm $id_category
        if (empty($id_category)) {
            $error['id_category']['required'] = 'Không được bỏ trống danh mục sản phẩm';
        }

        // Kiểm tra nếu có lỗi
        if (!empty($error)) {
            // Xử lý lỗi theo ý bạn, có thể trả về mảng $error để hiển thị thông báo lỗi cho người dùng
            $_SESSION['error_messages'] = $error;
        } else {
            // Nếu không có lỗi, tiến hành upload ảnh và thêm sản phẩm
            $targetDir = "public/image/";
            $targetFile = $targetDir . $image['name'];

            if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                $image_url = $targetFile;

                // Gọi hàm insertProduct để thêm sản phẩm vào cơ sở dữ liệu
                $check = new Product();
                $check = $check->insertProduct($name, $price, $image_url, $id_category);

                if (!$check) {
                    echo '<script>alert("Thêm sản phẩm thành công");</script>';
                    echo '<script>window.location.href = "index.php?url=list-product";</script>';
                } else {
                    echo '<script>alert("Lỗi khi thêm sản phẩm vào cơ sở dữ liệu");</script>';
                }
            } else {
                echo '<script>alert("Lỗi khi upload ảnh sản phẩm");</script>';
            }
        }
    }



    public function updateView()
    {
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

        $listCategory = new Category();
        $listCategory = $listCategory->getAllCategory();

        $product = new Product();
        $product = $product->getProduct($product_id);
        include "views/product/update.php";
    }

    public function postUpdateProduct($name, $price, $image, $id_category)
    {

        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
        $product = new Product();
        $product = $product->getProduct($product_id);
        // nếu cập nhật ảnh mới thì chạy phần này
        if ($image['size'] != 0) {
            // thư mục sẽ được lưu ảnh vào thư mục image
            $targetDir = "public/image/";
            //Đường dẫn đến file được lưu
            $targetFile = $targetDir . $image['name'];
            // Tiến hành upload file ảnh
            if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                $image_url = $targetFile;
            }
        } else {
            $image_url = $product['image'];
        }

        $check = new Product();
        $check = $check->updateProduct($product_id, $name, $price, $image_url, $id_category);

        if (!$check) {
            echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
            echo '<script>window.location.href = "index.php?url=list-product";</script>';
        } else {
            echo '<script>alert("Cap nhat sản phẩm that bai")</script>';
            echo '<script>window.location.href = "index.php?url=list-product";</script>';
        }
    }

    public function postDeleteProduct()
    {
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
        // $check = echo '<script>var a = prompt("ban co chac chan muon xoa?")</script>';
        $product = new Product();
        $product->deleteProduct($product_id);
        echo '<script>alert("Xoa sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php?url=list-product";</script>';
    }
}
