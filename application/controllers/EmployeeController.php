<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class EmployeeController extends CI_Controller{

  public function registerEmployee(){
    $this->load->View('admin/registerEmployee');
}

#Register Employee
public function registerEmployeeUser(){

  $this->form_validation->set_rules('employee_id','Employee ID','required');
  $this->form_validation->set_rules('image','Image','required');
  $this->form_validation->set_rules('employee_Title','Title','required');
  $this->form_validation->set_rules('employee_fname','First Name','required');
  $this->form_validation->set_rules('employee_lname','Last Name','required');
  $this->form_validation->set_rules('employee_contact','Contact','required');
  $this->form_validation->set_rules('employee_nic','NIC','required');
  $this->form_validation->set_rules('employee_Gender','Gender','required');
  $this->form_validation->set_rules('employee_address','Address','required');
  $this->form_validation->set_rules('employee_email','Email','required');
  $this->form_validation->set_rules('employee_DOB','Date Of Birth','required');
  $this->form_validation->set_rules('employee_AddedDate','Added Date','required');

  if ($this->form_validation->run() == FALSE)
               {
                       $this->load->view('admin/registerEmployee');
               }
               else
               {

                       $this->load->model('EmployeeModel');
                       $response = $this->EmployeeModel->insertEmployee();

                       if($response){
                         $this->session->set_flashdata('msg',"Your Registered Successfully.!");
                         redirect('EmployeeController/registerEmployee');

                        }

                }
              }

public function viewEmplyee(){
  #$this->load->view('admin/viewEmployee');

  $this->load->model('EmployeeModel');
  $data["fetch_data"] = $this->EmployeeModel->fetch_data();
  $this->load->view('admin/viewEmployee',$data);
}

public function delete_data($id){
        $id = $id;
        $this->load->model('EmployeeModel');
        $res = $this->EmployeeModel->delete_data($id);


          $this->viewEmplyee();
        

    }


    public function update_data(){

        $this->load->model('EmployeeModel');
        $data['fetch_data']=$this->EmployeeModel->fetch_single_data($id);
        $data['fetch_data']=$this->EmployeeModel->fetch_data();
        $this->load->view('admin/viewEmployee',$data);

        // $this->load->view('EmployeeModel', $data);



    }
}



 ?>
