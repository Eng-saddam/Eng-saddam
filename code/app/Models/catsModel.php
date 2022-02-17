<?php

namespace App\Models;

use CodeIgniter\Model;

class catsModel extends Model
{

    protected $table    ='categories';
    protected $primarykey    ='id';
    protected $allowedFields    =['name','name_ar','main_cat','image','website'];

    public function get_cats_join_cats()
    {
        return $this->db->query("select t1.*, ifnull(t2.name, 'This is a main category') as main_cat_name from categories t1 left join categories t2 on t1.main_cat=t2.id where t1.website ='".website."' order by case when t1.main_cat = 0 then  t1.id else t1.main_cat  end, t1.main_cat ;")->getResultArray();
        

    }
    public function get_main_cats()
    {
        return $this->db->query("select * from categories Where main_cat = 0 and `website` = '".website."';")->getResultArray();
   

    }
    public function get_sub_cats($id)
    {
        return $this->db->query("select * from categories Where main_cat = $id and  `website` = '".website."';")->getResultArray();
   

    }

}