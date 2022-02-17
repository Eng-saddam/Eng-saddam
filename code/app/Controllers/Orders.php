<?php

namespace App\Controllers;

use App\Models\settings_Model;

class orders extends BaseController
{	
	public function today_order()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Today';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/todayOrders',$data);
	}
	public function all_order()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Today';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/allOrders',$data);
	}
  public function delivery_order()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Today';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/deliveryOrders',$data);
	}
  public function canceled_order()
	{
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;		
		$data['page_title'] ='Today';
		$data['settings'] = $this->settings;
		$settings_modle = new settings_Model();
		$data['currency'] = $settings_modle->get_all_currency();
        
		//print_r($data);
		return view('admin/canceledOrders',$data);
	}

}