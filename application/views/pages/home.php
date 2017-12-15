
<?php include 'links.php';?>
<body>
<!-- header -->
<div class="agileits_header">
    <div class="container">
        <div class="skura_offers">
            <p>LOOK TODAY'S DISCOUNTS <a href="products">SHOP NOW</a></p>
        </div>
        <div class="agile-login">
            <ul>
                <li><a href="<?php echo base_url()?>index.php/PageController/createAccount">Create Account</a></li>
                <li><a href="<?php echo base_url()?>index.php/PageController/login">Login</a></li>
                <li><a href="contact">Help</a></li>

            </ul>
        </div>
        <div class="product_list_header">
            <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="display" value="1">
                <button class="sakura-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="skura_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : 033 4 234 567</li>

            </ul>
        </div>
        <div class="sakura_logo_products_left">
            <h1><a href="home">Sakura Thala Sweet Shop</a></h1>
        </div>
        <div class="skura_search">
            <form action="#" method="post">
                <input type="search" name="Search" placeholder="Search for a Product..." required="">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation-agileits">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url()?>index.php/Welcome" class="act">Home</a></li>
                    <!-- Mega Menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                <div class="multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        <h6>All Products</h6>
                                        <li><a href="groceries">Gingerly rolls</a></li>
                                        <li><a href="groceries">Gingerly balls</a></li>
                                        <li><a href="groceries">Toffees</a></li>
                                        <li><a href="groceries">Other gingerly seeds related products</a></li>
                                        
                                    </ul>
                                </div>

                            </div>
                        </ul>
                    </li>
                    
                    
                    <li><a href="#">Offers</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- //navigation -->
<!-- main-slider -->
<ul id="demo1">
    <li>
        <img src="<?php echo base_url()?>images/slideimg5.jpg" alt="" />
        <!--Slider Description example-->
        <div class="slide-desc">
            <h3>Real Taste</h3>
        </div>
    </li>
    <li>
        <img src="<?php echo base_url()?>images/slideimg4.jpg" alt="" />
        <div class="slide-desc">
            <h3>Live healthy !!! Eat  healthy !!!</h3>
        </div>
    </li>

    <li>
        <img src="<?php echo base_url()?>images/slideimg2.jpg" alt="" />
        <div class="slide-desc">
            <h3>Enjoy our offers</h3>
        </div>
    </li>
</ul>
<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h2>Our Products</h2>
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Advertised offers</a></li>
                    <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Today Offers</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="agile-tp">
                            <h5>Advertised this week</h5>
                            <p class="sakura-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
                        </div>
                        <div class="agile_top_brands_grids">

                        <?php  foreach ($products as $pro ){

                            ?>

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
                                                        <!-- <a href="products"><img title=" " alt=" " src="<?php echo base_url()?>images/thala1.png" /></a> -->
                                                        <a href="products"><img title=" " alt=" " src="<?php echo base_url('uploads/images/').$pro->product_image;?>" /></a>


                                                        <p><?php echo $pro->product_title ;?></p>
                                                        <div class="stars">
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                        </div>
                                                        
                                                        <h4><?php echo "Rs.".$pro->product_price ;?></h4>
                                                    </div>
                                                    

                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="<?php echo $pro->product_title ;?>" />
                                                                <input type="hidden" name="amount" value="<?php echo "Rs.".$pro->product_price ;?>" />
                                                                <input type="hidden" name="discount_amount" value="<?php echo "Rs.".$pro->product_discount ;?>" />
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


                        <?php
                            }
                        ?>
                       
                            <div class="clearfix"> </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 sakura_footer_grid">
                <h3>Contact</h3>

                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="#">info@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></li>
                </ul>
            </div>
            <div class="col-md-3 sakura_footer_grid">
                <h3>Information</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about">About Us</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact">Contact Us</a></li>                    
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products">Special Products</a></li>
                </ul>
            </div>
            <div class="col-md-3 sakura_footer_grid">
                <h3>Category</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries">Groceries</a></li>
                    
                </ul>
            </div>
            <div class="col-md-3 sakura_footer_grid">
                <h3>Profile</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products">Store</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout">My Cart</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login">Login</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered">Create Account</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© 2017 Super Market. All rights reserved | Design by Group 15
        </div>
    </div>

</div>
<div class="footer-botm">
    <div class="container">
        <div class="sakura_layouts-foot">
            <ul>
                <li><a href="#" class="sakura_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="sakura_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="sakura_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="payment-sakura">
            <img src="images/card.png" alt=" " class="img-responsive">
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
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
<script src="<?php echo base_url()?>js/minicart.min.js"></script>
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
<script src="<?php echo base_url()?>js/skdslider.min.js"></script>
<link href="<?php echo base_url()?>css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
<!-- //main slider-banner -->
</body>
</html>