<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="<?php echo base_url(); ?>text/javascript" src="js/move-top.js"></script>
    <script type="<?php echo base_url(); ?>text/javascript" src="js/easing.js"></script>
    <script type="<?php echo base_url(); ?>text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>

<?php include 'header.php'?>

<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
            <?php

            if ($this->session->flashdata('msg')){
                echo "<h3>".$this->session->flashdata('msg')."</h3>" ;
            }

            ?>
			<div class="login-form-grids">
				<h5>profile information</h5>

                <?php echo validation_errors();?>
                <?php echo form_open('UserControll/registerUser');?>

					<input type="text" placeholder="First Name..." name="fname" maxlength="20" required=" ">
					<input type="text" placeholder="Last Name..." name="lname" maxlength="20" required=" ">

			<!-- <div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div> -->
				    <h6>Login information</h6>

					<input type="email" placeholder="Email Address" name="email" maxlength="25" required>
					<input type="password" placeholder="Password" name="pwd" minlength="8" maxlength="10" required=" " >
					<input type="password" placeholder="Password Confirmation" minlength="8" maxlength="10" name="cpwd" required=" "  >
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox" required><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="submit" value="Register">

				<?php echo form_close();?>

			</div>
			<div class="register-home">
				<a href="home">Home</a>
			</div>

		</div>
	</div>
<!-- //register -->



<?php include 'footer.php'?>




</body>
</html>