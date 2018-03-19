
<!-- header -->
<div class="agileits_header">
    <div class="container">
        <div class="skura_offers">
           <!--  <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products">SHOP NOW</a></p> -->
        </div>
        <div class="agile-login">
            <ul>
                 <li><a href="<?php echo base_url()?>index.php/UserControll/logoutUser">LogOut</a></li>
                <li><a href="contact">Help</a></li>



                 <!-- <?php if($logged_in){                       

                    ?>                
                <li><a href="<?php echo base_url()?>index.php/UserControll/logoutUser">LogOut</a></li>
                <li><a href="contact">Help</a></li>

                <?php }  else {

                    ?>

                <li><a href="<?php echo base_url()?>index.php/PageController/createAccount"> Create Account </a></li>
                <li><a href="<?php echo base_url()?>index.php/PageController/login">Login</a></li>
                <li><a href="contact">Help</a></li>

                <?php } ?> -->

            </ul>
        </div>
        <!-- <div class="product_list_header">
            <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="display" value="1">
                <button class="sakura-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>
        </div> -->




       
            <a href="<?php echo base_url()?>index.php/ProductController/shoppingCartView"><span><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>Checkout Here</a>
                    
       
      
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="skura_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : 0716600520</li>

            </ul>
        </div>
        <div class="sakura_logo_products_left">
            <h1><a href="home">sakura thala</a></h1>

        </div>
        <div class="skura_search">
            <form action="<?php echo base_url()?>index.php/Welcome/search_keyword" >
                <input type="search" id="search" name=earch" placeholder="Search for a Product..." required="">
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
                    
                    <!-- 
                   
                    <li><a href="offers">Offers</a></li>
                    <li><a href="contact">Contact</a></li> -->
                </ul>
            </div>
        </nav>
    </div>
</div>

<!-- //navigation -->
<!-- breadcrumbs -->

<!-- //breadcrumbs -->

<!-- //main slider-banner -->