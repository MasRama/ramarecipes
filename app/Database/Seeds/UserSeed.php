<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    public function run()
    {
        $user = new User();
        $data = [
            'nama' => 'Rama',
            'email' => 'rama@gmail.com',
            'password' => password_hash('rama', PASSWORD_BCRYPT)
        ];
        $user->insert($data, false);
    }
}
