<?php

class Pages extends CI_Controller{
    public function view($page = 'home'){

        if(! file_exists('application/views/pages/'.$page.'.php')){
            show_404();
        }
        $this->load->view('pages/'.$page);
    }

    public function login(){
        $this->load->view('pages/login');
    }

    public function register(){
        $this->load->view('page/registered');
    }
}

?>