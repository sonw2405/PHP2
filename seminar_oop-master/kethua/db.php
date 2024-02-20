<?php 

//class cha (database)
class db {
    //hàm kết nối cơ sở dữ liệu
    public function connect() {
        $connect = new PDO("mysql:host=localhost;dbname=;root;''");
        
        return $connect;
    }

    //hàm getData: gửi câu truy vấn, kết nối với CSDL để lấy dữ liệu ra
    public function getData($query) {
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        $stmt->execute(); //thực hiện câu truy vấn (query)

        return $stmt->fetchAll();
    }
}

?>