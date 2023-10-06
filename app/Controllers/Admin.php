<?php

namespace App\Controllers;

use App\Models\PekerjaanModel;
use App\Models\ScopePekerjaanModel;
use App\Models\SatuanModel;

class Admin extends BaseController
{
    protected $pekerjaanModel;
    protected $scopePekerjaanModel;
    protected $satuanModel;

    public function __construct()
    {
        helper('form');
        $this->pekerjaanModel = new PekerjaanModel();
        $this->scopePekerjaanModel = new ScopePekerjaanModel();
        $this->satuanModel = new SatuanModel();
    }

    public function index()
    {
        return view('admin/dashboard/pages/p_dashboard');
    }

    public function proyek()
    {
        return view('admin/proyek/pages/p_proyek');
    }

    public function gant()
    {
        return view('gant');
    }

    public function v_dataproyek()
    {
        return view('admin/dataproyek/pages/p_dataproyek');
    }

    public function v_pekerjaan()
    {

        $data = [
            'scope_pekerjaan' =>  $this->scopePekerjaanModel->getScopePekerjaan(),
            'satuan'          =>  $this->satuanModel->getSatuan()

        ];

        return view('admin/pekerjaan/pages/p_pekerjaan', $data);
    }


    public function input_pekerjaan()
    {

        $data = [
            'nama_pekerjaan' => $this->request->getPost('nama'),
            'id_scopepekerjaan' => $this->request->getPost('id_scpek'),
            'id_satuan' => $this->request->getPost('id_satuan'),
            'volume' => $this->request->getPost('volume'),
            'persentase' => $this->request->getPost('persentase'),
        ];

        $this->pekerjaanModel->save($data);
    }


    public function v_datapekerjaan()
    {

        $data = [
            'pekerjaan' =>  $this->pekerjaanModel->getQueryPekerjan()->getResultArray(),
        ];

        return view('admin/pekerjaan/pages/p_datapekerjaan', $data);
    }
}
