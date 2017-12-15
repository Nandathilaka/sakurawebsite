<?php include "includes/header.php";
	  include "includes/footer.php";
?>

<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">Register Users</h3>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Register new user
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

                                	<form role="form" method="post" action="<?php echo base_url()?>index.php/AdminController/registerUser">
                                    	<div class="col-xs-12 col-lg-12">
                                        
                                            
                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>First name</label>
	                                                <input class="form-control" placeholder="Enter first name" name="admin_fname" pattern="^[.A-z ]{1,}$" required="">
	                                            </div>
                                           </div>


                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Last name</label>
	                                                <input class="form-control" pattern="^[.A-z ]{1,}$" placeholder="Enter last name" name="admin_lname" >
	                                            </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
	                                           <div class="form-group">
	                                                <label>Add a photo</label>
	                                                <input type="file" name="admin_photo" size="20">
	                                            </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-12 col-lg-12">
                                        
                                            
                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Contact Number</label>
	                                                <input class="form-control" pattern="^[0]+[0-9]{9}" placeholder="Enter contact number" name="admin_contact" required="">
	                                            </div>
                                           </div>

                                           <div class="col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <label>NIC Number</label>
                                                    <input class="form-control" pattern="^[0-9-V]{10}$" placeholder="Enter NIC" name="admin_nic" required="">
                                                </div>
                                           </div>

                                                                                      
                                        </div>

                                        <div class="col-xs-12 col-lg-12" >

                                            <div class="col-sm-5 col-xs-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type='email' class="form-control" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="abc@something.com" placeholder="Enter email" name="admin_email" required="">
                                                </div>

                                        </div>

                                        <div class="col-xs-12 col-lg-12">
                                        
                                            
                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Password</label>
	                                                <input type='password' class="form-control" placeholder="Enter password" name="admin_password" required="">
	                                            </div>
                                           </div>


                                            <div class="col-sm-4 col-xs-12">
	                                            <div class="form-group">
	                                                <label>Confirm Password</label>
	                                                <input type='password' class="form-control" placeholder="Re enter password" name="admin_cpassword" required="">
	                                            </div>
                                           </div>

                                                                                     
                                        </div>                                       
                                        
                                        <div class="col-xs-12 col-lg-12">

	                                         <div class="col-xs-2">
	                                			<button type="submit" class="btn btn-block btn-success" name="addItem">Submit</button>
	                                			
	                            			</div>
                            			      <div class="col-xs-2">
	                                			
	                                			<button type="reset" class="btn btn-primary">Reset</button>
	                            			</div>
	                            		</div>  
                                                                      		                                  
                                            
                                     </form>
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