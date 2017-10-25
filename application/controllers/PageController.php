<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{

	
	function displayHome(){
		$this->load->view('admin/homeView');
	}
	

	function addNewProduct(){
		$this->load->view('admin/addProductView');
	}


	function registerUser(){
		$this->load->view('admin/registerUserView');
	}


}