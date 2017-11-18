	<body>
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 "> </div>  
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
      <div class="container">
      
      <div align="center">
      <font color="#35b7a" size="10" face="georgia">SIGN IN!</font>
      </div>
      <?php
      if(isset($_POST["Sign_in"]))
      {
      	if($_POST["user_name"]=="charles" && $_POST["user_Password"]=="aloaye"){
      		
      		echo"<div class='alert alert-success'>
      	<h1 align='center'>welcome  " . $_POST["user_name"]. "</h1></div>";
      	 		 
			include"inc/footer.php";
			
			
      	exit();
      	}
      	else{
      		echo"<div class='alert alert-danger'>
      		Sorry hacker " .$_POST["user_name"]." you can't sign in</div>";
      		
      	}
      }
      ?>
      <form method="POST" action="" name="create_account" role="form">
      <div class="form-group">  
       <br>  
<label for="username">Username</label>
      <input type="text" class="form-control" name="user_name" id="username" placeholder="Enter your username">
       </div>
      
       <div class="form-group">   
<label for="pass">Password</label>
      <input type="text" class="form-control" name="user_Password" id="email" placeholder="Enter your Password">
      </div>
       <button class="btn btn-outline-danger" name="Sign_in">Sign in <i class="fa fa-sign-in"></i> </button>
      </form>
      </div>
       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 "> </div>  
      </div>
      </div>