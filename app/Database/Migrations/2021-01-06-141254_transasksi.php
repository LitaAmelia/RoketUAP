<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
			],
			'id_layanan'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
			],
			'id_pembeli'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            ],
            'berat'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'total_harga'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
			'alamat'=>[
				'type' =>'TEXT'
			],
			'ongkir'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'created_date'=>[
                'type'=>'DATETIME',
            ],
            'updated_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'updated_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]
        ]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_pembeli','user','id');
		$this->forge->addForeignKey('id_layanan','layanan','id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
?>
