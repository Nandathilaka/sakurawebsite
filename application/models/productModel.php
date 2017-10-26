<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productModel extends CI_Model{

	function insertProduct($productInfo){

		$this->db->trans_start();

        $this->db->insert('products', $productInfo);               
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
	}

}