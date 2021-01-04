<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
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
			'id_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
			],
			'tanggal_pembayaran' => [
				'type' => 'DATETIME'
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
		$this->forge->addForeignKey('id_transaksi', 'transaksi', 'id');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
