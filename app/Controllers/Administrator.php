<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Administrator extends BaseController
{
    public function index()
    {
        return view('backend/index');
    }
}
