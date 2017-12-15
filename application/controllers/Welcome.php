<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->model('productModel');
		$res['products'] = $this->productModel->getDetails();
		
		$this->load->view('pages/home',$res);
	}
}
