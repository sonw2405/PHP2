<?php

class BaseBank {
    public $hoten;
    public $soTk;
    protected $soDu;

    public function __construct($hoten, $soTk, $soDu) 
    {
        $this->hoten = $hoten;
        $this->soTk = $soTk;
        $this->soDu = $soDu;
    }

    //hàm set số dư để đặt lại giá trị cho một thuộc tính private
    public function setSoDu($soTien) {
        $this->soDu = $soTien;
    }

    //hàm get để lấy giá trị số dư
    public function getSoDu() {
        return $this->soDu;
    }

    public function thongTinTk() {
        echo "Họ tên: $this->hoten <br/>";
        echo "Số tài khoản: $this->soTk <br/>";
        echo "Số dư: $this->soDu <br/>";
    }
}
?>
