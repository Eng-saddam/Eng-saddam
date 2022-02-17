<?php namespace App\Libraries;

class products{
    public function product($post){
        
        return view('componants\product',['parameter'=>$post]);
    }
 
}