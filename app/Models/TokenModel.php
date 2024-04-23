<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Token;

class TokenModel extends Model{
    protected $table = 'token_trs';
    protected $primaryKey = 'token_id';
    protected $useAutoIncrement = true;

    protected $returnType = Token::class;
    protected $allowedFields = ['token', 'user_ID','uu_id_t','created_at'];

    //Line Wajib ada disemua Kode Model
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at';  

}