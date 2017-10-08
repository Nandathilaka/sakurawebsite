<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{

	public function index(){

		$this->isLoggedIn();
		
	}

	// this function checks whether the user is logged in or not
	function isLoggedIn(){

		$isLoggedIn = $this->session->userdata('isLoggedIn');

		if(!isset($isLoggedIn) || $isLoggedIn!=TRUE){
			$this->load->view('admin/loginView');
		}else{
			
			redirect('admin/homeView');
		}

	}


	function logMe(){
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[admins.email]');
		$this->form_validation->set_rules('password','User Password','trim|required');

		if($this->form_validation == false){

			$this->index();
		}else{
			
			$email = $_POST['email'];
			$password = $_POST['password'];

			
			  $userInfo['email'] = $email;
			  $userInfo['password'] = $password;


			$this->load->model('loginModel');
			
			$res = $this->loginModel->authenticateUser($userInfo);


			if($res){

				$sessionArray = array('email' =>$res->email,
										'isLoggedIn' => true );

				$this->session->set_userdata($sessionArray);
				redirect('admin/homeView');
			}else{

				$this->session->set_flashdata('error', 'Email or password mismatch');
                
                
                redirect('admin/loginView');
			}

		}
	}

	function logOut(){
		$this->session->sess_destroy();
		redirect('admin/loginView');
	}



}