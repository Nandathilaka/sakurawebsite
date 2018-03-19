<?php
/**
 * insert New Employee
 */
class EmployeeModel extends CI_Model{

  function insertEmployee(){
    $emplyeeData = array(
      'empid' => $this->input->post('employee_id',TRUE),
      'image' => $this->input->post('image'),
      'title' => $this->input->post('employee_Title'),
      'fname' => $this->input->post('employee_fname',TRUE),
      'lname' => $this->input->post('employee_lname',TRUE),
      'contact' => $this->input->post('employee_contact',TRUE),
      'nic' => $this->input->post('employee_nic',TRUE),
      'gender' => $this->input->post('employee_Gender'),
      'address' => $this->input->post('employee_address',TRUE),
      'email' => $this->input->post('employee_email',TRUE),
      'dob' => $this->input->post('employee_DOB',TRUE),
      'addeddate' => $this->input->post('employee_AddedDate',TRUE),

   );

  return $this->db->insert('employee',$emplyeeData);


  }

  #Fetch Data
  public function fetch_data(){
    $query = $this->db->get('employee');
    return $query;
  }

#Delete Employee
  function delete_data($id)
    {
      $res = $this->db->delete('employee',array('id' => $id));
      return $res;

    }

#Update Employee
function update_data($id, $data)
    {

        $this->db->where('id', $id);
        $this->db->update('employee', $data);

    }

    function fetch_single_data($id)
    {

        $query = $this->db->query("SELECT * FROM employee WHERE id=$id");

        return $query;

    }
}



 ?>
