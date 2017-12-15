<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller{


		function addNewProduct(){
		
		$this->form_validation->set_rules('product_title','product_title','required|max_length[40]|is_unique[products.product_title]');
		$this->form_validation->set_rules('userfile','product_image','');
		$this->form_validation->set_rules('catOptions','category','required');
		$this->form_validation->set_rules('product_quantity','product_quantity','required');		
		$this->form_validation->set_rules('product_price','product_price','required');
		$this->form_validation->set_rules('product_discount','product_discount','');
		$this->form_validation->set_rules('product_desc','product_desc','');
		$this->form_validation->set_rules('product_key','product_key','required');
		

		if($this->form_validation->run()==TRUE){

				

				// $config['upload_path'] = './images/';
		  //       $config['allowed_types'] = 'gif|jpg|png';
		  //       $config['max_size'] = '100000';
		  //       $config['max_width']  = '10240';
		  //       $config['max_height']  = '7680';

		  //       $this->load->library('upload', $config);

		  //       if ( ! $this->upload->do_upload('userfile'))       //you forgot this
		  //       {
		  //           $error = array('error' => $this->upload->display_errors());

		  //           $this->load->view('admin/addProductView', $error);
		  //       }
		  //       else
		  //       {
		            // $productInfo = array('upload_data' => $this->upload->data());
		            // // print_r($this->upload->data());
		            // $datafoto=$this->upload->data();
		            // $product_image = time().$datafoto['orig_name'];

				$product_title = $this->input->post('product_title');
				$product_image = $this->input->post('product_image');
				$product_category = $this->input->post('catOptions');
				$product_quantity = $this->input->post('product_quantity');
				$product_price = $this->input->post('product_price');
				$product_discount = $this->input->post('product_discount');
				$product_desc = $this->input->post('product_desc');
				$product_key = $this->input->post('product_key');

				$productInfo = array('product_title' => $product_title,
									'product_image' => $product_image,
									'category_id' => $product_category,
									'product_quantity' => $product_quantity,
									'product_price' => $product_price,
									'product_discount' => $product_discount,
									'product_desc' => $product_desc,
									'product_key' => $product_key,
									'product_addedDtm' => date('Y-m-d H:i:s'),
									);

				$this->load->model('productModel');

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

		$this->load->model('productModel');

		$data['productRecords'] = $this->productModel->listProducts();

		$this->load->view('admin/productView',$data);
	}

	//display in the web site

	function displayProducts(){

		$data_id = $this->uri->segment(3);
		$this->load->model('productModel');

		$res = $this->productModel->getDetails($data_id);

		if($res){

			$productArray = array('title' => $res[0]->product_title,
									'price' => $res[0] ->product_price,
									'quantity' =>$res[0] ->product_quantity,
									'discount' =>$res[0] ->product_discount,
									);
		}


		//$this->load->view("pages/home",$productArray);

		

	}
}