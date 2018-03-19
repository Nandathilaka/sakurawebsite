<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		if($this->isLoggedIn()){
			$this->load->model('productModel');
			$res['products'] = $this->productModel->getDetails();
		
			$this->load->view('pages/loggedHome',$res);

		}else{
			$this->load->model('productModel');
			$res['products'] = $this->productModel->getDetails();
		
			$this->load->view('pages/home',$res);

		}
		
	}

	// public function index()
	// {

		
	// 		$this->load->model('productModel');
	// 		$res['products'] = $this->productModel->getDetails();
		
	// 		$this->load->view('pages/home',$res);

		
		
	// }

	// function displayLoggedHome(){
	// 	$this->load->model('productModel');
	// 		$res['products'] = $this->productModel->getDetails();
		
	// 		$this->load->view('pages/loggedHome',$res);

	// }


	function isLoggedIn(){

		$isLoggedIn = $this->session->userdata('logged_in');

		if(!isset($isLoggedIn) || $isLoggedIn!=TRUE){
			return FALSE;
		}else{			
			  return TRUE;
			
		}

	}

	public function search_keyword(){
		$this->load->model('productModel');
        $keyword = $this->input->get('search');
        $res['products'] = $this->productModel->search($keyword);

       	$this->load->view('pages/products',$res);
	}





}
