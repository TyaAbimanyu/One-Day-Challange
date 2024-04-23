<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class Token extends Entity{
    protected $attributes=[
        'token_id' =>null,
        'token'=>null,
        'User_ID'=>null,
        'uu_id_t'=>null,
        'created_at'=>null,
        'updated_at'=>null,
        'deleted_at'=>null

    ];
}