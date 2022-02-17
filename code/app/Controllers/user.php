<?php

namespace App\Controllers;


use App\Models\usersModel;
use App\Models\productsModel;
use App\Models\catsModel;

class user extends BaseController
{


	public function login(){

		helper(['form']);
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		
		$data['alert'] = '';


		$productModel = new productsModel();
		
		$catModel = new catsModel();
		
		
	   
		$post = $catModel->get_cats_join_cats();
		$data['cats']=$post;
		foreach ($data['cats'] as $key=> $cat) :

		   $data['cats'][$key]['products'] = $productModel->get_cat_product($cat['id'],5);
	   
		endforeach;



	    if($this->request->getmethod()=='post'){

	
			/* if submit for login */

			$rules =[

				'email'=>['rules'=>'required|valid_email'],
				'password'=>['rules'=>'required|validateUser[email,password]']

				];

			$errors = [
				'password' => ['validateUser' => 'Email or password don\'t match']
				];

					if($this->validate($rules,$errors)){
						$data['page_title']= 'Sussess Login';
			
	
							$modle = new usersModel();
							$user =$modle->where('email',$this->request->getvar('email'))->first();
							$this->setUserMethod($user);
							if($user['type'] =='1'){ /* if admin */
								return redirect()->to('/Admin/products');	
							}else{
								return redirect()->to('index');	

							}
						
						
						}else{
						$data['page_title']= 'Error in Login';

						$data['validation'] = $this->validator;				
						
					}

		
		return view('componants/shop/login',$data);


	 }else{

		/* if requist = get */

	 $data['page_title'] = 'Portal';
	

	 return view('componants/shop/login',$data);
     }
	}

	public function signup(){
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		helper(['form']);

		$data['alert'] = '';
	

		$productModel = new productsModel();
		
		$catModel = new catsModel();
		
		
	   
		$post = $catModel->get_cats_join_cats();
		$data['cats']=$post;
		foreach ($data['cats'] as $key=> $cat) :

		   $data['cats'][$key]['products'] = $productModel->get_cat_product($cat['id'],5);
	   
		endforeach;



	    if($this->request->getmethod()=='post'){

	
			/* if submit for signin */

			$rules =[
			     	
				'pic'=>[
				'rules'=>'uploaded[pic]|max_size[pic,2048]|is_image[pic]',
				'label' => 'Personal Image'],
				'first_name'=>['rules'=>'required','label'=>'first name'],
				'last_name'=>['rules'=>'required','label'=>'last name'],
				'email'=>['rules'=>'required|valid_email'],
				'phone'=>['rules'=>'required|min_length[9]'],
				'password'=>['rules'=>'required|min_length[8]'],
				're_password'=>['rules'=>'required|matches[password]','label'=>'repeat password']
				];
					if($this->validate($rules)){
						$data['page_title']= 'Sussess sign up';
						$data['alert'] = 'Success Sign up ,you can sign in now .';
	
						$file=$this->request->getfile('pic');
						if($file->isvalid() && !$file->hasmoved()){
							$filename="pic".rand(10000,10000000000000000).".". $file->getextension();
							$file->move("./uploads/images/",$filename);
							$_POST['pic']= "/uploads/images/".$filename;
							$_POST['type'] = 0;
							$modle = new usersModel();
							$modle->save($_POST);
							return redirect()->to('signup');


				   }
   
			   }else{
				   $data['page_title']= 'Error in sign up';
				   $data['validation'] = $this->validator;				
				   
			   }


	 }else{

		/* if requist = get */

	 $data['page_title'] = 'Portal';


	 return view('componants/shop/signup',$data);
     }
	}

	private function setUserMethod($user){
		$data = [
			'id'=>$user['id'],
			'first_name'=>$user['first_name'],
			'last_name'=>$user['last_name'],
			'phone'=>$user['phone'],
			'email'=>$user['email'],
			'password'=>$user['password'],
			'pic'=>$user['pic'],
			'islogin'=> true,
			'type'=> $user['type']
		];
		
		session()->set($data);
		return true;
	}




	public function logout(){
		session()->destroy();
		return redirect()->to('login');
	}
	

}
