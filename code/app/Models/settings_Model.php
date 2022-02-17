<?php

namespace App\Models;

use CodeIgniter\Model;

class settings_Model extends Model
{

    protected $table    ='settings';
    protected $primarykey    ='id';
    protected $allowedFields    =['group','tag','value','value_2','website'];
    
    public function get_settings()
    {

        $tags = $this->db->query("select tag,value from settings Where `group` = 'setting' and `website` = '".website."';")->getResultArray();
        $tags = setting_array($tags);
        return $tags;


    }
    public function get_dictionary()
    {
        $lang = 2;
        if($lang==1){
            // if language = eng 1; 
            $parmeter = 'tag as value';
        }else{
            $parmeter = 'value';
       
        }
        $dictionary= $this->db->query("SELECT id,$parmeter FROM settings where `group` = 'dictionary' AND (`website` ='default' or `website` ='".website."');")->getResultArray();
        $dictionary = dictionary_array($dictionary);

        return $dictionary;

    }
    public function get_all_currency()
    {
        return $this->db->query("select * from currency;")->getResultArray();
   

    }

}