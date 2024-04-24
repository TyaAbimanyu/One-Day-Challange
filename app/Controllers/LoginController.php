<?php

namespace App\Controllers;

use App\Models\TokenModel;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use Ramsey\Uuid\Uuid;

class LoginController extends BaseController{
    use ResponseTrait;
    public function Login(){
        // $data = json_decode(file_get_contents('php://input'), true); 
        $validate = \Config\Services::validation();
        $data = $this->request->getPost();

        $validate->setRuleGroup('validationLogin');

        if($validate->run($data)===false){
            return $this->fail(['message'=>$validate->getErrors()]);
        }

        $username = $data['username'];
        $password = $data['password'];

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if($user && $user->password === $password){
            $user_id = $user->user_id;

            $uuid = Uuid::uuid4()->toString();
            $token = Uuid::uuid4()->toString();

            $date = date('Y-m-d H:i:s');

            $tokenModel = new TokenModel();

            $tokenData = [
                'token' => $token,
                'user_ID' => $user_id,
                'uu_id_t' => $uuid,
                'created_at' => $date
            ];

            $tokenModel->insert($tokenData);
            $tokenId = $tokenModel->getInsertID();
            return $this->respond(['token_id' => $tokenId, 'token' => $token,'create_at'=>$date,'message' => 'Token generated successfully']);
        }else{
            return $this->fail(['Invalid username or Password']);
        }        
    }
}