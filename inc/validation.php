
       <?php
      if(isset($_POST["Sign_up"])){
   
   if($_POST["user_password"]!=$_POST["user_confirm_password"] ){
   
   $pass=$_POST["user_password"];
   $confirm_pass=$_POST["user_confirm_password"];
     	echo" <div class='alert alert-danger'>
     	Password and Confirm password does not match</div>";
     }
     
     else{
     echo	"<div class='alert alert-success'>"
    .$_POST["user_confirm_password"]. " and ". $_POST["user_password"]. "
    Makes your password matched</div>";
     }
 

      }
      ?>
      
      <?php
      if(isset($_POST["user_email"]))
      {
          $email=$_POST["user_email"];
   	$email= filter_var($email,FILTER_SANITIZE_EMAIL);
   	$email= filter_var($email,FILTER_VALIDATE_EMAIL);
   	if(!$email)
   	{
   		echo" <div class='alert alert-danger'> email is not valid please inset a valid email</div>";
   	}
   	
   	else
   	{
   		echo"<div class='alert alert-success'>"
   		.$email. " is a valid email address</div>";
   	}
   	
   	} 
   	?> 	
      	
      