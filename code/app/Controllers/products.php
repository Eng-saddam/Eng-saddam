<?php

namespace App\Controllers;


use App\Models\productsModel;
use App\Models\catsModel;

class products extends BaseController
{	



	public function Products()
	{	



		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		$data['page_title'] ='All Products';
		$modle = new productsModel();	
		$post = $modle->get_products_join_cats();
		$data['posts']=$post;

		return view('admin/Products',$data);

	}
	


	public function addproduct()
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		helper(['form']);
		$data['page_title'] = 'Add product';
		$data['settings'] = $this->settings;
		$cat_modle = new catsModel();	
		$main_cats = $cat_modle->get_main_cats();
		$data['main_cats']=$main_cats;
				/* if request = Post */
		 if($this->request->getmethod()=='post'){
			
		$rules =[				
			'image'=>[
			'rules'=>'uploaded[image]|max_size[image,1024]|is_image[image]',
			'label' => 'Product Image'],	
			'name'=>['rules'=>'required','label'=>'Product name'],		
			'name_ar'=>['rules'=>'required','label'=>'Product name_ar'],		
			'main_cat'=>['rules'=>'required','label'=>'Product Main Category'],		
			'sub_cat'=>['rules'=>'required','label'=>'Product Sub Category'],		
			'details'=>['rules'=>'required','label'=>'Product Details'],		
			'details_ar'=>['rules'=>'required','label'=>'Product details_ar'],		
			'amount'=>['rules'=>'required','label'=>'Product amount'],		
			];

			if($product_size == '1'){
				$rules = array_merge($rules,['height'=>['rules'=>'numeric','label'=>'Product height']]);	
			}
			if($product_color == '1'){
				$rules = array_merge($rules,['color'=>['rules'=>'trim','label'=>'Product color']]);	
			}
			
			if($product_weight == '1'){
				$rules = array_merge($rules,['weight'=>['rules'=>'numeric','label'=>'Product weight']]);
			}
			
			if($product_depth == '1'){
				$rules = array_merge($rules,['depth'=>['rules'=>'numeric','label'=>'Product depth']]);	
			}
			
			if($product_height == '1'){
				$rules = array_merge($rules,['height'=>['rules'=>'numeric','label'=>'Product height']]);	
			}
			
			if($product_width == '1'){
				$rules = array_merge($rules,['width'=>['rules'=>'numeric','label'=>'Product width']]);	
			}
			
			if($product_count == '1'){
				$rules = array_merge($rules,['count'=>['rules'=>'numeric','label'=>'Product count	']]);	
			}
			
			if($product_brand == '1'){
				$rules = array_merge($rules,array('brand'=>['rules'=>'trim','label'=>'Product brand']));	
			}
			
			if($product_image2 == '1'){
				$rules = array_merge($rules,['image2'=>['rules'=>'uploaded[image]|max_size[image,1024]|is_image[image]','label' => 'Product Image 2']]);	
				$_POST['image2'] =$_FILES['image2']['name'];
				$file2=$this->request->getfile('image2');
			}
						
			if($product_image3 == '1'){
				$rules = array_merge($rules,['image3'=>['rules'=>'uploaded[image]|max_size[image,1024]|is_image[image]','label' => 'Product Image 3']]);	
				$_POST['image3'] =$_FILES['image3']['name'];
				$file3=$this->request->getfile('image3');
			}
						
			if($product_image4 == '1'){
				$rules = array_merge($rules,['image4'=>['rules'=>'uploaded[image]|max_size[image,1024]|is_image[image]','label' => 'Product Image 4']]);	
				$_POST['image4'] =$_FILES['image4']['name'];
				$file4=$this->request->getfile('image4');
			}
						
			if($product_image5 == '1'){
				$rules = array_merge($rules,['image5'=>['rules'=>'uploaded[image]|max_size[image,1024]|is_image[image]','label' => 'Product Image 5']]);	
				$_POST['image5'] =$_FILES['image5']['name'];
				$file5=$this->request->getfile('image5');
			}
			/* Image set */ 
				$_POST['image'] =$_FILES['image']['name'];
	
				/* if valid */
				if($this->validate($rules)){
					/* edit page title */
					/* check image if vaild and upload it */
					$file=$this->request->getfile('image');
	
					if($file->isvalid() && !$file->hasmoved()){
						$filename="product_".rand(10000,10000000000000000).".". $file->getextension();
						$file->move("./uploads/images/",$filename);
						$_POST['image']= "/uploads/images/".$filename;
						if($product_image2 == '1' && $file2->isvalid() && !$file2->hasmoved()){
							$filename2="product_".rand(10000,10000000000000000).".". $file2->getextension();
							$file2->move("./uploads/images/",$filename2);
							$_POST['image2']= "/uploads/images/".$filename2;
						}
						if($product_image3 == '1' && $file3->isvalid() && !$file3->hasmoved()){
							$filename3="product_".rand(10000,10000000000000000).".". $file3->getextension();
							$file3->move("./uploads/images/",$filename3);
							$_POST['image3']= "/uploads/images/".$filename3;
						}
						if($product_image4 == '1' && $file4->isvalid() && !$file4->hasmoved()){
							$filename4="product_".rand(10000,10000000000000000).".". $file4->getextension();
							$file4->move("./uploads/images/",$filename4);
							$_POST['image4']= "/uploads/images/".$filename4;
						}
						if($product_image5 == '1' && $file5->isvalid() && !$file5->hasmoved()){
							$filename5="product_".rand(10000,10000000000000000).".". $file5->getextension();
							$file5->move("./uploads/images/",$filename5);
							$_POST['image5']= "/uploads/images/".$filename5;
						}


						
						$_POST['views'] = 0;
						/* save data into db */
						$modle = new productsModel();
						$_POST['website'] = website;

						$modle->save($_POST);			
						/* send ui varibles */ 
					$data['page_title'] = 'Success Product Add';
					$data['image'] = "/uploads/images/".$filename;
					$data['SuccessM'] = 'Done , product Added successfully.';
					$data['main_cat']= $_POST['main_cat'];
					$data['forword']= '1';

					

					}
						
					
				}else{	
								
					$data['page_title'] ='Product added fail';
					$data['main_cat']= $_POST['main_cat'];
					$data['validation'] = $this->validator;	
								}
	
		}else{
			$data['main_cat'] = 0;			
		}
	


			return view('admin/AddProduct',$data);		

	


	}

	public function delete($id)
	{	
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		helper(['form']);
		$model = new productsModel();	
	
		$post = $model->delete(['id' => $id]);
		$session = \Config\Services::session();
		$session->setFlashdata('SuccessM', 'Done , Product deleted successfully.');

		return redirect()->to('/Admin/products');

	}

	public function edit($id)
	{	
		
		extract($this->settings);
		$data['dictionary'] = $this->dictionary;
		$data['settings'] = $this->settings;
			helper(['form']);

	
			if($this->request->getmethod()=='post'){

				$rules =[
					'name'=>['rules'=>'required','label'=>'Product name'],		
					'name_ar'=>['rules'=>'required','label'=>'Product name_ar'],		
					'main_cat'=>['rules'=>'required','label'=>'Product Main Category'],		
					'sub_cat'=>['rules'=>'required','label'=>'Product Sub Category'],		
					'details'=>['rules'=>'required','label'=>'Product Details'],		
					'details_ar'=>['rules'=>'required','label'=>'Product details_ar'],		
					'amount'=>['rules'=>'required','label'=>'Product amount'],		
					];
		
					if($product_size == '1'){
						$rules = array_merge($rules,['height'=>['rules'=>'numeric','label'=>'Product height']]);	
					}
					if($product_color == '1'){
						$rules = array_merge($rules,['color'=>['rules'=>'trim','label'=>'Product color']]);	
					}
					
					if($product_weight == '1'){
						$rules = array_merge($rules,['weight'=>['rules'=>'numeric','label'=>'Product weight']]);
					}
					
					if($product_depth == '1'){
						$rules = array_merge($rules,['depth'=>['rules'=>'numeric','label'=>'Product depth']]);	
					}
					
					if($product_height == '1'){
						$rules = array_merge($rules,['height'=>['rules'=>'numeric','label'=>'Product height']]);	
					}
					
					if($product_width == '1'){
						$rules = array_merge($rules,['width'=>['rules'=>'numeric','label'=>'Product width']]);	
					}
					
					if($product_count == '1'){
						$rules = array_merge($rules,['count'=>['rules'=>'numeric','label'=>'Product count']]);	
					}
					
					if($product_brand == '1'){
						$rules = array_merge($rules,array('brand'=>['rules'=>'trim','label'=>'Product brand']));	
					}
					if($product_image2 == '1' && $_POST['image2Number'] == '1'){
						$_POST['image2'] ='';
					}
					if($product_image3 == '1' && $_POST['image3Number'] == '1'){
						$_POST['image3'] ='';
					}
					if($product_image4 == '1' && $_POST['image4Number'] == '1'){
						$_POST['image4'] ='';
					}					
					if($product_image5 == '1' && $_POST['image5Number'] == '1'){
						$_POST['image5'] ='';
					}

								
				





					if($product_image2 == '1' && isset($_FILES['image2']['name']) && $_FILES['image2']['name'] !=''){
						$rules = array_merge($rules,['image2'=>['rules'=>'max_size[image,1024]|is_image[image]','label' => 'Product Image 2']]);	
						$_POST['image2'] =$_FILES['image2']['name'];
						$file2=$this->request->getfile('image2');
					}
								
					if($product_image3 == '1'  && isset($_FILES['image3']['name']) && !empty($_FILES['image3']['name'])){
						$rules = array_merge($rules,['image3'=>['rules'=>'max_size[image,1024]|is_image[image]','label' => 'Product Image 3']]);	
						$_POST['image3'] =$_FILES['image3']['name'];
						$file3=$this->request->getfile('image3');
					}
								
					if($product_image4 == '1'  && isset($_FILES['image4']['name']) && !empty($_FILES['image4']['name'])){
						$rules = array_merge($rules,['image4'=>['rules'=>'max_size[image,1024]|is_image[image]','label' => 'Product Image 4']]);	
						$_POST['image4'] =$_FILES['image4']['name'];
						$file4=$this->request->getfile('image4');
					}
								
					if($product_image5 == '1' && isset($_FILES['image5']['name']) && !empty($_FILES['image5']['name'])){
						$rules = array_merge($rules,['image5'=>['rules'=>'max_size[image,1024]|is_image[image]','label' => 'Product Image 5']]);	
						$_POST['image5'] =$_FILES['image5']['name'];
						$file5=$this->request->getfile('image5');
					}
					if(!empty($_FILES['image']['name'])){
						$rules = array_merge($rules,['image'=>['rules'=>'max_size[image,1024]|is_image[image]','label' => 'Product Image ']]);	
						$_POST['image'] =$_FILES['image']['name'];
						$file=$this->request->getfile('image');

					}

					// echo "<pre>";print_r($rules);die;

						if($this->validate($rules)){
							$data['page_title'] ='Success edit the product';
							if(!empty($_FILES['image']['name']) && $file->isvalid() && !$file->hasmoved()){
								$filename="Product_".rand(10000,10000000000000000).".". $file->getextension();
								$file->move("./uploads/images/",$filename);
							//	echo $_POST['image'];
								$_POST['image']= "/uploads/images/".$filename;
							}
						
					
							if(!empty($_FILES['image2']['name']) && $file2->isvalid() && !$file2->hasmoved()){
								$filename2="Product_".rand(10000,10000000000000000).".". $file2->getextension();
								$file2->move("./uploads/images/",$filename2);								
								$_POST['image2']= "/uploads/images/".$filename2;
							}
							if(!empty($_FILES['image3']['name']) && $file3->isvalid() && !$file3->hasmoved()){
								$filename3="Product_".rand(10000,10000000000000000).".". $file3->getextension();
								$file3->move("./uploads/images/",$filename3);								
								$_POST['image3']= "/uploads/images/".$filename3;
							}
							
							if(!empty($_FILES['image4']['name']) && $file4->isvalid() && !$file4->hasmoved()){
								$filename4="Product_".rand(10000,10000000000000000).".". $file4->getextension();
								$file4->move("./uploads/images/",$filename4);								
								$_POST['image4']= "/uploads/images/".$filename4;
							}
														
							if(!empty($_FILES['image5']['name']) && $file5->isvalid() && !$file5->hasmoved()){
								$filename5="Product_".rand(10000,10000000000000000).".". $file5->getextension();
								$file5->move("./uploads/images/",$filename5);								
								$_POST['image5']= "/uploads/images/".$filename5;
							}


						
							$modle = new productsModel();
						$_POST['website'] = website;

						$modle->update($id,$_POST);			
						$data['SuccessM'] = 'Done , Product updated successfully.';
							
						
					}else{
						$data['page_title'] = 'Product update fail';
						$data['validation'] = $this->validator;	
									}
		
			}


			$modle = new productsModel();
			$post = $modle->get_product_join_cats($id);
			//return print_r($post);
			if($post){
				$post = $post[0];
				$data['id'] = $id;
				$data['name']= $post['name'];
				$data['name_ar']= $post['name_ar'];
				$data['main_cat_name']= $post['main_cat_name'];
				$data['sub_cat_name']= $post['sub_cat_name'];
				$data['main_cat']= $post['main_cat'];
				$data['sub_cat']= $post['sub_cat'];
				$data['amount']= $post['amount'];
				$data['count']= $post['count'];
				$data['brand']= $post['brand'];
				$data['views']= $post['views'];
				$data['details']= $post['details'];
				$data['details_ar']= $post['details_ar'];
				$data['weight']= $post['weight'];
				$data['height']= $post['height'];
				$data['width']= $post['width'];
				$data['depth']= $post['depth'];
				$data['color']= $post['color'];
				$data['size']= $post['size'];
				$data['brand']= $post['brand'];
				$data['image']= $post['image'];
				$data['image2']= $post['image2'];
				$data['image3']= $post['image3'];
				$data['image4']= $post['image4'];
				$data['image5']= $post['image5'];
				
			}else{
				$data['id']= 0;
				$data['name']= "Not Found";
				$data['main_cat']= '0';
				$data['sub_cat']= '0';
				$data['image']= '/asset/images/logo.png';
				$data['amount']= 0;
				$data['count']= 0;
				$data['brand']= "Not Found";
				$data['views']= 0;
				$data['details']= "Not Found";
			//	$data = ['name' => 'Category not found','body'=> 'Category not found','image'=> 'asset/images/logo.png','id'=> 0];
			}
			$modle2 = new catsModel();
			$postss = $modle2->find();
			$data['posts']=$postss;
			return view('admin/EditProduct',$data);
		
	}
	

}
