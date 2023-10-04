<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class Auth extends BaseController
{

    protected $registerModel;

    public function __construct()
    {
        helper('form');
        $this->registerModel = new RegisterModel();
    }

    public function register()
    {



        $data = array('title' => 'Register');

        return view('auth/register/p_register', $data);
    }




    public function action_register()
    {

        if ($this->validate([
            'nama' =>  [
                'label'  => 'nama user',
                'rules'  => 'required|',
                'errors' => [
                    'required' => 'field {field} wajib diisi tidak boleh kosong!'
                ]
            ],
            'email' =>  [
                'label'  => 'email',
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required' => 'field {field} wajib diisi tidak boleh kosong!'
                ]



            ],
            'password' =>  [
                'label'  => 'password',
                'rules'  => 'required|min_length[10]',
                'errors' => [
                    'required' => 'field {field} wajib diisi tidak boleh kosong!',
                    'min_length' => 'password harus lebih dari 10 karakter'
                ]



            ],
            'passwordconfirm' => [
                'rules' =>    'required|matches[password]',
                'errors' => [
                    'required' => 'field {field} wajib diisi tidak boleh kosong!',
                    'matches' => 'field {field} tidak sama dengan field password'
                ]
            ]

        ])) {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),

            ];

            $this->registerModel->save($data);
            return redirect()->to('auth/login/p_login');
        } else {
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to('auth/register/p_register')->withInput();
        };
    }

    public function login()

    {
        $data = array('title' => 'Login');

        if (session('name')) {
            return redirect()->to('Admin/');
        }

        return view('auth/login/p_login', $data);
    }

    public function action_login()
    {
        $session = session();
        $post = $this->request->getPost();
        $query = $this->registerModel->getWhere(['email' => $post['email']], 1);
        $user = $query->getRow();

        if ($user and password_verify($post['password'], $user->password)) {
            $ses_data = [
                'id' => $user->id,
                'name' => $user->nama,
                'login' => 'true',
                'isLoggedIn' => true
            ];

            $session->set($ses_data);
            return redirect()->to('Admin/');
        } else {
            return redirect()->back()->with('error', 'email tidak ditemukan!');
        }
    }


    public function logout()
    {
        $session = session();

        $session->destroy();

        return redirect()->to('/Auth/login');
    }
}
