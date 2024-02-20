<?php

use function PHPSTORM_META\map;

class SinhVien {
    //khai báo thuộc tính 
    // teen, namw sinh, maxSV, cccd
    public $tenSinhVien;
    public $namSinh;
    public $maSV;
    public $cccd;
    // get dùng để trả dữ liệu của thuộc tính 
    // set là truyền dữ liệu vào cho thuộc tính
    // khai báo phương thức -> hàm
    public function getTenSV(){
       // muốn gọi đến thuộc tính hay phương thức của đối tượng nhớ đến từ khóa $this 
        return $this -> tenSinhVien;
    }
    public function setTenSV($tenSV){
        $this -> tenSinhVien = $tenSV;
    }

    public function getNamSinh(){
       
         return $this -> namSinh;
     }
     public function setNamSinh($namSinh){
         $this -> namSinh = $namSinh;
     }
 
     public function getMaSV(){
       
        return $this -> maSV;
    }
    public function setMaSV($maSV){
        $this -> maSV = $maSV;
    }
     
    public function getCCCD(){
       
        return $this -> cccd;
    }
    public function setCCCD($cccd){
        $this -> cccd = $cccd;
    }

//hàm Magic function 
//đây là 1 phương thức đặc biệt 
// 0 giống như những hàm khác cần phải gọi mới hoạt động mà phương thức này được hoạt động ngay khi đối tượng được khởi tạo 
//Phương thức khởi tạo

//phương thức có tham số
public function __construct($tenSinhVien, $namSinh, $maSV, $cccd)
{
    //có bấy nhiêu biến thì truyền vào bấy nhiêu biến
    $this-> tenSinhVien = $tenSinhVien;
    $this-> namSinh = $namSinh;
    $this-> maSV = $maSV;
    $this-> cccd = $cccd;
}


//viết 2 phương thức 
//dựa trên năm sinh hay tính tuổi (hàm 0 tham số và có trả về)
//viết hàm hiển thị tất cả các thông tin

// phương thức hỗ trợ để tính tuổi
     public function tinhTuoi() {
        return date('Y') - $this -> namSinh;
    }
    public function hienThiThongTin() {
        echo "<h3>Thông tin sinh viên</h3>";
        echo "Tên sinh viên: " . $this->getTenSV() . "<br>";
        echo "Năm sinh: " . $this->getNamSinh() . "<br>";
        echo "Mã sinh viên: " . $this->getMaSV() . "<br>";
        // echo "Tính kế thừa: " . get_parent_class($this) . "<br>";
        echo "Tuổi: " . $this -> tinhTuoi() . "<br>";
    }
    
}
// đối tượng con được tạo ra từ lớp nguồn gốc

$sinhVien = new SinhVien(tenSinhVien:"Gun", namSinh:2004, maSV:"PH33575", cccd:213124);
$sinhVien->setTenSV("vlervcl");
// $sinhVien->setNamSinh(2000);
// $sinhVien->setMaSV("PH332547");
// $sinhVien->setCCCD("00822824");

$sinhVien->hienThiThongTin();

echo "<br><br>";
























?>