<?php

namespace App\Controllers;

use App\Models\settings_Model;

class myClients extends BaseController
{	
	public function myClients()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='My Clients';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/myClients',$data);
	}

}