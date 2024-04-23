<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Order;

class UserModel extends Model{
    protected $table = 'order_trs';
    protected $primaryKey = 'order_id';
    protected $useAutoIncrement = true;

    protected $returnType = Order::class;
    protected $allowedFields = ['order_total', 'total_price','Menu_ID'];

    //Line Wajib ada disemua Kode Model
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at';  

}