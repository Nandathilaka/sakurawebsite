<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminModel extends CI_Model{

        function authenticateUser($userInfo){

               
                $this->db->select('admin_id, admin_password, admin_fname, admin_contact,admin_nic,admin_email');
                $this->db->from('admins');                
                $this->db->where('admin_email', $userInfo['email']);
                $this->db->where('admin_isDeleted', 0);
                $query = $this->db->get();
                
                $user = $query->result();
                
                if(!empty($user)){
                       

                    // if(password_verify($userInfo['password'], $user[0]->admin_password)){
                        
                    //     return $user;
                    // } else {
                    //     print('hello');
                    //     return array();
                    // }

                if($userInfo['password'] == $user[0]->admin_password){
                        
                        return $user;
                    } else {
                        
                        return array();
                    }
                       
                } else {
                    return array();
                }
        }

        function registerNewUser($userInfo){

                $this->db->trans_start();

                $this->db->insert('admins', $userInfo);               
                
                $insert_id = $this->db->insert_id();
                
                $this->db->trans_complete();
                
                return $insert_id;
                
        }
}