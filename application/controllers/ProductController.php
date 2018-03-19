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



	function addToCart(){

		  $data = array(
               'id'      => $this->input->post('id'), 
               'name'    =>  $this->input->post('item_name'),         
               'price'   => $this->input->post('amount'),
               'qty' =>1,
               'discount' =>$this->input->post('discount_amount'),
               'image' =>$this->input->post('image')
               
            );

            $this->cart->insert($data);

            // redirect(base_url().'shopping-cart-view');
            $this->shoppingCartView();
	}


	 function shoppingCartView(){
	 	 		if($this->isLoggedIn()){

                        $data['products'] = $this->cart->contents();

                        $this->load->view('pages/checkout',$data);
                }else{

                	redirect('login');
                }
     }


     function isLoggedIn(){

		$isLoggedIn = $this->session->userdata('logged_in');

		if(!isset($isLoggedIn) || $isLoggedIn!=TRUE){
			return FALSE;
		}else{			
			  return TRUE;
			
		}

	}



     function saveCartProducts(){
                        $ids = Array();
                        $descriptions = Array();
                        $prices = Array();
                        $qtys = Array();
                        $ids = $this->input->post('id');
                        $descriptions = $this->input->post('name');
                        $prices = $this->input->post('price');
                        $qtys = $this->input->post('qty');

                       
                        if($this->isLoggedIn()){
                        	$result = $this->productModel->save_cart_products($ids,$descriptions,$prices,$qtys);
                       
	                        if($result){
	                                        $msg="Successfully Save...";
	                                        $this->cart->destroy();
	                                        }
	                        else{
	                                        $msg="Save Failed..."; 
	                                        }                 
	                                                       
	                        $data=array('msg' => $msg);
	                        $this->session->set_userdata('user',$data);    
	                        // redirect(base_url().'shopping-cart-view');
	                        $this->shoppingCartView();
                        }else{

                        	redirect('login');

                        }                      

                        
        }

        function viewOrders(){

        	$data['orders'] = $this->productModel->getOrders();

        	$this->load->view('admin/today_orders_view',$data);
        }

		


}