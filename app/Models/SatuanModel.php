<?php

namespace App\Models;

use CodeIgniter\Model;

class SatuanModel extends Model
{

    protected $allowedFields = ['id', 'nama_satuan'];
    protected $table = "tbl_satuan";


    public function getSatuan()
    {
        return $this->findAll();
    }
}
