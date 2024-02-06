<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $usermodel = new UserModel();
        $data['users'] =  $usermodel->findAll();

        return view('admin/User', $data);
    }

    public function login(){
        return view('login');
    }

    public function tambah_akun()
    {
        return view('admin/halaman_tambah_akun');
    }

    public function simpanAkun()
    {
        $userModel = new UserModel();

        $validationRules = [
            'username' => 'required|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'nama' => 'required',
            'telp' => 'required',
            'password' => 'required|min_length[6]',
            'konfirmpassword' => 'required|matches[password]',
            'role' => 'required',
        ];

        $validationMessages = [
            'username' => [
                'is_unique' => 'Username sudah digunakan.',
            ],
            'email' => [
                'is_unique' => 'Email sudah digunakan.',
                'valid_email' => 'Format email tidak valid.',
            ],
            'password' => [
                'min_length' => 'Password minimal harus memiliki panjang 6 karakter.',
            ],
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return view('admin/halaman_tambah_akun', ['errors' => $this->validator->getErrors()]);
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role'),
        ];

        $userModel->insert($data);

        return redirect()->to(site_url('admin/User'));
    }
}
