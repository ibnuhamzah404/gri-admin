<?php

namespace App\Models;

use CodeIgniter\Model;

class ScopePekerjaanModel extends Model
{

    protected $allowedFields = ['id', 'nama_scope'];
    protected $table = "tbl_scopepekerjaan";


    public function getScopePekerjaan()
    {
        return $this->findAll();
    }
}
