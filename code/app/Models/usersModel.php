<?php

namespace App\Models;

use CodeIgniter\Model;

class usersModel extends Model
{

    protected $table    ='users';
    protected $primarykey    ='id';
    protected $allowedFields    =['first_name','last_name','phone','email','password','pic','type','website'];

}