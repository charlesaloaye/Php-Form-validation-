		<body>
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 "> </div>  
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
      <div class="container">
      
      <div align="center">
      <font color="#35b7a"    size="10" face="georgia">SIGN UP!</font></div>
      
      <?php
      include"inc/validation.php";
      ?>
      <form method="POST" action="" name="create_account" role="form">
      <div class="form-group">  
       <br>  
<label for="username">Username</label>
      <input type="text" class="form-control" name="user_name" id="username" placeholder="Enter your username">
       </div>
      
       <div class="form-group">   
<label for="email">Email</label>
      <input type="text" class="form-control" name="user_email" id="email" placeholder="Enter your email">
      </div>
      
       <div class="form-group">      
<label for="password">Password</label>
       <input type="text" class="form-control" name="user_password" id="password" placeholder="Enter your password">
      </div>
         <div class="form-group">     
<label for="confirm_password">Confirm Password</label>
      <input type="text" class="form-control" name="user_confirm_password" id="confirm_password" placeholder="Confirm password">
      </div>
      
      <button class="btn btn-outline-primary" name="Sign_up">Sign up <i class="fa fa-register"></i> </button>
have an Account? <a href="login.php?" title="Login" class="btn btn-outline-danger">Sign in <i class="fa fa-sign-in"></i></a>
      </form>
      </div>
      
      </div>
      </div>