<?php

namespace App\Controllers;

use App\Models\settings_Model;

class administrativeUsers extends BaseController
{	
	public function administrativeUsers()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Administrative Users';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/administrativeUsers',$data);
	}

}