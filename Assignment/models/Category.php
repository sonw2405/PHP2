<?php
require_once "db.php";
class Category extends db
{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM category";
        return $this->getData($sql);
    }

    public function insertCategory($category_name)
    {
        $sql = "INSERT INTO category (id, category_name) VALUES('null','$category_name')";
        return $this->getData($sql);
    }

    public function getCategory($category_id)
    {
        $sql = "SELECT ct.id, ct.category_name, pr.id_category FROM product pr INNER JOIN category ct ON pr.id_category = ct.id WHERE ct.id = :id";
        return $this->getData($sql, false);

        // return $this->getData($sql);
    }

    public function updateCategory($id, $category_name)
    {
        $sql = "UPDATE category SET category_name = :category_name WHERE id = :id";;
        return $this->getData($sql, false);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM category WHERE id='{$id}'";
        return $this->getData($sql, false);
    }
}
