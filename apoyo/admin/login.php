<?php
include_once 'connect.php';

//check if form is submitted
if (isset($_POST['login'])) {
   
    $email = mysqli_real_escape_string($DBcon, $_POST['email']);
    $password = mysqli_real_escape_string($DBcon, $_POST['password']);
    $result = mysqli_query($DBcon, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
       
        session_start();
			 $_SESSION['$userid']=$row['id'];
            $_SESSION['$username']=$row['name'];
            $_SESSION['last_login_timestamp'] = time();
            header("location:index.php");
      
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Apoyotech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
     <style>
 
 body {
    background: url('dist/img/pro.jpg') no-repeat fixed center center;
    background-size: cover;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 64px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.panel-primary {
     background-color: white !important;
}
.indexfooter{
margin-top:210px;
 background-color: white;
}
     @media (max-width: 750px ) {
         .indexfooter{
             margin-top:115px;
             background-color: white;
            }
     }
</style>
</head>
    
    
    
    
<body>

<br><br><br>
    <div class="container">
	<div class="row">
		<!--start div 3-->
		<div class="col-md-3"></div>
		<!--/end div 3-->
		
		<!--Registration form code-->
		<div class="col-md-6">
				  
					<div class="panel panel-primary" style="margin-top:120px;">
						<div class="panel-heading" style="text-align:center;"><h2>Admin Login</h2></div>
						
						<div class="panel-body">
							
            <form role="form"  method="post" name="loginform">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                                    </div>
                                   <div class="form-group">
                                        <label for="name">Password</label>
                                        <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                                    </div>

                                                <br />
							 
							  <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                    </div>
							</form>
							<!--end form-->
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
						</div>
						<!--end panel body -->
					</div>
					<!--end panel-->
		</div>
		
		<!--start div 3-->
		<div class="col-md-3"></div>
		<!--/end div 3-->
		
	</div>
	<!--end  row-->
        <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        New User? <a href="register.php">Sign Up Here</a>
        </div>
    </div>
 </div><!--end container-->

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>