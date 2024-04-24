<?php

namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Menu;

class MenuModel extends Model{
    protected $table = 'menu_ms';
    protected $primaryKey = 'menu_id';
    protected $useAutoIncrement = true;

    protected $returnType = Menu::class;
    protected $allowedFields = ['image_name','menu_name', 'menu_price','uu_id_m','created_at','updated_at'];

    //Line Wajib ada disemua Kode Model
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at'; 
    protected $deletedField = 'deleted_at';  

}