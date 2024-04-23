<?php

namespace App\Entities;
use Codeigniter\Entity\Entity;

class Order extends Entity{
    protected $attributes = [
        'order_id'=>null,
        'order_total'=>0,
        'total_price'=>0,
        'User_ID'=>null,
        'Menu_ID'=>null,
        'uu_id_o'=>null,
        'created_at'=>null,
        'updated_at'=>null,
        'deleted_at'=>null
    ];
}