<?php
namespace NSP1;
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
// $sinhVien = new SinhVien(ten:"Gun",  maSV:"PH33575");
// $sinhVien->hienThiThongTin();
