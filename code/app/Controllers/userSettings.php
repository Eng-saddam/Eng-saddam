<?php

namespace App\Controllers;

use App\Models\settings_Model;

class userSettings extends BaseController
{	
	public function userSettings()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='User Settings';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/userSettings',$data);
	}

}