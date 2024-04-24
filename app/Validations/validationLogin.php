<?php

namespace App\Validations;
use App\Models\UserModel;

class validationLogin{
    public function validatePassword($password, $fields, $data, string &$error = null){
        $username = $data['username'];
    
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if($user->password && $user->password === $password){
            return true;
        }else{
            $error = 'username or password is invalid';
            return false;
        }
    }

    public function validateUsername($username, $fields, $data, string &$error = null){
        $username = $data['username'];
    
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if(!$user){
            $error = 'username or password is invalid';
            return false;
        }

        return true;
    }
}