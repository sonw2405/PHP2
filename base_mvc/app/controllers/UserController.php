<?php

namespace App\Controllers;

use App\Models\User;

class  UserController extends BaseController
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        //        echo "123";
        $users = $this->user->getUser();
        //        var_dump($users);
        //        die();
        return $this->render('user.list', compact('users'));
    }
    public function addUser()
    {
        return $this->render('user.add');
    }
    public function postUser()
    {
        // validate form
        if (isset($_POST['guiuser'])) {
            $error = [];
            // rỗng
            if (empty($_POST['name'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (empty($_POST['sdt'])) {
                $error[] = "Bạn vui lòng nhập số điện thoại";
            }
            if (empty($_POST['email'])) {
                $error[] = "Bạn vui lòng nhập email";
            }
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false || strpos($_POST['email'], '@gmail.com') === false) {
                $error[] = "Email không hợp lệ! Vui lòng nhập lại.";
            }
            if (empty($_POST['age'])) {
                $error[] = "Bạn vui lòng nhập số tuổi";
            }
            if (empty($_POST['address'])) {
                $error[] = "Bạn vui lòng nhập địa chỉ";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-user');
            } else {
                $check = $this->user->addUser(null, $_POST['name'], $_POST['sdt'], $_POST['email'], $_POST['age'], $_POST['address']);
                if ($check) {
                    flash('success', "Thêm thành công", 'add-user');
                }
            }
        }
    }
    public function detail($id)
    {
        //        var_dump($id);
        //        die();
        $users = $this->user->detailUser($id);
        return $this->render('user.edit', compact('users'));
    }
    public function editUser($id)
    {
        if (isset($_POST['guiuser'])) {
            $error = [];
            // rỗng
            if (empty($_POST['name'])) {
                $error[] = "Bạn vui lòng nhập tên";
            }
            if (empty($_POST['sdt'])) {
                $error[] = "Bạn vui lòng nhập số điện thoại";
            }
            if (empty($_POST['email'])) {
                $error[] = "Bạn vui lòng nhập email";
            }
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false || strpos($_POST['email'], '@gmail.com') === false) {
                // echo "<script>alert('Email không hợp lệ! Vui lòng nhập lại.');</script>";
                $error[] = "Email không hợp lệ! Vui lòng nhập lại.";
            }
            if (empty($_POST['age'])) {
                $error[] = "Bạn vui lòng nhập số tuổi";
            }
            if (empty($_POST['address'])) {
                $error[] = "Bạn vui lòng nhập địa chỉ";
            }
            if (count($error) >= 1) {
                flash('errors', $error, 'add-product');
            } else {
                $check = $this->user->updateUser($id, $_POST['name'], $_POST['sdt'], $_POST['email'], $_POST['age'], $_POST['address']);
                if ($check) {
                    $editRoute = 'detail-user/' . $id;
                    flash('success', "Sửa thành công", $editRoute);
                }
            }
        }
    }
    public function deleteUser($id)
    {
        $check = $this->user->deleteUser($id);
        if ($check) {
            flash('success', "Xóa thành công", 'list-user');
        }
    }
}
