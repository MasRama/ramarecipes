<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function post_login()
    {
        $user = new User();
        $email = $this->request->getPost('email');
        $password = $this->request->getVar('password');

        $userFind = $user->where('email', $email)->first();

            if ($userFind) {
                if (password_verify($password, $userFind['password'])) {
                    session()->set([
                        'name' => $userFind['nama'],
                        'email' => $userFind['email'],
                        'logged_in' => TRUE
                    ]);
    
                    return redirect()->to('/');
                } else {
                    session()->setFlashdata('errors', 'Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('errors', 'Username & Password Tidak Ditemukan');
                return redirect()->back();
            }
         
    }

    public function index_reg()
    {
        return view('auth/register');
    }

    public function post_reg()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Nama Minimal 5 Huruf']
            ],
            'email' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Email Minimal 5 Huruf']
            ],
            'password' => [
                'rules' => 'min_length[5]|max_length[30]',
                'errors' => ['min_length' => 'Password Minimal 5 Huruf', 'max_length' => 'Password Maksimal 30 Huruf']
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => ['matches' => 'Konfirmasi Password harus sesuai!']
            ]
		])) {
            session()->setFlashdata('errors', $this->validator->getErrors());
			return redirect()->back()->withInput();
		}

        $user = new User();
        $data = [
            'nama'  => $this->request->getPost('nama'),

			'email' => $this->request->getPost('email'),

            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ];

        $user->insert($data, false);
        session()->setFlashdata('success', 'Berhasil Mendaftar! Silahkan Login');
        return redirect()->to('/login');
    }
}
