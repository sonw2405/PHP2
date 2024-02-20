<?php
require_once "models/Category.php";
require_once "models/Product.php";
// session_start();
class CategoryControllers
{
    public function listCategory()
    {
        $listCategory = new Category();
        $listCategory = $listCategory->getAllCategory();
        include "views/category/list.php";
    }

    public function addCategory()
    {
        $listCategory = new Category();
        $listCategory = $listCategory->getAllCategory();
        include "views/category/add.php";
    }

    function addCategorys($name)
    {
        $name = $_POST['category_name'];
        if (empty($name)) {
            echo '<script>alert("Vui lòng nhập tên danh mục")</script>';
            return;
        }

        $result = new Category();
        $result = $result->insertCategory($name);

        if (!$result) {
            echo '<script>alert("Thêm danh mục thành công")</script>';
            echo '<script>window.location.href = "index.php?url=list-category";</script>';
        } else {
            echo '<script>alert("Thêm danh mục không thành công")</script>';
            echo '<script>window.location.href = "index.php?url=list-category";</script>';
        }
    }

    public function postUpdateCategory($category_name)
    {
        $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
        $categorys = new Category();
        $categorys = $categorys->getCategory($category_name);

        $check = new Category();
        $check = $check->updateCategory($category_id, $category_name);

        if (!$check) {
            echo '<script>alert("Cập nhật danh mục thành công")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Cập nhật danh mục không thành công")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
    }

    public function updateViewCategory()
    {
        $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
        $listCategory = new Category();
        $listCategory = $listCategory->getAllCategory();
        $category = new Category();
        $category = $category->getCategory($category_id);
        include "views/category/update.php";
    }


    public function postDeleleCategory()
    {
        $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
        // $check = echo '<script>var a = prompt("ban co chac chan muon xoa?")</script>';
        $category = new Category();
        $category ->deleteCategory($category_id);
        echo '<script>alert("Xoa sản phẩm thành công")</script>';
        echo '<script>window.location.href = "index.php?url=list-category";</script>';
    }
}
