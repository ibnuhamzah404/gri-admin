<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{

    protected $allowedFields = ['id', 'id_scopepekerjaan', 'id_satuan', 'nama_satuan', 'volume', 'persentase', 'nama_pekerjaan', 'nama_scope'];
    protected $table = "tbl_pekerjaan";

    public function getPekerjaan()
    {
        return $this->findAll();
    }

    public function getQueryPekerjan()
    {
        $query = $this->db->query('SELECT * FROM tbl_pekerjaan INNER JOIN tbl_scopepekerjaan ON tbl_pekerjaan.id_scopepekerjaan = tbl_scopepekerjaan.id INNER JOIN tbl_satuan ON tbl_pekerjaan.id_satuan = tbl_satuan.id; ');

        return $query;
    }
}
