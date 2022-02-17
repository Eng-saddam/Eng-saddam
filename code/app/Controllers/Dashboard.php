<?php

namespace App\Controllers;

use App\Models\settings_Model;

class dashboard extends BaseController
{	
	public function index()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Dashboard';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/dashboard',$data);
	}

}