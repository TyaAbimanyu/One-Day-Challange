<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertToken extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'token_id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'token'=>[
                'type'=>'VARCHAR',
                'constraint'=>32,
            ],
            'User_ID'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
            ],
            'uu_id_t'=>[
                'type'=>'VARCHAR',
                'constraint'=>36,
                'unique'=>true
            ],
            'created_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'deleted_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
        ]);

        $this->forge->addPrimaryKey('token_id');
        $this->forge->addForeignKey('User_ID','user_ms','user_id');
        $this->forge->createTable('token_trs');
    
    }

    public function down()
    {
        $this->forge->dropTable('token_trs');
    }
}
