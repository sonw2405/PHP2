<?php

namespace App\Models;

class Category extends BaseModel
{
    protected $danhmuc = "danhmuc";

    //    public function __construct()
    //    {
    //       
    //
    //    }
    public function getCategory()
    {
        $sql = "SELECT * FROM $this->danhmuc";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addCategory($id, $tendanhmuc)
    {
        $sql = "INSERT INTO $this->danhmuc VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $tendanhmuc]);
    }
    public function detailCategory($id)
    {
        $sql = "SELECT * FROM $this->danhmuc WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateCategory($id, $tendanhmuc)
    {
        $sql = "UPDATE $this->danhmuc SET tendanhmuc= ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$tendanhmuc, $id]);
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM $this->danhmuc WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
