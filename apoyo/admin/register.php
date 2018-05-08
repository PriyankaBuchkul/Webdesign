<?php
session_start();




include_once 'connect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($DBcon, $_POST['name']);
    $email = mysqli_real_escape_string($DBcon, $_POST['email']);
    $password = mysqli_real_escape_string($DBcon, $_POST['password']);
    $cpassword = mysqli_real_escape_string($DBcon, $_POST['cpassword']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($DBcon, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome - <?php echo $_SESSION['usr_name']; ?> </title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <style>
	.widget-user .widget-user-header{
		padding:20px;
		height:220px;
		border-top-right-radius:3px;
		border-top-left-radius:3px
		}
	.widget-user .widget-user-image>img{
		width:140px;
		height:auto;
		border:3px solid #fff
		}
  .content {
    min-height: 400px;
    padding: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
	}
	.widget-user .widget-user-image {
    position: absolute;
    top: 80px;
    left: 50%;
    margin-left: -45px;
}
.main-footer {
    background: #fff;
    padding: 0px;
    color: #444;
    /* border-top: 1px solid #d2d6de; */
}
	

  </style>
  

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
   <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Apoyo Technologies</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
           
            
               <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            
          </li>
            
        </ul>
      </div>
    </nav>
  </header>
  

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/templatemo_logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="margin-left:5px;"><?php echo $_SESSION['usr_name']; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:white">MAIN MENU</li>
        <li >
          <a href="index.php">
           <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
		
		<li>
          <a href="candidate.php">
           <i class="fa fa-pencil"></i> <span>Resume Details</span>
          </a>
        </li>
		
         
            <li>
          <a href="comment.php">
           <i class="fa fa-user"></i> <span>contactbox</span>
          </a>
        </li>
            <li>
          <a href="gallery.php">
           <i class="fa fa-user"></i> <span>Brand</span>
          </a>
        </li>
            <li>
          <a href="team.php">
           <i class="fa fa-user"></i> <span>Team</span>
          </a>
        </li>
            <li>
          <a href="admin.php"  class="active">
           <i class="fa fa-user"></i> <span>Admin</span>
          </a>
        </li>
          
          
           <li>
          <a href="testimonial.php">
           <i class="fa fa-user"></i> <span>Testimonial</span>
          </a>
        </li>
		  <li>
          <a href="jobs.php">
           <i class="fa fa-user"></i> <span>Jobs</span>
          </a>
        </li>
		
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Your Virtual Partner !!!!!!!!</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
               <section class="content">
	<div class="container">
	<div class="row">
		<!--this code for register form in center-->
		
		<!--/this code for register form in center-->
		
		<!--Registration form code-->
		<div class="col-xs-11">
				<div class="panel panel-primary" style="margin-top:50px;">
					<div class="panel-heading" style="text-align:center;"><h2>Add Admin</h2></div>
							
					<div class="panel-body">
						 <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
								
								<div class="row">
									<div class="col-md-6">
										
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                        	
										
                    </div>
									
									</div>
                                    <div class="col-md-6">
                                           <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" >
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
										
									
									</div>
									
								</div><br />
								<div class="row">
									<div class="col-md-6">
                                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
										
									</div>
									
									<div class="col-md-6">
                                       <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
										 
										
									</div>
									
                                   
								</div><br />
								  
							
								
								<div class="row">
									<div class="col-xs-4">
									  
									</div>
									
									<div class="col-xs-4">
										<div class="form-group">
                        <input type="submit" name="signup" value="ADD" class="btn btn-primary" />
                        <input type="reset"  value="RESET" class="btn btn-primary" />
                    </div>
									</div>
									<!-- /.col -->
									<div class="col-xs-4">
									  
									</div>
								</div>
									
						</form>
                          <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
					</div>
					<!--/end panel body-->
				</div>
				<!--/end panel-->
							
		</div>
		<!--End div 8 -->
		 
		<div class="col-xs-1">
        </div>
		
		<!--start div 1-->
		
		<!--/end div 1-->
		
	</div>
         <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">    
        Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>
	<!--/end row-->
  </div>
<!--/end container-->
    </section>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            </div>
    </section>
    <!-- /.content -->
      
	</div>
    
     <footer class="main-footer">
    <div class="row">
			<div class="col-md-4 col-xs-4">
				
			</div>
			<div class="col-md-4 col-xs-4">
				 <center><p >Crafted by <a href="#"><b>Apoyo Technologies</b></a> </p></center>
			</div>
			<div class="col-md-4 col-xs-4">
				
			</div>
	</div>
  </footer>

        <!-- /end content-wrapper -->
  </div>
  <!-- /wrapper -->

 



<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
