<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->model('productModel');
		$res = $this->productModel->getDetails();
		if($res){

			$productArray = array('title' => $res[0]->product_title,
									'price' => $res[0] ->product_price,
									'quantity' =>$res[0] ->product_quantity,
									'discount' =>$res[0] ->product_discount,
									);
		}
		$this->load->view('pages/home',$productArray);
	}
}
