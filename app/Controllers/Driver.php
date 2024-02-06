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
}
