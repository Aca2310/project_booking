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
}
