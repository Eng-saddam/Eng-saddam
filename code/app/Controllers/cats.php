<?php

namespace App\Controllers;


use App\Models\catsModel;

class cats extends BaseController
{	



	public function index()
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		$modle = new catsModel();
		//$post = $modle->find();
		$data['page_title'] ='All categories';
		$post = $modle->get_cats_join_cats();
		//print_r($post);
		$data['posts']=$post;

		
		return view('admin/categories',$data);
	}
	


	public function addcat()
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		helper(['form']);
		$data['page_title'] = 'Add category';
		$all_cat = new catsModel();



		/* if request = Post */
		if($this->request->getmethod()=='post'){
			/* Rules */
			$rules =[
				
				'image'=>[
				'rules'=>'uploaded[image]|max_size[image,2048]|is_image[image]',
				'label' => 'Category Image'],
				'name'=>['rules'=>'required','label'=>'category name'],		
				'name_ar'=>['rules'=>'required','label'=>'category name']		
				];

				/* Image set */ 
				$_POST['image'] =$_FILES['image']['name'];
				/* if valid */
				if($this->validate($rules)){
					/* edit page title */
					/* check image if vaild and upload it */
					$file=$this->request->getfile('image');
					if($file->isvalid() && !$file->hasmoved()){
						$filename="cat".rand(10000,10000000000000000).".". $file->getextension();
						$file->move("./uploads/images/",$filename);
						$_POST['image']= "/uploads/images/".$filename;
						/* save data into db */
						$modle = new catsModel();
						$_POST['website'] = website;
						$modle->save($_POST);			
						/* send ui varibles */ 
					$data['page_title'] = 'Success category Add';
					$data['image'] = "/uploads/images/".$filename;
					$data['SuccessM'] = 'Done , category Added successfully.';
					$data['main_cat']= $_POST['main_cat'];

					

					}
						
					
				}else{				
					$data['page_title'] ='category added fail';
					$data['main_cat']= $_POST['main_cat'];
					$data['validation'] = $this->validator;	
								}
	
		}else{
			$data['main_cat'] = 0;			
		}
		$post = $all_cat->get_main_cats();
		$data['posts']=$post;

		return view('admin/Addcat',$data);		
	}

	public function delete($id)
	{	
		helper(['form']);
		$model = new catsModel();	
	
		$post = $model->delete(['id' => $id]);
		$session = \Config\Services::session();
		$session->setFlashdata('SuccessM', 'Done , category deleted successfully.');

		return redirect()->to('/Admin/categories');

	}
	public function getsubcat($id)
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		helper(['form']);
		$model = new catsModel();	

		$post = $model->get_sub_cats($id);
		$data['posts']=$post;
		return json_encode($data['posts']);

	}

	public function edit($id)
	{	
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
			helper(['form']);

	
			if($this->request->getmethod()=='post'){
				$rules =[
				
					'image'=>[
					'rules'=>'uploaded[image]|max_size[image,2048]|is_image[image]',
					'label' => 'Category Image'],
					'name'=>['rules'=>'required','label'=>'category name'],		
					'name_ar'=>['rules'=>'required','label'=>'category name']		
					];
					if(!empty($_FILES['image']['name'])){
					$_POST['image'] =$_FILES['image']['name'];
					}
					if($this->validate($rules)){
						$data = ['page_title' => 'Success edit the category'];
						$file=$this->request->getfile('image');
						if($file->isvalid() && !$file->hasmoved()){
							$filename="cat".rand(10000,10000000000000000).".". $file->getextension();
							$file->move("./uploads/images/",$filename);
						//	echo $_POST['image'];
							$_POST['image']= "/uploads/images/".$filename;
				
						}
						$modle = new catsModel();
						$_POST['website'] = website;

						$modle->update($id,$_POST);			
						$data['SuccessM'] = 'Done , category updated successfully.';

							
						
					}else{
						$data['page_title'] = 'category update fail';
						$data['validation'] = $this->validator;	
									}
		
			}
			$modle = new catsModel();
			$post = $modle->find($id);
			if($post){
				$data['id']= $post['id'];
				$data['name']= $post['name'];
				$data['name_ar']= $post['name_ar'];
				$data['main_cat']= $post['main_cat'];
				$data['image']= $post['image'];
				
			}else{
				$data['id']= 0;
				$data['name']= $post['name'];
				$data['main_cat']= '0';
				$data['image']= 'asset/images/logo.png';

				$data = ['name' => 'Category not found','body'=> 'Category not found','image'=> 'asset/images/logo.png','id'=> 0];
			}
			$modle2 = new catsModel();
			$postss = $modle2->find();
			$data['posts']=$postss;
			return view('admin/EditCat',$data);
		
	}
	

}
