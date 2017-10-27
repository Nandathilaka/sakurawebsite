<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{

	
	function displayHome(){
		$this->load->view('admin/homeView');
	}
	
	function addNewProduct(){
		$this->load->view('admin/addProductView');
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

	

}