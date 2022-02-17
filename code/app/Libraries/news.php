<?php namespace App\Libraries;

class news{
    public function news_item($post){
        
        return view('componants\news_card',['parameter'=>$post]);
    }
}