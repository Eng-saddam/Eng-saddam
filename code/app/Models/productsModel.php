<?php

namespace App\Models;

use CodeIgniter\Model;

class productsModel extends Model
{

    protected $table    ='products';
    protected $primarykey    ='id';
    protected $allowedFields    =['name','main_cat','sub_cat','details','image','image2','image3','image4','image5','create_date','modify_date','views','amount','count','name_ar','details_ar','website','have_size','have_weight','weight','height','depth','color','size'];


    protected $useTimestamps = true;
    protected $createdField ='create_date';
    protected $updatedField ='modify_date';
    protected $deletedField  = '';


    public function get_products_join_cats()
    {
        return $this->db->query("select t1.*,t2.name as main_cat_name,ifnull(t3.name,'none') as sub_cat_name  from products t1 left join categories t2 on t1.main_cat=t2.id left join categories t3 on t1.sub_cat=t3.id where t1.website = '".website."' and t2.website = '".website."' ;")->getResultArray();
   

    }
    public function get_product_join_cats($id)
    {
        
        return $this->db->query("select t1.*,t2.name as main_cat_name,ifnull(t3.name,'none') as sub_cat_name  from products t1 left join categories t2 on t1.main_cat=t2.id left join categories t3 on t1.sub_cat=t3.id where t1.id='$id' and  t1.website = '".website."' and t2.website = '".website."';")->getResultArray();
   

    }
    public function get_featured_product($limit)
    {
        return $this->db->query("select * from products where website = '".website."' order by views DESC limit $limit;")->getResultArray();
   

    }
    public function get_cat_product($cat,$limit)
    {
        return $this->db->query("select * from products where main_cat ='$cat' or sub_cat ='$cat' and website ='".website."' order by views DESC limit $limit;")->getResultArray();

    }

    public function product_view($id,$views)
    {
        return $this->db->query("UPDATE products SET views = $views WHERE id=$id and website ='".website."'")->getResultArray();

    }

}