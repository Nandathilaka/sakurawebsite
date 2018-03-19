<?php include "includes/header.php" ?>
<?php include "includes/footer.php" ?>

<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All products</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-4 col-sm-4 col-xs-12" no-padding style="padding-top:20px">                    
                     
                    <div class="modal fade" id="update_product" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Update Product details</h4>
                        </div>                       
                         
                         <form method="post" action="<?php echo base_url()?>index.php/ProductController/updateProduct">

                          <div class="modal-body">
                              <div class="row">                            

                                <div class="form-group">
                                  <label for="product_title" class="col-sm-6 control-label">Name</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="product_title"  name="product_title" required>
                                  </div>
                                </div>                        

                                <div class="form-group">
                                  <label for="product_quantity" class="col-sm-6 control-label">Quantity</label>
                                  <div class="col-sm-7">
                                
                                    <input type="text" class="form-control" id="product_quantity"  name="product_quantity" required>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="product_price" class="col-sm-6 control-label">Price</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="product_price" name="product_price" >
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="product_discount" class="col-sm-6 control-label">Discounts</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="product_discount"  name="product_discount" required>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="product_desc" class="col-sm-6 control-label">Description</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="product_desc" name="product_desc">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="product_key" class="col-sm-6 control-label">Key</label>
                                  <div class="col-sm-7">
                                    <input type="text" class="form-control" id="product_key" name="product_key">
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="product_key" class="col-sm-6 control-label">Key</label>
                                 <label>Update image</label>
                                 <input type="file" name="picture">
                                  </div>
                                </div>
                          
                             </div>                           

                            <div class="modal-footer" >
                                <button type="submit" class="btn btn-primary btn-success" name="UpdatePro" value="Update">Update</button>
                                <button type="submit" class="btn btn-primary pull-left" name="ClearPro">clear</button>
                            </div>

                            </form>
                          </div>                                               
                       
                    </div>                     

                 </div>
                      
            </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Food items in the database
                            </div>
                            <!-- /.panel-heading -->
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



                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <!-- <th>Category</th> -->
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                               <!--  <th>Descrption</th> -->
                                                <!-- <th>Key</th> -->
                                                <th>Added Date,Time</th>
                                                <th>No: of sales</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
						                    <?php
						                    if(!empty($productRecords))
						                    {
						                        foreach($productRecords as $record)
						                        {
						                    ?>
						                    <tr>
						                      <td><?php echo $record->product_id ?></td>
						                      <td><?php echo $record->product_title ?></td>						                      
                                  <td><img src="<?php echo base_url('uploads/images/').$record->product_image;?>" /> </td>						                      
						                      <td><?php echo $record->product_quantity ?></td>
						                      <td><?php echo $record->product_price ?></td>
						                      <td><?php echo $record->product_discount ?></td>						                     
						                      <td><?php echo $record->product_addedDtm ?></td>
                                  <td><?php echo $record->product_sales ?></td>

						                      <td class="text-center">
						                          <a class="btn btn-sm btn-info" data-toggle="modal" id="update_product"><i class="fa fa-pencil" ></i></a>

                                                  <br><br>

						                          <a class="btn btn-sm btn-danger deleteUser" href="<?php echo base_url()?>index.php/ProductController/removeProduct/<?php echo $record->product_id ?>" onclick="return confirm('Are you sure you want to delete this item?')" ><i class="fa fa-trash"></i></a>

                                                  <br><br>
                                               
						                      </td>
						                    </tr>
						                    <?php
						                        }
						                    }
						                    ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                <div class="well">
                                    <h4>All products</h4>
                                    <p>All the above products are displayed in the main website. If you want to remove displaying a product in the main site click the red cart button</p>
                                    <!-- <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/"></a> -->
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
 <!-- DataTables JavaScript -->
<script src="<?php echo base_url()?>template/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/js/dataTables/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    
    $("#update_product").click(function(){
        alert("hcduhu");

        var rowCount = 0;
        var array;

      // $('#customer_table input:checkbox:checked').each(function() {
      //   rowCount ++;
      //   array = $(this).parent().siblings().map(function() {
      //       return $(this).text().trim();
      //   }).get();
         
      // });

      if(rowCount ==1){
       
        $('#CustCode').val(array[0]);
        $('#CustName').val(array[1]);
        $('#CustAddress').val(array[2]);
        $('#CustContact').val(array[3]);
        $('#CustRegDate').val(array[4]);
        $("#addrow").modal();
      }else{

        alert("Error, Select only one row");
      }

});
</script>
