<?php
namespace NSP;
class SinhVien
{
    private $maSV;
    private $ten;

    public function __construct($ten, $maSV,)
    {
        $this->ten = $ten;
        $this->maSV = $maSV;
    }

    function hienThiThongTin(){
        echo "Tên: " . $this->ten. "<br>";
        echo "Mã sinh viên: " . $this->maSV . "<br>";
    }
   
}
// $sinhVien = new NSP1\SinhVien('PH33575', 'Gun');
// $sinhVien->hienThiThongTin();

