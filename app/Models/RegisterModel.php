<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{

    protected $allowedFields = ['email', 'password', 'nama'];
    protected $table = "tbl_user";


    public function getAllData()
    {
        return $this->findAll();
    }
}
