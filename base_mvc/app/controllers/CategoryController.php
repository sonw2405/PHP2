<?php

namespace App\Controllers;

use App\Models\Category;

class  CategoryController extends BaseController
{
    public $category;

    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        //        echo "123";
        $categories = $this->category->getCategory();
        //        var_dump($categorys);
        //        die();
        return $this->render('category.list', compact('categories'));
    }
    public function addCategory()
    {
        return $this->render('category.add');
    }
    public function postCategory()
    {
        // validate form
        if (isset($_POST['Gui'])) {
            $error = [];
            // rỗng
            if (empty($_POST['tendanhmuc'])) {
                $error[] = "Bạn vui lòng nhập tên danh mục";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-category');
            } else {
                $check = $this->category->addCategory(null, $_POST['tendanhmuc']);
                if ($check) {
                    flash('success', "Thêm thành công", 'add-category');
                }
            }
        }
    }
    public function detail($id)
    {
        //        var_dump($id);
        //        die();
        $categories = $this->category->detailCategory($id);
        return $this->render('category.edit', compact('categories'));
    }
    public function editCategory($id)
    {
        if (isset($_POST['Gui'])) {
            $error = [];
            // rỗng
            if (empty($_POST['tendanhmuc'])) {
                $error[] = "Bạn vui lòng nhập tên danh mục";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-category');
            } else {
                $check = $this->category->updateCategory($id, $_POST['tendanhmuc']);
                if ($check) {
                    $editRoute = 'detail-category/' . $id;
                    flash('success', "Sửa thành công", $editRoute);
                }
            }
        }
    }
    public function deleteCategory($id)
    {
        $check = $this->category->deleteCategory($id);
        if ($check) {
            flash('success',  "Xóa thành công", 'list-category');
        }
    }
}
