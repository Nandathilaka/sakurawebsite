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

		$this->db->select('product_id,product_title,product_image,category_id,product_quantity,product_price,product_discount,product_desc,product_key,product_addedDtm,product_sales');
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




        //this function deletes the product details from the db when the product id is given
        function removeProduct($product_id){

                $res = $this->db->delete('products', array('product_id' => $product_id)); 
                return $res;

        }

        //gets the product details of the last inserted product
        function getProduct(){
                $query = $this->db->query("select * from products where product_id=(SELECT MAX(product_id) FROM products)");
                $res = $query->result();
                return $res;
        }

        function save_cart_products($ids,$descriptions,$prices,$qtys){

                $this->db->trans_begin();
                $ndx=0;
                foreach($ids as $id){
                        //save product to order_details table.
                        $data = array('product_id' => $id,
                                  'description' => $descriptions[$ndx],
                                  'price' =>$prices[$ndx],
                                  'qty_ordered' =>$qtys[$ndx],
                                  'order_date' =>date('Y-m-d H:i:s'),
                                  'customer_regID'=>$_SESSION['user_id']
                                  );

                        $this->db->insert("order_details",$data);
                       
                        //update product qty on the products table.
                        // $this->db->where('product_id',$id);
                        // $this->db->set('product_sales', "product_sales+$qtys[$ndx]", FALSE);
                        // $this->db->update('products');
                        $ndx++;
                }
                if ($this->db->trans_status() === FALSE){
                                $this->db->trans_rollback();
                                return FALSE;
                                }
                else{
                                $this->db->trans_commit();
                                return TRUE;
                }
        }


        function getOrders(){

                $this->db->select("*");
                $this->db->from('order_details'); 
                              
                $query = $this->db->get();
                
                $orders = $query->result();
                return $orders;

        }


        function search($keyword){

            $this->db->like('product_title', $keyword);
            $this->db->or_like('product_desc', $keyword);
            $query = $this->db->get('products');
            return $query->result();
            
        }
}