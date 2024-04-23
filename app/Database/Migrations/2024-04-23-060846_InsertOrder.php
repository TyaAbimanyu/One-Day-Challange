<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertOrder extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'order_total'=>[
                'type'=>'INT',
                'constraint'=>255
            ],
            'total_price'=>[
                'type'=>'INT',
                'constraint'=>255
            ],
            'User_ID'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
            ],
            'Menu_ID'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
            ],
            'uu_id_o'=>[
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

        $this->forge->addPrimaryKey('order_id');
        $this->forge->addForeignKey('User_ID','user_ms','user_id');
        $this->forge->addForeignKey('Menu_ID','menu_ms','menu_id');
        $this->forge->createTable('order_trs');
    }

    public function down()
    {
        $this->forge->dropTable('order_trs');
    }
}
