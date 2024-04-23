<?php

namespace App\Entities;
use CodeIgniter\Entity\Entity;

class User extends Entity{
     protected $attributes = [
        'user_id' => null,
        'username' => '',
        'email' => '',
        'password'=> '',
        'uuid_u'=>null,
        'created_at'=>null,
        'updated_at'=>null,
        'deleted_at'=>null
     ];
}