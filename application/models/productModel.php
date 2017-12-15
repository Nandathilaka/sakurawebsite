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

	//this method returns the product info in the database
	function listProducts(){

		$this->db->select('product_id,product_title,product_image,category_id,product_quantity,product_price,product_discount,product_desc,product_key,product_addedDtm');
        $this->db->from('products');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
	}



        //return details of products

        function getDetails($id=""){

                $this->db->select("*");
                $this->db->from('products'); 

                if($id){
                        $this->db->where('product_id',$id);
                }

                                
                $query = $this->db->get();
                
                $product = $query->result();
                return $product;

        }

}