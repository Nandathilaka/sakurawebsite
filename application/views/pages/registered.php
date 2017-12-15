
<?php include 'links.php';?>

<body>

<?php include 'header.php';?>

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



<?php include 'footer.php';?>


</body>
</html>