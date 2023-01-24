<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_usr'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 500,
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => 500,
			]
		]);

        $this->forge->addKey('id_usr', TRUE);

        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user', TRUE);
    }
}
