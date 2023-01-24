<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Makanan;
use CodeIgniter\Files\File;


class ResepController extends BaseController
{
    public function index_tambah()
    {
        return view('resep/resep-tambah');
    }

    public function index()
    {
        $makanan = new Makanan();
        $data['result'] = $makanan->findAll();
        return view('resep/resep-index', $data);
    }

    public function detail($segment)
    {
        $makanan = new Makanan();
        $data['result'] = $makanan->find($segment);
        #echo var_dump($data);
        return view('resep/resep-detail', $data);
    }

    public function delete($segment)
    {
        $makanan = new Makanan();
        $makanan->delete($segment);
        return redirect()->to('/resep');
    }

    public function tambah_data()
    
    {
        $session = session();
        if (!$this->validate([
			'gambar' => [
				'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,5120]',
				'errors' => [
					'uploaded' => 'Tidak ada Gambar yang dipilih',
					'mime_in' => 'Gambar Extention Harus Berupa jpg,jpeg,gif, atau png',
					'max_size' => 'Ukuran Gambar Maksimal 5 MB'
				]
            ],
            'nama' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Nama Minimal 5 Huruf']
            ],
            'bahan' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Bahan Minimal 5 Huruf']
            ],
            'masak' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Cara Memasak Minimal 5 Huruf']
            ],
            'desc' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Deskripsi Minimal 5 Huruf']
            ]
		])) {
            $session->setFlashdata('errors', $this->validator->getErrors());
			return redirect()->back();
		}


        $makanan = new Makanan();
        $dataGambar = $this->request->getFile('gambar');
        $fileName = $dataGambar->getRandomName();

        $data = [
            'nama'  => $this->request->getPost('nama'),

			'bahan' => $this->request->getPost('bahan'),

            'cara_masak' => $this->request->getPost('masak'),

            'desc' => $this->request->getPost('desc'),

            'url_gambar' => "images/" . $fileName,
        ];

        $dataGambar->move('images/', $fileName);
        $makanan->insert($data, false);

        return redirect()->to('/resep');
    }

    public function index_data($segment)
    {
        $makanan = new Makanan();
        $data['result'] = $makanan->find($segment);

        return view('resep/resep-edit', $data);
    }

    public function save_data($segment)
    {
        $session = session();

        if (!$this->validate([
			'gambar' => [
				'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,5120]',
				'errors' => [
					'uploaded' => 'Tidak ada Gambar yang dipilih',
					'mime_in' => 'Gambar Extention Harus Berupa jpg,jpeg,gif, atau png',
					'max_size' => 'Ukuran Gambar Maksimal 5 MB'
				]
            ],
            'nama' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Nama Minimal 5 Huruf']
            ],
            'bahan' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Bahan Minimal 5 Huruf']
            ],
            'masak' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Cara Memasak Minimal 5 Huruf']
            ],
            'desc' => [
                'rules' => 'min_length[5]',
                'errors' => ['min_length' => 'Form Deskripsi Minimal 5 Huruf']
            ]
		])) {
            $session->setFlashdata('errors', $this->validator->getErrors());
			return redirect()->back();
		}

        $makanan = new Makanan();
        $dataGambar = $this->request->getFile('gambar');
        $fileName = $dataGambar->getRandomName();

        $data = [
            'nama'  => $this->request->getPost('nama'),

				'bahan' => $this->request->getPost('bahan'),

                'cara_masak' => $this->request->getPost('masak'),

                'desc' => $this->request->getPost('desc'),

                'url_gambar' => "images/" . $fileName,
        ];

        $dataGambar->move('images/', $fileName);
        $makanan->update($segment, $data);

        return redirect()->to('/resep');
    }
}
