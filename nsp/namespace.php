<?php
include "nsp.php";
include "nsp1.php";
$sv = new NSP\SinhVien(maSV:'PH33575',ten: 'Gun');
$sv->hienThiThongTin();

$sv = new NSP1\SinhVien(maSV: 'PH33575',ten: 'Gun');
$sv->hienThiThongTin();
//namespace luon luon duoc dat tren dau file PHP
//namespace dong vai tro lafm khong gian dai dien cho class/ fun/ bien
//nham muc dich giai quyet van de nhieu file co chung ten class/ fun/ bien