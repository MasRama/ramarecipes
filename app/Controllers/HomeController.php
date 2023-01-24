<?php

namespace App\Controllers;
use App\Models\Makanan;
use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $makanan = new Makanan();
        $data['result'] = $makanan->findAll();
        return view('index', $data);
    }

}
