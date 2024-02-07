<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RuanganModel;

class RuanganControllers extends BaseController
{
    public function index()
    {
        $ruanganmodel = new RuanganModel();
        $data['room'] =  $ruanganmodel->findAll();

        return view('admin/ruangan', $data);
    }

    public function tambah_ruangan(){
        return view('admin/tambah_ruangan');
    }

    public function simpan_ruangan(){
        $ruanganmodel = new RuanganModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'fasilitas' => $this->request->getPost('fasilitas'),
        ];

        $ruanganmodel->insert($data);

        return redirect()->to(site_url('admin/ruangan'));
    }

    public function booking_ruangan(){
        return view('user/dashboard');
    }


    public function edit_ruangan(){
        return view ('admin/edit_ruangan');
    }
}
