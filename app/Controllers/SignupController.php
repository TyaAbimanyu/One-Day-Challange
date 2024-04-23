<?php

namespace App\Controllers;

use App\Models\UserModel;
use Ramsey\Uuid\Uuid;

class SignupController extends BaseController{
    
    public function register(){
        $data = json_decode(file_get_contents('php://input'), true); 
        
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];

        $userModel = new UserModel();

        $uuid = Uuid::uuid4()->toString();

        $creartAt = date('Y-m-d H:i:s');

        $user = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'uuid_u' => $uuid,
            'created_at' => $creartAt,
        ];

        $inserted = $userModel->insert($user);

        if ($inserted) {
            $userId = $userModel->insertID();
            
            return $this->response->setJSON([
                "status" => "success",
                "message" => "Register is Success"
            ]);
        } else {
            return $this->response->setStatusCode(500)->setJSON([
                "status" => "error",
                "message" => "Failed to register user"
            ]);
        }
    }
}