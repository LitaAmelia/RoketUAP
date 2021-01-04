<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Layanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'estimasi' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'gambar' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'deskripsi' => [
				'type' => 'TEXT',
			],
			'created_by' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_date' => [
				'type' => 'DATETIME',
			],
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated_date' => [
				'type' => 'DATETIME',
				'null' => TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('layanan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
