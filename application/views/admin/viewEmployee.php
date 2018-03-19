<?php include "includes/header.php";
	  include "includes/footer.php";
?>

<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">View Employees</h3>
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
                                Update and Delete Employee
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

                                    <div class="col-xs-12 col-lg-12">
                                      <div class="col-sm-4 col-xs-12">
																				<table class="table">
																					  <thead class="thead-inverse">
																					    <tr>
																					      <th>#</th>
																					      <th>Employee ID</th>

																					      <th>Title</th>
																								<th>First Name</th>
																					      <th>Last Name</th>
																					      <th>Contact</th>
																								<th>NIC Number</th>
																					      <th>Gender</th>
																					      <th>Address</th>
																								<th>Email</th>

																					      <th>Added Date</th>
																								<th>Actions</th>
																					    </tr>
																					  </thead>
																						<?php
																						if($fetch_data->num_rows() > 0){
																							foreach ($fetch_data->result() as $row) {
																								?>
																								<tbody>
																									<tr>


																								<tr>
																									<td><?php echo $row->id; ?></td>
																									<td><?php echo $row->empid; ?></td>

																									<td><?php echo $row->title; ?></td>
																									<td><?php echo $row->fname; ?></td>
																									<td><?php echo $row->lname; ?></td>
																									<td><?php echo $row->contact; ?></td>
																									<td><?php echo $row->nic; ?></td>
																									<td><?php echo $row->gender; ?></td>
																									<td><?php echo $row->address; ?></td>
																									<td><?php echo $row->email; ?></td>

																									<td><?php echo $row->addeddate; ?></td>
																									<td><a class="btn btn-danger" href="<?php echo base_url()."index.php/EmployeeController/delete_data/".$row->id ;?>">Delete</a></td>
                    															<td><a  class="btn btn-warning"href="<?php echo base_url()."index.php/EmployeeControllers/update_data/".$row->id ;?>">Update</a></td>
																								</tr>
																								<?php
																							}

																						}else{
																							?>
																							<tr>
																								<td colspan="3">No data Found </td>
																							</tr>
																							<?php
																						}

																						 ?>
																					 </tr>
																				 </tbody>

																					</table>


                                     </div>


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
