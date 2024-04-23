<?php

namespace App\Database\Seeds;

use App\Database\Migrations\InsertMenu;
use App\Database\Migrations\InsertToken;
use App\Database\Migrations\InsertUser;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;
use Ramsey\Uuid\Uuid;

class InsertSeeder extends Seeder
{
    public function run()
    {
        // $this->InsertUser();
        // $this->InsertMenu();
        // $this->InsertToken();
        $this->insertOrder();
    }

    private function insertUser(){

        $uuid = Uuid::uuid4()->toString();
        $currentDateTime = date('Y-m-d H:i:s');


        $userData = [
            'username'=>'Aditya',
            'email'=>'adit.manyu@gmail.com',
            'password'=>'12345',
            'uuid_u'=>$uuid,
            'created_at'=>$currentDateTime

        ];

        $this->db->table('user_ms')->insert($userData);
    }
    private function insertMenu(){

        $uuid = Uuid::uuid4()->toString();
        $currentDateTime = date('Y-m-d H:i:s');


        $menuData = [
            'menu_name'=>'Nasi',
            'menu_price'=>25000,
            'uu_id_m'=>$uuid,
            'created_at'=>$currentDateTime

        ];

        $this->db->table('menu_ms')->insert($menuData);
    }
    private function insertToken(){

        $uuid = Uuid::uuid4()->toString();
        $currentDateTime = date('Y-m-d H:i:s');


        $tokenData = [
            'token'=>$uuid,
            'User_ID'=>1,
            'uu_id_t'=>$uuid,
            'created_at'=>$currentDateTime

        ];

        $this->db->table('token_trs')->insert($tokenData);
    }
    private function insertOrder(){

        $uuid = Uuid::uuid4()->toString();
        $currentDateTime = date('Y-m-d H:i:s');


        $orderData = [
            'order_total'=>12,
            'total_price'=>120000,
            'User_ID'=>1,
            'Menu_ID'=>1,
            'uu_id_o'=>$uuid,
            'created_at'=>$currentDateTime

        ];

        $this->db->table('order_trs')->insert($orderData);
    }
}
