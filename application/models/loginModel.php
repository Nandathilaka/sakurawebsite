<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model{

        function authenticateUser($userInfo){

                $condition = "email =" . "'" . $userInfo['email'] . "' AND " . "password =" . "'" . $userInfo['password'] . "'";
                $this->db->select('*');
                $this->db->from('admins');
                $this->db->where($condition);
                $this->db->limit(1);
                $query = $this->db->get();

               
                if ($query->num_rows() == 1) {
                        return true;
                } else {
                        return false;
                }
        }
}