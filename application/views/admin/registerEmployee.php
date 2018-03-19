<?php include "includes/header.php";
	  include "includes/footer.php";
?>

<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Register Employees</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <?php
                if($this->session->flashdata('msg')){
                  echo "<h3>".$this->session->flashdata('msg')."</h3>";
                }
                 ?>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Register new Employee
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                    </div>
                                </div>

                                <?php
                                $this->load->helper('form');
                                $error = $this->session->flashdata('error');
                                if($error)
                                {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $error; ?>
                                    </div>
                                <?php }
                                $success = $this->session->flashdata('success');
                                if($success)
                                {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $success; ?>
                                    </div>
                                <?php } ?>

                                <div class="row">



                                  <?php echo validation_errors(); ?>
                                  <?php echo form_open('EmployeeController/registerEmployeeUser'); ?>

                                    <div class="col-xs-12 col-lg-12">
                                      <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label>Employee ID</label>
                                            <input class="form-control" placeholder="Enter Employee ID" name="employee_id">
                                        </div>
                                     </div>

                                     <div class="col-sm-4 col-xs-12">
                                       <label>Employee Photos</label>
                                     <img src="images/p4.jpg" alt="Employee Photos" class="img-circle">
                                     <input type="file" name="image">
                                    </div>


                                      </div>

                                    <div class="col-xs-12 col-lg-12">


                                          <div class="col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <div class="radio">
                                                      <label>
                                                        <input type="radio" name="employee_Title" id="optionsRadios1" value="option1" checked>
                                                        Mr
                                                      </label>
                                                    </div>
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" name="employee_Title" id="optionsRadios2" value="option2">
                                                        Mrs
                                                      </label>
                                                    </div>
                                                    <div class="radio">
                                                      <label>
                                                        <input type="radio" name="employee_Title" id="optionsRadios2" value="option2">
                                                        Miss
                                                      </label>
                                                    </div>
                                            </div>
                                         </div>

                                         <div class="col-sm-4 col-xs-12">
                                           <div class="form-group">
                                               <label>First name</label>
                                               <input class="form-control" placeholder="Enter first name" name="employee_fname" pattern="^[.A-z ]{1,}$" required="">
                                           </div>
                                        </div>


                                         <div class="col-sm-4 col-xs-12">
                                           <div class="form-group">
                                               <label>Last name</label>
                                               <input class="form-control"  placeholder="Enter last name" pattern="^[.A-z ]{1,}$" name="employee_lname" >
                                           </div>
                                        </div>

                                      </div>


                                      <div class="col-xs-12 col-lg-12">


                                           <!-- <div class="col-sm-4 col-xs-12">
	                                           <div class="form-group">
	                                                <label>Add a photo</label>
	                                                <input type="file" name="picture" >
	                                            </div>
                                            </div> -->
                                        </div>


                                        <div class="col-xs-12 col-lg-12">


                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Contact Number</label>
	                                                <input class="form-control"  placeholder="Enter contact number" pattern="^[0]+[0-9]{9}" name="employee_contact" required="">
	                                            </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <label>NIC Number</label>
                                                    <input class="form-control"  placeholder="Enter NIC" pattern="^[0-9-V]{10}$" name="employee_nic" required="">
                                                </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
                                           <div class="form-group">
                                               <label>Gender</label>
                                               <div class="radio">
                                                     <label>
                                                       <input type="radio" name="employee_Gender" id="optionsRadios1" value="option1" checked>
                                                       Male
                                                     </label>
                                                   </div>
                                                   <div class="radio">
                                                     <label>
                                                       <input type="radio" name="employee_Gender" id="optionsRadios2" value="option2">
                                                       Female
                                                     </label>
                                                   </div>
                                           </div>
                                         </div>

                                        </div>

                                        <div class="col-xs-12 col-lg-12">
                                          <div class="col-sm-4 col-xs-12">
                                               <div class="form-group">
                                                   <label>Address</label>
                                                   <input class="form-control"  placeholder="Enter Address" name="employee_address" required="">
                                               </div>
                                          </div>

                                          <div class="col-sm-4 col-xs-12">
                                                  <div class="form-group">
                                                      <label>Email</label>
                                                      <input type='email' class="form-control" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="abc@something.com" placeholder="Enter email" name="employee_email" required="">
                                                  </div>

                                          </div>

                                        </div>

                                        <div class="col-xs-12 col-lg-12">
                                          <div class="col-sm-4 col-xs-12" >
                                                <label >Date Of Birth </label>
                                              <input type="date" class="form-control" placeholder="Date Of Birth" name="employee_DOB" data-error='Please enter DOB' required="">

                                          </div>

                                          <div class="col-sm-4 col-xs-12" >
                                                <label >Added Date </label>
                                              <input type="date" class="form-control" placeholder="Added Date" name="employee_AddedDate" data-error='Please enter Date' required="">

                                          </div>

                                        </div>


                                        <div class="col-xs-12 col-lg-12">


                                        </div>

                                        <div class="col-xs-12 col-lg-12">

	                                         <div class="col-xs-2">
	                                			         <button type="submit" class="btn btn-block btn-success" name="addItem">Submit</button>

	                            			      </div>
                            			        <div class="col-xs-2">

	                                			      <button type="reset" class="btn btn-primary">Reset</button>
	                            			      </div>
	                            		      </div>

                                        <?php echo form_close(); ?>



                                    </div>

                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->
