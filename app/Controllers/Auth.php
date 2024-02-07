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

    public function processLogin()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $userModel = new UserModel();
    $user = $userModel->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
        if ($user['role'] == 'admin') {
            return redirect()->to('admin/dashboard_admin');
        } elseif ($user['role'] == 'karyawan') {
            return redirect()->to('user/dashboard');
        }
    }

    // Autentikasi gagal, set flashdata error
    return redirect()->to('login')->with('error', 'Username atau password salah.');
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

    public function edit_user(){
        return view ('admin/edit_user');
    }
}
