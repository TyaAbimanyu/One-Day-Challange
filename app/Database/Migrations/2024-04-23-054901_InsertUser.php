<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'uuid_u'=>[
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

        $this->forge->addPrimaryKey('user_id');
        $this->forge->createTable('user_ms');
    }

    public function down()
    {
        $this->forge->dropTable('user_ms');
    }
}
