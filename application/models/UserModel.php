<?php

class UserModel extends CI_Model{

    public function insertUserdata(){

        $data = array(
            'firstName' => $this->input->post('fname',True),
            'lastName' => $this->input->post('lname',True),
            'userName' => $this->input->post('email',True),
            'password' => sha1($this->input->post('pwd',True))
        );

        return $this->db->insert('customer_registration',$data);
    }

    public function loginUser($userInfo){       

        $this->db->select("regId,firstName,lastName,userName");
        $query = $this->db->get_where("customer_registration",$userInfo);

        $user = $query->result();

        if (!empty($user)){
            return $user;
        }else{
            return FALSE;
        }


    }


}