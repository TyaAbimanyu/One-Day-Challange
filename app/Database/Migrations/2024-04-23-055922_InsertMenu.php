<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'image_name'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'menu_name'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'menu_price'=>[
                'type'=>'INT',
                'constraint'=>255
            ],
            'uu_id_m'=>[
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

        $this->forge->addPrimaryKey('menu_id');
        $this->forge->createTable('menu_ms');
    
    }

    public function down()
    {
        $this->forge->dropTable('menu_ms');
        
    }
}
