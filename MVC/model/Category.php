<?php
require_once "db.php";
class Catetogy extends db{
function getAllCategory()
{
    $sql = "SELECT * FROM category";
    
    return $this -> getData($sql);
}
}
?>