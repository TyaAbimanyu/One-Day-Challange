<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Menu;

class MenuModel extends Model{
    protected $table = 'menu_ms';
    protected $primaryKey = 'menu_id';
    protected $useAutoIncrement = true;

    protected $returnType = Menu::class;
    protected $allowedFields = ['menu_name', 'menu_price'];

    //Line Wajib ada disemua Kode Model
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at';  

}