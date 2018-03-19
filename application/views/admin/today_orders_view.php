<?php include "includes/header.php" ?>
<?php include "includes/footer.php" ?>

<div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">All Orders</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Customer orders
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                   <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                            	<th>Order ID</th>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Price</th>                                                
                                                <th>Quantity</th>                                               
                                                                                         
                                                <th>Order Date</th>
                                                <th>Order Customer</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
						                    <?php
						                    if(!empty($orders))
						                    {
						                        foreach($orders as $order)
						                        {
						                    ?>
						                    <tr>
						                      <td><?php echo $order->id ?></td>
						                      <td><?php echo $order->product_id ?></td>										                      
						                      <td><?php echo $order->description ?></td>
						                      <td><?php echo $order->price ?></td>
						                      <td><?php echo $order->qty_ordered ?></td>						                     
						                      <td><?php echo $order->order_date ?></td>
                                  			  <td><?php echo $order->customer_regID ?></td>

						                    </tr>
						                    <?php
						                        }
						                    }
						                    ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                      </div>
                  </div>
</div>