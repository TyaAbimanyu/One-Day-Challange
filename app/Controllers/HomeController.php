<?php

namespace App\Controllers;
use App\Models\MenuModel;
use CodeIgniter\API\ResponseTrait;
use Ramsey\Uuid\Uuid;

class HomeController extends BaseController{
    use ResponseTrait;

    public function uploadMenu (){
        $menuModel = new MenuModel();

        // Tentukan path untuk menyimpan file
        $path = './uploads';

        // Periksa apakah direktori sudah ada, jika tidak, buat direktori baru
        if (!is_dir($path)) {
            mkdir($path, 0775, true);
        }
        
        $imageFile = $this->request->getFile('file');
        $menuName = $this->request->getPost('menuName');
        $menuPrice = $this->request->getPost('menuPrice');

        $uuid = Uuid::uuid4()->toString();
        
        $createdAt = date('Y-m-d H:i:s');

        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $newName = $imageFile->getRandomName();
            $imageFile->move($path, $newName);

            $menu = [
                'image_name' => $newName,
                'menu_name' => $menuName,
                'menu_price' => $menuPrice,
                'uu_id_m' => $uuid,
                'created_at' => $createdAt
            ];

            $inserted = $menuModel->insert($menu);

            if ($inserted === false) {
                return $this->fail('Failed to upload Menu');
            }

            return $this->respond(['message' => 'Menu Uploaded Successfully']);
        } else {
            return $this->fail('Failed to upload image');
        }
    }
}
