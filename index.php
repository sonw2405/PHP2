<?php
//khai báo biến 
// $a;
// $b = 2; 

//toán tử bao gồm toán tử số học (+, -, *, /), toán tử so sánh (==, !=, <, >), toán tử logic (&&, ||), toán tử gán (=), và nhiều loại khác nữa.

// Mảng trong PHP là tập hợp của các phần tử có thể cùng một kiểu dữ liệu 
//$tên_mảng = arry(giatri1, giatri2,...);
//$tên_mảng = [giatri1, giatri2,...];

//bài tập
//khai báo một mảng số nguyên có 10 phần tử giá trị tự cho
//1 hiển thị tất cả giá trị có trong 1 phần tử bằng cách for hoặc for each 
//tính tổng các giá trị trong mảng



// Khai báo mảng số nguyên có 10 phần tử
// $arr = array();

// for ($i = 1; $i < 12; $i++) {
//     $arr[$i] = $i;
// }
// echo "Cac gia tri trong mang:\n";
// foreach ($arr as $value) {
//     echo $value . "\n";
// }
// $sum = array_sum($arr);
// echo "<br>Tong cac gia tri trong mang la: " . $sum . "\n";


// mảng liên hợp 
// $arrayLH = ["A"=>5, "B"=>6, "C"=>7];
// echo '<pre>';
// print_r($arrayLH); // in ra toàn bộ các phần tử của mảng
// // echo $arrayLH["a"];
// foreach($arrayLH as $key => $value){
//     echo "$key : $value <br>";
// }


// Hàm dùng để chứa 1 đoạn code dùng để thực hiện một chức năng hoặc công việc cụ thể nhằm giúp có thể tái tạo code và giúp code ngắn gọn
// khai báo hàm
// function showArray($arr){}
//nếu trong () có biến thì biến đó được gọi là tham số và hàm đó gọi là hàm có chứa tham số
// hàm có chứa return là hàm có giá trị trả về và ngược lại
// Hàm không trả về sẽ phải tự xử lý đầu ra 

// $y = 5;
// $x = 6;
// function soChanLe($y){
//     if ($y % 2 == 0) {
//         echo "đây là số chẵn";
//     } else {
//         echo "số lẻ";
//     }
// }

// soChanLe($y);
//muốn sử dụng hàm -> gọi hàm
// nếu hàm không trả về thì gọi thẳng ra
//nếu hàm có trả về thì cần thêm biến để lưu trữ hoặc phải sử dụng luôn 
//hàm có bao nhiêu tham số thì chuyền vào đó bấy nhiêu giá trị


//xây dựng một hàm có tham số và 0 trả về chuyền vào hàm những tham số sau 'tên', 'năm sinh', 'quê quán', 'số chứng minh thư', 'sdt'. hiển thị những thông tin sau tên tuổi quê quán cccd sdt

use function PHPSTORM_META\map;

function hienThiThongTin($ten, $namSinh, $queQuan, $soCMT, $sdt) {
    // Tạo một mảng chứa thông tin
    $thongTin = array(
        "Tên" => $ten,
        "Năm Sinh" => $namSinh,
        "Quê Quán" => $queQuan,
        "Số CMT" => $soCMT,
        "Số Điện Thoại" => $sdt
    );

    // Hiển thị thông tin
    echo "Tên: " . $thongTin['Tên'] . "<br>";
    echo "Năm Sinh: " . $thongTin['Năm Sinh'] . "<br>";
    echo "Quê Quán: " . $thongTin['Quê Quán'] . "<br>";
    echo "Số CMT: " . $thongTin['Số CMT'] . "<br>";
    echo "Số Điện Thoại: " . $thongTin['Số Điện Thoại'] . "<br>";
}
// Sử dụng hàm với các tham số cụ thể
hienThiThongTin('Gun', '2004', 'Hanoi', '123456789', '0382963297');

//lập trình hướng đối tượng OOP
//hành động của đối tượng là nhừng gì đối tượng có thể làm -> phương thức
// đặc điểm của hướng đối tượng là tạo lên những gì đối tượng có -> thuộc tính


//kiểm tra kiểu dữ liệu
//var_dump($tênbiến)   


?>