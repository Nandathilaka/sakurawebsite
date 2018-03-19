<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{

	/**
     * This is default constructor of the class
     */
	public function __construct(){
		parent::__construct();
		$this->load->model('productModel');
		
	}
	
	function displayHome(){
		$this->load->view('admin/homeView');
	}
	
	function addNewProduct(){
		$this->load->view('admin/addProductView');
	}
	
	function displayCheckout(){
		$this->load->view('pages/checkout');
	}


	function viewLastProduct(){

		$res = $this->productModel->getProduct();

		$new  = array(
						'product_title'=>$res[0]->product_title,
						'product_price' =>$res[0]->product_price,
						'product_image' =>$res[0]->product_image,
						'product_discount' =>$res[0]->product_discount						
				);

		$this->load->view('admin/singleProductView',$new);
	}

	function viewProduct(){
		$this->load->view('admin/productView');
	}


	function registerUser(){
		$this->load->view('admin/registerUserView');
	}


	function login(){
		$this->load->view('pages/login');
	}
	
	function createAccount(){
		$this->load->view('pages/registered');
	}

	function contacttUs(){
	    $this->load->view('pages/contact');
    }
    function aboutUs(){
	    $this->load->view('pages/about');
    }
    function home(){
        $this->load->view('pages/home');
    }
	

}