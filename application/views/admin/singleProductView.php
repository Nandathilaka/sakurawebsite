<?php include "includes/header.php" ?>
<?php include "includes/footer.php" ?>
<!-- <?php include 'pages/links.php';?> -->

<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />

<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>

</head>


<div id="page-wrapper">

		<div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Product View</h3>
            </div>            
        </div>
         <div class="row">
            <div class="col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        The product you added will look like this                        
                    </div>
                    
                    <div class="panel-body">

                    	 <div class="col-md-4 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block" >
                                                    <div class="snipcart-thumb">
                                                        
                                                       <a href="products"><img title=" " alt=" " src="<?php echo base_url('uploads/images/').$product_image;?>" /></a> 




                                                        <p><?php echo $product_title ;?></p>
                                                     
                                                        
                                                      	<h4><?php echo "Rs.".$product_price ;?></h4> 
                                                    </div>
                                                    

                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                
                                                                <input type="hidden" name="currency_code" value="USD" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
            					<button type="button" onclick="location.href='<?php echo base_url();?>index.php/ProductController/viewLastProduct'" class="btn btn-block btn-success" name="editItem">Edit</button>
        					</div>

                    </div>


</div>
