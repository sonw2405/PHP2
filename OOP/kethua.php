<?php
// class ConNguoi{
//     public $chan;
//     public $tay;
//     public $mat;
//     public $mui;
//     public $longnach;
    
//     public function an(){
//         echo $this->mat;
//     }
// }

// class NguoiLon extends ConNguoi{
//     // thuộc tính
   
//     public function an(){
//         echo $this->mat;
//     }
//     public function di(){
//         echo "Đi qua cửa sổ";
//     }
// }

//  class TreCon extends NguoiLon{

//     public function bo(){
//         echo $this->mat;
//         $this->an();
//     }
//  }

//  //khởi tạo đối tượng 
//  $nl = new NguoiLon();
//  $nl-> mat = "hai mí";
//  $tc = new TreCon();
//  $tc -> mat ="một mí";
//  $tc-> bo();
?>
<!-- tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
tạo phương thức set cho các thuộc tính trên
tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
tạo phương thức set cho các thuộc tính trên
tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin hoten,diachi,tuoi,email,sdt,điểm TB
tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
tạo phương thức set cho các thuộc tính trên
tạo phương thức tính tổng lương = luongCB *soGioDay
tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin hoten,diachi,tuoi,email,sdt,tổng lương -->

<?php

class ConNguoi {
    // Thuộc tính
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;

    // Phương thức set cho các thuộc tính
    public function setHoTen($hoTen) {
        $this->hoTen = $hoTen;
    }

    public function setDiaChi($diaChi) {
        $this->diaChi = $diaChi;
    }

    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSdt($sdt) {
        $this->sdt = $sdt;
    }

    // Phương thức tính tuổi
    public function tinhTuoi() {
        $namHienTai = date("Y");
        return $namHienTai - $this->namSinh;
    }

    // Phương thức hiển thị thông tin
    public function hienThiThongTin() {
        echo "<br>HoTen: " . $this->hoTen . "\n";
        echo "<br>DiaChi: " . $this->diaChi . "\n";
        echo "<br>Tuoi: " . $this->tinhTuoi() . "\n";
        echo "<br>Email: " . $this->email . "\n";
        echo "<br>SDT: " . $this->sdt . "\n";
    }
}

class SinhVien extends ConNguoi {
    // Thuộc tính
    private $diemToan;
    private $diemLy;
    private $diemHoa;

    // Phương thức set cho các thuộc tính
    public function setDiemToan($diemToan) {
        $this->diemToan = $diemToan;
    }

    public function setDiemLy($diemLy) {
        $this->diemLy = $diemLy;
    }

    public function setDiemHoa($diemHoa) {
        $this->diemHoa = $diemHoa;
    }

    // Phương thức tính điểm trung bình
    public function tinhDiemTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }

    // Phương thức hiển thị thông tin sinh viên
    public function hienThiThongTinSinhVien() {
        $this->hienThiThongTin();
        echo "<br>Diem Toan: " . $this->diemToan . "\n";
        echo "Diem Ly: " . $this->diemLy . "\n";
        echo "Diem Hoa: " . $this->diemHoa . "\n";
        echo "DiemTB: " . $this->tinhDiemTB() . "\n";
    }
}

class GiangVien extends ConNguoi {
    // Thuộc tính
    private $luongCB;
    private $soGioDay;

    // Phương thức set cho các thuộc tính
    public function setLuongCB($luongCB) {
        $this->luongCB = $luongCB;
    }

    public function setSoGioDay($soGioDay) {
        $this->soGioDay = $soGioDay;
    }

    // Phương thức tính tổng lương
    public function tinhTongLuong() {
        return $this->luongCB * $this->soGioDay;
    }

    // Phương thức hiển thị thông tin giảng viên
    public function hienThiThongTinGiangVien() {
        $this->hienThiThongTin();
        echo "<br>TongLuong: " . number_format($this->tinhTongLuong()) ."VND" . "<br>";
    }
}

// Sử dụng các class đã định nghĩa
$sinhVien = new SinhVien();
$sinhVien->setHoTen("Nguyen Van M");
$sinhVien->setDiaChi("Ha Noi");
$sinhVien->setNamSinh(2000);
$sinhVien->setEmail("nguyenvana@gmail.com");
$sinhVien->setSdt("123456789");
$sinhVien->setDiemToan(8);
$sinhVien->setDiemLy(9);
$sinhVien->setDiemHoa(7);
$sinhVien->hienThiThongTinSinhVien();

$giangVien = new GiangVien();
$giangVien->setHoTen("");
$giangVien->setDiaChi("Ho Chi Minh");
$giangVien->setNamSinh(1980);
$giangVien->setEmail("tranthib@gmail.com");
$giangVien->setSdt("987654321");
$giangVien->setsoGioDay(50);
$giangVien->setLuongCB(30000);
$giangVien->hienThiThongTinGiangVien();

?>