<?php

namespace App\Controllers;

class Admin extends BaseController
{
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
}
