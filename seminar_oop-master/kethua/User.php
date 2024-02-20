<?php
require_once 'db.php';

//php hỗ trợ đơn kế thừa: 1 class chỉ được extends 1 class
//trait ( >= PHP5.4)
class User extends db {
    //lấy toàn bộ user trong db
    public function getUsers() {
        $sql = "SELECT * FROM users";
        return $this->getData($sql);
    }
}

//kế thừa bắc cầu
class NhanVien extends User {
    
}

?>