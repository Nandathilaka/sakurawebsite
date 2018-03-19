
<?php include 'links.php';?>
<body>
<?php include 'loggedHeader.php';?>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h2>Your shopping cart contains: <span></span></h2>
			<form method='post' action="<?php echo base_url()?>index.php/ProductController/saveCartProducts">
				<div class="checkout-right">			  
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quantity</th>
							<th>Product Name</th>						
							<th>Price</th>
							<th>Discount</th>
							<th>Remove</th>
						</tr>
					</thead>
				<?php
                  foreach($products as $product) { ?>
					<tr class="rem1">

						<td class="invert"><?php echo $product['id'] ?></td>
						 <input type = "hidden" name = "id[]" value = "<?php echo $product['id'] ?>"/>

						<td class="invert-image"><img src="<?php echo base_url('uploads/images/').$product['image']?>" alt=" " class="img-responsive" /></td>

						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<input type = "hidden"  name ="qty[]" style ="width:50px;" value = "1"/>

						<td class="invert"> <?php echo $product['name'] ?></td>
						<input type = "hidden" name = "name[]" value = "<?php echo $product['name'] ?>"/>
						
						<td class="invert"> <?php echo $product['price'] ?></td>
						<input type = "hidden" name = "price[]" value = "<?php echo $product['price'] ?>"/>

						<td class="invert"> <?php echo $product['discount'] ?></td>


						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   </script>
						</td>
					</tr>
					
				<?php  } ?>  
				<!--quantity-->
					<script>
					$('.value-plus').on('click', function(){
						var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
						divUpd.text(newVal);
					});

					$('.value-minus').on('click', function(){
						var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
						if(newVal>=1) divUpd.text(newVal);
					});
					</script>
				<!--quantity-->
				</table>
				<div class="checkout-right-basket">
					<!-- <a href="<?php echo base_url()?>index.php/ProductController/saveCartProducts"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a> -->
					<!-- <input type="submit" name="submit" value="checkout" class="button"  /> -->

					 <button type="submit" class="btn btn-lg btn-block btn-success" name="submit"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</button>
					 
				</div>			  
			</div>
		</form>
		<div class="checkout-right-basket">
					<a href="<?php echo base_url()?>index.php/Welcome"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
					
		</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<!-- <li>Product1 <i>-</i> <span></span></li> -->						
						<li>Total Service Charges <i>-</i> <span></span></li>
						<li>Total <i>-</i> <span></span></li>
					</ul>
				</div>				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<?php include 'footer.php';?>




<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	


</body>

</html>