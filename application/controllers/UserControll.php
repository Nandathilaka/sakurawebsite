<?php

class UserControll extends CI_Controller {

    public function registerUser(){

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[custommer_registration.userName]');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|min_length[8]|max_length[10]');
        $this->form_validation->set_rules('cpwd', 'Password Confirmation', 'trim|matches[pwd]');

        if($this->form_validation->run() == false){
            $this->load->view('pages/registered');
        }else{
            $this->load->model('UserModel');
            $response = $this->UserModel->insertUserdata();

            if($response){
                $this->session->set_flashdata('msg','Registered successfully..please login');
                redirect('registered');
            }else{
                $this->session->set_flashdata('msg','Something went wrong');
                redirect('registered');
            }

        }

    }

    public function loginUser(){

        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|min_length[8]|max_length[10]');

        if($this->form_validation->run() == false){
            $this->load->view('pages/login');
        }else{
            $this->load->model('UserModel');
            $response = $this->UserModel->loginUser();

            if (!$response){
                $user_data = array(
                    'user_id' => $response->regId,
                    'fname' => $response->firstName,
                    'lname' => $response->lastName,
                    'email' => $response->userName,
                    'password' => $response->password,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($user_data);
               redirect('home');

            }else{
                $this->session->set_flashdata('errormsg','Invalid email or password');
                redirect('login');
            }

        }

    }

    public function logoutUser(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_in');
        redirect('login');
    }
}
?>