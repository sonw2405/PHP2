<?php
interface DiChuyen
{
    //interface nó 0 phải là một class vậy cho lên nó cũng 0 có phương thức hay thuộc tính nhưng nó vẫn giữ lại phương thức trừu tượng
    public function di();
}
class ConNguoi implements DiChuyen
{
    public function di()
    {
        echo "đi bằng 4 chân";
    }
}
class Oto implements DiChuyen
{
    public function di()
    {
        echo "đi bằng 2 chân";
    }
}

//interface hay abstract đều là bản thiết kế của dự án phầm mềm
//interface là bàn thiết kế cho các class có chung hành động nhưng khác bản chất 
//abstract là bản thiết kế cho các class có chung bản chất
//mức độ mở rộng dự án của interface lớn hơn
