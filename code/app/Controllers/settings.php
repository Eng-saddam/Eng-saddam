<?php

namespace App\Controllers;


use App\Models\catsModel;
// use App\Models\settings_Model;
use App\Models\settings_Model;

class settings extends BaseController
{	



	public function general()
	{	
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Settings';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
		
		//print_r($data);


		return view('admin/general',$data);
	}

	public function socialMedia()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Social Media Settings';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		return view('admin/socialMedia',$data);
	}
	

	public function product_settings()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='The Settings for products';
		$data['settings'] = $this->settings;
        
		return view('admin/product_settings',$data);
	}


	public function other_options()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='The Settings for products';
		$data['settings'] = $this->settings;
		$cat_modle = new catsModel();	
		$main_cats = $cat_modle->get_main_cats();
		$data['main_cats']=$main_cats;
        
		return view('admin/otherOptions',$data);
	}
	


	public function add_new_option()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='The Settings for products';
		$data['settings'] = $this->settings;
		$cat_modle = new catsModel();	
		$main_cats = $cat_modle->get_main_cats();
		$data['main_cats']=$main_cats;
        
		return view('admin/addnewoption',$data);
	}
	

}
