<?php

namespace App\Model;

class Users extends Crud
{
    public function createUser($data)
    {
        return $this->create('user', $data) !== false;
    }
}
