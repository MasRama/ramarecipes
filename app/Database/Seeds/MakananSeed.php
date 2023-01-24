<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Makanan;

class MakananSeed extends Seeder
{
    public function run()
    {
        $makanan = new Makanan();
        $makananSeed = [
			[
				'nama'  => 'Semur Telur Ceplok',

				'bahan' => 'Minyak untuk menggoreng
                4 butir telur ayam
                4 sendok makan minyak goreng
                5 lembar daun jeruk
                3 lembar daun salam
                500 gram santan dari 1 butir kelapa parut
                50 gram daun melinjo, pilih yang muda
                4 sendok makan Kecap Bango',

                'cara_masak' => 'Panaskan minyak secukupnya buat 4 telur mata sapi, sisihkan.
                Panaskan minyak goreng, tumis bumbu yang dihaluskan, daun jeruk, dan daun salam hingga harum. Tuangi santan, masak hingga mendidih.
                Masukkan telor ceplok dan daun melinjo. Kecilkan api, masak sebentar.
                Tambahkan Kecap Bango, teruskan memasak hingga daun melinjo matang. Angkat, sajikan segera.',

                'desc' => 'Resep kaki lima dengan rasa bintang lima 
                Semur telur ceplok dengan daun melinjo.',

                'url_gambar' => 'images/telur.jpg',
			],
            [
				'nama'  => 'Nasi Goreng Ikan Asin',

				'bahan' => '600 g nasi merah
                100 g ikan asin jambal roti, potong dadu 1 cm
                4 siung bawang putih, cincang halus
                2 buah cabai merah, iris tipis, buang bijinya
                2 butir telur ayam, kocok lepas
                2 sdm Bango Kecap Manis
                1 sdm Royco Kaldu Sapi
                1 batang daun bawang, iris tipis
                Minyak, untuk menggoreng',

                'cara_masak' => 'Panaskan minyak, goreng ikan asin hingga matang dan garing. Angkat dan tiriskan.
                Panaskan 3 sdm minyak di dalam wajan di atas api sedang. Tumis bawang putih dan cabai hingga harum.
                Masukkan telur, masak orak-arik, nasi dan ikan asin, aduk rata. Tambahkan Bango Kecap Manis, kecap, Royco Kaldu Sapi, aduk hingga rata. Taburi dengan daun bawang, aduk rata. Angkat, sajikan hangat.',

                'desc' => 'Sajian Lezat dan Simpel  
                Praktis dan ekonomis Nasi goreng ikan asin',

                'url_gambar' => 'images/nasgor.jpg',
			],
            [
				'nama'  => 'Ayam Tauco',

				'bahan' => '1 ekor ayam kampung, potong
                2 siung bawang putih, iris halus
                2 sdm Tauco Asin
                150 ml Kecap Manis Bango
                1 sdm garam
                1/2 sdt lada putih bubuk
                1 liter air
                minyak goreng',

                'cara_masak' => 'Tumis bawang putih sampai harum, masukkan ayam, aduk sampai berubah warna. Tambahkan Kecap Manis Bango dan tauco. 
                Masukkan air, garam, lada putih bubuk. Masak sampai ayam empuk dan air menyusut.
                Sajikan hangat dengan nasi putih',

                'desc' => 'Yummy, resep enak dan mudah 
                 Ayam masak tauco',

                'url_gambar' => 'images/ayam.jpg',
			],
		];

		foreach($makananSeed as $data){
			// insert semua data ke tabel
			$makanan->insert($data, false);
		}
    }
}
