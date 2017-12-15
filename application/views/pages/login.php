<?php include 'links.php';?>
	
<body>

<?php include 'header.php';?>

<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form</h2>
            <?php

            if ($this->session->flashdata('errormsg')){
                echo "<h3>".$this->session->flashdata('errormsg')."</h3>" ;
            }

            ?>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">

                <?php echo validation_errors();?>
                <?php echo form_open('UserControll/loginUser');?>

					<input type="email" placeholder="Email Address" maxlength="250" required name="email">
					<input type="password" placeholder="Password"  minlength="8" maxlength="10" required=" " name="pwd" >
					<div class="forgot">
						<a href="#">Forgot Password?</a>
					</div>
					<input type="submit" value="Login">

                <?php echo form_close();?>

			</div>
			<h4>For New People</h4>
			<p><a href="registered">Register Here</a> (Or) go back to <a href="home">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->

<?php include 'footer.php' ;?>

</body>
</html>