<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller{


			/**
	     * This is default constructor of the class
	     */
		public function __construct(){
			parent::__construct();
			$this->load->model('productModel');
			
		}


		function addNewProduct(){
		
			$this->form_validation->set_rules('product_title','product_title','required|max_length[40]|is_unique[products.product_title]');
			// $this->form_validation->set_rules('userfile','product_image','');
			$this->form_validation->set_rules('catOptions','category','required');
			$this->form_validation->set_rules('product_quantity','product_quantity','required');		
			$this->form_validation->set_rules('product_price','product_price','required');
			$this->form_validation->set_rules('product_discount','product_discount','');
			$this->form_validation->set_rules('product_desc','product_desc','');
			$this->form_validation->set_rules('product_key','product_key','required');
			

		if($this->form_validation->run()==TRUE){

				//Check whether user upload picture
	            if(!empty($_FILES['picture']['name'])){
	                $config['upload_path'] = 'uploads/images/';
	                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	                $config['file_name'] = $_FILES['picture']['name'];
	                
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('picture')){
	                    $uploadData = $this->upload->data();
	                    $picture = $uploadData['file_name'];
	                }else{
	                    $picture = '';
	                }
	            }else{
	                $picture = '';
	            }


				$product_title = $this->input->post('product_title');
				// $product_image = $this->input->post('product_image');
				$product_category = $this->input->post('catOptions');
				$product_quantity = $this->input->post('product_quantity');
				$product_price = $this->input->post('product_price');
				$product_discount = $this->input->post('product_discount');
				$product_desc = $this->input->post('product_desc');
				$product_key = $this->input->post('product_key');


				//Prepare array of user data

				$productInfo = array('product_title' => $product_title,
									'product_image' => $picture,
									'category_id' => $product_category,
									'product_quantity' => $product_quantity,
									'product_price' => $product_price,
									'product_discount' => $product_discount,
									'product_desc' => $product_desc,
									'product_key' => $product_key,
									'product_addedDtm' => date('Y-m-d H:i:s'),
									);

				

				$res = $this->productModel->insertProduct($productInfo);

				if($res>0)
				 {
	                $this->session->set_flashdata('success', 'New product inserted successfully');
	            }
	            else
	            {
	                $this->session->set_flashdata('error', 'Product insertion failed');
	            }

	        redirect('addProduct');    	
            
		}
		else
		{

			$this->session->set_flashdata('error', 'Product insertion failed.Try again');
			redirect('addProduct');

		}
	}



	//this method listss the products in the database

	function viewProducts(){		

		$data['productRecords'] = $this->productModel->listProducts();

		$this->load->view('admin/productView',$data);
	}

	//this method lists the details of last added product
	function viewLastProduct(){		

		$data['productRecords'] = $this->productModel->getProduct();

		$this->load->view('admin/productView',$data);
	}

	

	//this function deletes a product given by its id
	function removeProduct($id){

		$product_id = $id;

		if($product_id){
			$res = $this->productModel->removeProduct($product_id);
		}

		if($res>0)
				 {
	                $this->session->set_flashdata('success', 'Successfully deleted');
	            }
	            else
	            {
	                $this->session->set_flashdata('error', 'Product deletion failed');
	            }

	    redirect('viewProducts');


		}

		


}