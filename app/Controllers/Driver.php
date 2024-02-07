<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Drivermodel;

class Driver extends BaseController
{
    public function index()
    {
        $drivermodel = new Drivermodel();
        $data['driver'] =  $drivermodel->findAll();

        return view('admin/Driver', $data);
    }

    public function tambah_driver()
    {
        return view('admin/tambah_driver');
    }

    public function simpan_driver()
    {
        // Validasi formulir
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'telp' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Formulir tidak valid, tampilkan pesan kesalahan
            return redirect()->to(site_url('admin/tambah_driver'))->withInput()->with('validation', $validation);
        }

        // Jika formulir valid, lanjutkan dengan menyimpan data
        $driverModel = new Drivermodel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
        ];

        $driverModel->insert($data);

        return redirect()->to(site_url('admin/driver'));
    }

    public function edit_driver(){
        return view ('admin/edit_driver');
    }
}
