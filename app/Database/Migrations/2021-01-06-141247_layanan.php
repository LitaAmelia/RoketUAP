<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Layanan extends Migration
{    
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'nama'=>[
                'type'=>'TEXT',
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'deskripsi'=>[
                'type'=>'TEXT',
            ],
            'estimasi'=>[
				'type'=>'TEXT'
			],
            'gambar'=>[
                'type'=>'TEXT',
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
        $this->forge->createTable('layanan');
    }

    public function down()
    {
        $this->forge->dropTable('layanan');
    }
}
?>