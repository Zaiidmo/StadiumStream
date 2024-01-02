<?php

namespace App\Model;

class User extends Crud
{
    public function createUser($data)
    {
        return $this->create('user', $data) !== false;
    }
    public function readUser()
    {
        return $this->read("user");
    }
}