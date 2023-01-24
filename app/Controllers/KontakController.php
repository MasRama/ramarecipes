<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KontakController extends BaseController
{
    public function index()
    {
        return view('kontak');
    }
}
