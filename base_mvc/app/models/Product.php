<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = "sanpham";

    //    public function __construct()
    //    {
    //        echo "Đây là file Product Model";
    //
    //    }
    public function getProduct()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addProduct($id, $ten, $gia)
    {
        $sql = "INSERT INTO $this->table VALUES (?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $ten, $gia]);
    }
    public function detailProduct($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateProduct($id, $ten, $gia)
    {
        $sql = "UPDATE $this->table SET tensanpham= ?, gia= ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([ $ten, $gia, $id]);
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
