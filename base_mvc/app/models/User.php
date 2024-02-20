<?php

namespace App\Models;

class User extends BaseModel
{
    protected $user = "user";

    //    public function __construct()
    //    {
    //    
    //
    //    }
    public function getUser()
    {
        $sql = "SELECT * FROM $this->user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addUser($id, $name, $sdt, $email, $age, $address)
    {
        $sql = "INSERT INTO $this->user VALUES (?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $sdt, $email, $age, $address]);
    }
    public function detailUser($id)
    {
        $sql = "SELECT * FROM $this->user WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateUser($id, $name, $sdt, $email, $age, $address)
    {
        $sql = "UPDATE $this->user SET name= ?, sdt= ?, email= ?, age= ?, address= ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $sdt, $email, $age, $address, $id]);
    }
    public function deleteUser($id)
    {
        $sql = "DELETE FROM $this->user WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
