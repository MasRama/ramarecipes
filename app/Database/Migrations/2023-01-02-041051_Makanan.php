<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Makanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_mkn'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
			'bahan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 500,
			],
			'cara_masak' => [
				'type'           => 'VARCHAR',
				'constraint'     => 500,
			],
			'desc' => [
				'type'           => 'VARCHAR',
				'constraint'     => 500,
			],
            'url_gambar' => [
				'type'           => 'VARCHAR',
				'constraint'     => 50,
			],
		]);

        $this->forge->addKey('id_mkn', TRUE);

        $this->forge->createTable('makanan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('makanan', TRUE);
    }
}
