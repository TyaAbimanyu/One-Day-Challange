<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Menu extends Entity{
    protected $attributes = [
        
        'menu_id'=>null,
        'menu_name'=>'',
        'menu_price'=>'',
        'uu_id_m'=>null,
        'created_at'=>null,
        'updated_at'=>null,
        'deleted_at'=>null
        
    ];
}