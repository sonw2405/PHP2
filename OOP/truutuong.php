<?php
//khai báo class trừu tượng
abstract class DongVat
{
    // 1 class được gọi là class trừu tượng là khi class đó chứa phương thức trừu tượng 
    // class trừu tượng thì 0 thể khởi tạo nhưng vẫn có phương thức và thuộc tính như các class bình thường
    // phuongq thức trừu tượng
    abstract public function di();
}
class ConNguoi extends DongVat
{
    public function di()
    {
        echo "Con Nguoi la con người";
    }
}

$cn = new ConNguoi();
$cn->di();

//có hình tròn hình vuông hình chữ nhật
//hãy tạo ra 1 class trừu tượng để tính chu vi diện tích của mọi hình

abstract class HinhHoc
{
    abstract public function tinhChuVi();
    abstract public function tinhDienTich();
}

class HinhTron extends HinhHoc
{
    private $bankinh;

    public function __construct($bankinh)
    {
        $this->bankinh = $bankinh;
    }

    public function tinhChuVi()
    {
        return 2 * M_PI * $this->bankinh;
    }

    public function tinhDienTich()
    {
        return M_PI * pow($this->bankinh, 2);
    }
}

class HinhChuNhat extends HinhHoc
{
    public $dai;
    public $rong;

    public function __construct($dai, $rong)
    {
        $this->dai = $dai;
        $this->rong = $rong;
    }
  
    public function tinhChuVi()
    {
        return ($this->dai + $this->rong) * 2 ;
    }

    public function tinhDienTich()
    {
        return $this->dai * $this->rong;
    }
}

class HinhVuong extends HinhHoc
{
    public $cach;

    public function __construct($cach)
    {
        $this->cach = $cach;
    }
  
    public function tinhChuVi()
    {
       return $this->cach * 4 ;
    }

    public function tinhDienTich()
    {
        return pow($this->cach ,2);
    }
}


$ht = new HinhTron(2);
echo "<br>Chu vi hình tròn: " . $ht->tinhChuVi() . "\n";
echo "<br>Diện tích hình tròn: " . $ht->tinhDienTich() . "\n";

$hcn = new HinhChuNhat(4,5);
echo "<br>Chu vi hình chữ nhật: " . $hcn->tinhChuVi() . "\n";
echo "<br>Diện tích hình chữ nhật: " . $hcn->tinhDienTich() . "\n";

$hv = new HinhVuong(4);
echo "<br>Chu vi hình vuông: " . $hv->tinhChuVi() . "\n";
echo "<br>Diện tích hình vuông: " . $hv->tinhDienTich() . "\n";

