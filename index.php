<?php
  //require_once('/login/loder/loder.php');
?>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login Page | Pedro Reves</title>
  <link rel="stylesheet" href="/frist-project/login/assets/css/style.css">
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form action="/frist-project/login/action/sing-up.php" method="POST">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email to registration</span>
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="mobail" placeholder="mobailnumber">
        <button type="submit" name="sing_up">Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
    <form method="POST" action="/frist-project/login/action/sing-in.php">  
    <h1>Sign In</h1>  
    <div class="social-icons">  
        <a href="#" class="icons"><i class="fa-brands fa-google-plus-g"></i></a>  
        <a href="#" class="icons"><i class="fa-brands fa-facebook-f"></i></a>  
        <a href="#" class="icons"><i class="fa-brands fa-github"></i></a>  
        <a href="#" class="icons"><i class="fa-brands fa-linkedin-in"></i></a>  
    </div>  
    <span>or use your email/password</span>  
    <input type="text" name="hesab" placeholder="mobail / email / username" required>  
    <input type="password" name="ramz" placeholder="Password" required>  
    <a href="#">Forget your Password?</a>  
    <div style="display: inline">  
        <button type="submit" name="vorod">Sign In</button>  
        <a href="otp.php" style="margin-left: 15px;">sendOTP</a>  
    </div>  
</form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./assets/script/script.js"></script>
</html>