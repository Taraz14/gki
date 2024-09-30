<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UsersModel;

class Authentication extends BaseController
{
    public function loginPage()
    {
        return view('backend/login');
    }

    public function loginAct()
    {
        $user = new UsersModel;

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $verif = $user->get_data($username, $password);

        if (($verif['username'] == $username) && ($verif['password'] == $password)) {
            session()->set('username', $verif['username']);
            session()->set('email', $verif['email']);
            session()->set('id', $verif['id']);
            session()->set('nama', $verif['fullname']);

            return redirect()->to('/gkiadmin');
        } else {
            session()->setFlashdata('Gagal', 'Username atau Password yang anda masukkan salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('./');
    }
}
