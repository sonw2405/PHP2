<?php 
//overriding (ghi đè)
class HinhChuNhat {
    public $chieuDai;
    public $chieuRong;

    public function __construct($chieuDai, $chieuRong) {
        $this->chieuDai = $chieuDai;
        $this->chieuRong = $chieuRong;
    }
}

class HinhVuong extends HinhChuNhat {
    public function __construct($canh) {
        $this->chieuDai = $canh;
        $this->chieuRong = $canh;
    }
}

$hinhVuong = new HinhVuong(4);
var_dump($hinhVuong);
?>