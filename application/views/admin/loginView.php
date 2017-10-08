<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">

  <title>SakuraThala Admin Log-in</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

  <link rel="stylesheet" href="<?php echo base_url()?>template/css/loginStyle.css">

  
</head>

<body>
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form>
    <input type="text" name="email" placeholder="Enter email">
    <input type="password" name="password" placeholder="Enter password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  
</body>
</html>
