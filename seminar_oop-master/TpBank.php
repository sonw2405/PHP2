<?php

class TpBank extends BaseBank {
    public function chuyenTien($soTien, $nguoiNhan) {
        if ($soTien < $this->soDu) {
            $this->soDu -= $soTien;
            $nguoiNhan->soDu += $soTien;
            echo "Bạn vừa chuyển thành công số tiền $soTien VNĐ <br>";
            echo "đến người nhận $nguoiNhan->hoten, stk là $nguoiNhan->soTk <br>";
            echo "Số dư trong tài khoản là: $this->soDu";
        } else {
            echo "Số dư trong tài khoản không đủ để giao dịch";
        }
    }
}

?>