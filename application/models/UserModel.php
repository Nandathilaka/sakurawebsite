<?php

class UserModel extends CI_Model{

    public function insertUserdata(){

        $data = array(
            'firstName' => $this->input->post('fname',True),
            'lastName' => $this->input->post('lname',True),
            'userName' => $this->input->post('email',True),
            'password' => sha1($this->input->post('pwd',True))
        );

        return $this->db->insert('custommer_registration',$data);
    }

    public function loginUser(){

        $username = $this->input->post('email');
        $password = sha1($this->input->post('pwd'));

        $this->db->where('userName',$username);
        $this->db->where('password',$password);

        $response = $this->db->get('custommer_registration');
        if ($response->num_rows() == 1){
            return $response->row(0);
        }else{
            return FALSE;
        }
    }


}