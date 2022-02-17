<?php namespace App\Libraries;

class cats{
    public function cat($post){
        
        return view('componants\cat',['parameter'=>$post]);
    }
    public function cat_dropdown($post){
        
        return view('componants\cat_dropdown',['parameter'=>$post]);
    }
}