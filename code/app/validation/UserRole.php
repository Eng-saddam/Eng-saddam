<?php
namespace App\validation;
use App\Models\usersModel;

class UserRole
{
    public function validateUser(string $str , string $fields,array $data){

        $model = new usersModel();
        $user = $model->where('email', $data['email'])
        ->first();

        if(!$user)
            return false;
        
           //return true;
           // return  password_verify($data['password'] , $user['password']);
            
           if($data['password'] == $user['password']){
            return true;

           }else{
           
            return false;

            }
        
    }
}