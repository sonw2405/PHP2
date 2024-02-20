<?php

require_once './BaseBank.php';
require_once './TpBank.php';

$acc = new BaseBank("Nguyễn Văn Anh", "0333123", 0);

$nguoiGui = new TpBank("Trần Văn Hải", "099933312", 20000000);

$nguoiGui->chuyenTien(1500000, $acc);

echo "<br>";
$acc->thongTinTk();
?>
