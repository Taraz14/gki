<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Authentication extends BaseController
{
    public function loginPage()
    {
        return view('backend/login');
    }
}
