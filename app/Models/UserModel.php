<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Entities\User;

class UserModel extends Model{
    protected $table = 'user_ms';
    protected $primaryKey = 'user_id';
    protected $useAutoIncrement = true;

    protected $returnType = User::class;
    protected $allowedFields = ['username','email','password','uuid_u','created_at'];

    //Line Wajib ada disemua Kode Model
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at';  

}