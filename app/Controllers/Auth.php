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
}
