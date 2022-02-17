<?php

namespace App\Controllers;


use App\Models\productsModel;
use App\Models\catsModel;

class shop extends BaseController
{	


		public function __construct()
	{
			parent::__construct();
			//helper('my_settings');
	}

	public function index()
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;



		 $productModel = new productsModel();
		 $catModel = new catsModel();
		 $data['page_title'] = $site_name;
		 $post = $productModel->get_featured_product(5);
		 $data['featured']=$post; 
		
		 $post = $catModel->get_cats_join_cats();
		 $data['cats']=$post;
		 foreach ($data['cats'] as $key=> $cat) :

			$data['cats'][$key]['products'] = $productModel->get_cat_product($cat['id'],5);
		
		 endforeach;
		return view('home',$data);

	}
	public function category($id)
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		 $productModel = new productsModel();
		 $catModel = new catsModel();
	

		
		 $post = $catModel->get_cats_join_cats();
		 $data['cats']=$post;	
		 $data['cat']['id'] =$id;

		 foreach ($data['cats'] as $key=> $cat) :
			if($cat['id'] == $id){
				$data['cat']['name'] =$cat['name'];
				$data['cat']['image'] =$cat['image'];
			}		
		
		 endforeach;
	
		$data['cat']['products'] = $productModel->get_cat_product($id,5);
		
		
		return view('category',$data);

	}

	public function Product($id)
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		 $productModel = new productsModel();
		 $catModel = new catsModel();
	

		
		 $post = $catModel->get_cats_join_cats();
		 $data['cats']=$post;	
	

		 $product = $productModel->get_product_join_cats($id);
		 $data['product'] = $product[0];

		 $views=$product[0]['views']+1;
		 $productModel->product_view($id,$views);
		return view('Product',$data);

	}


	

}
