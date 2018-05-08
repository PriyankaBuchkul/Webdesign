<!--code for Registration page-->
<?php

?>

<?php
include_once 'connect.php';
if(isset($_POST['change']))
{    
        
					
						  $opass=$_POST['opass'];
                          $npass=$_POST['npass'];
                          $cpass=$_POST['cnpass'];
                          
                            
                  
                    $result=mysqli_query($DBcon,"Select * from admin where id=$id;");		
                		  
						
						   $row=mysqli_fetch_array($result);
						   if($row['password']==$opass)
							{
                               if($npass==$cpass)
								{	
                                   mysqli_query($DBCon,"update admin set password='$npass' where id=$id;");
                                    echo '<script type="text/javascript">'; 
                                    echo 'alert("Thank you! Password Change Successfully..");'; 
                                    echo 'window.location.href = "manage_account.php";';
                                    echo '</script>';
                                  
                                    //header("Location:index.html");
                                   
                                  
                                }
							   else
                               {
                                   echo '<script type="text/javascript">'; 
                                    echo 'alert("New Password And Confirm password are not Same..");'; 
                                  
                                    echo '</script>';
                                   
                                    //header("Location:index.html");
                                   
                                   
                               }
                                   
							} 
						   else
							{
                                    echo '<script type="text/javascript">'; 
                                    echo 'alert("Old Password is Wrong..");'; 
                                  
                                    echo '</script>';
                                  
                                    //header("Location:index.html");
							   		
                            } 
						   
                     
 

	
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Change Password</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!--CSS for registration form center -->
  <style>
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
	.main-footer {
    background: #fff;
    padding: 0px;
    color: #444;
    /* border-top: 1px solid #d2d6de; */
}

  </style>
  <!--/CSS for registration form center -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/templatemo_logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/templatemo_logo.png" class="img-circle" alt="User Image">
                <p>
                  Admin
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left"style="margin-left:100px;">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/templatemo_logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="margin-left:5px;">Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li >
          <a href="index.php">
           <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
		
		<li>
          <a href="add_event.php">
           <i class="fa fa-pencil"></i> <span>Add Event</span>
          </a>
        </li>
				
		<li>
          <a href="show_event.php">
           <i class="fa fa-database"></i> <span>Show Event</span>
          </a>
        </li>
          <li  class="active">
          <a href="manage_account.php">
           <i class="fa fa-user"></i> <span>Manage Account</span>
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
    
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active"><a href="#">Change Password</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="container">
	<div class="row">
		<!--this code for register form in center-->
		<div class="col-xs-2"></div>
		<!--/this code for register form in center-->
		
		<!--Registration form code-->
		<div class="col-xs-8">
				<div class="panel panel-primary" style="margin-top:50px;">
					<div class="panel-heading" style="text-align:center;"><h2>Change Password</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
						
								<div class="row">
                                    <div class="col-md-3"></div>
									<div class="col-md-6">
										<input type="password" class="form-control" name="opass" placeholder="Enter Old Password">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
                                    <div class="col-md-3"></div>
									
								</div><br />
								  
								<div class="row">
                                    <div class="col-md-3"></div>
									<div class="col-md-6">
										<input  type="password" class="form-control" name="npass" placeholder="New Password">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
                                    <div class="col-md-3"></div>
									
								</div><br />
                                <div class="row">
                                    <div class="col-md-3"></div>
									<div class="col-md-6">
										<input  type="password" class="form-control" name="cnpass" placeholder="Confirm password">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
                                    <div class="col-md-3"></div>
									
								</div><br />
								
								<div class="row">
									<div class="col-xs-4">
									  
									</div>
									
									<div class="col-xs-4">
										<button type="submit" name="change" class="btn btn-primary btn-block btn-flat">Submit</button>
									</div>
									<!-- /.col -->
									<div class="col-xs-4">
									  
									</div>
								</div>
									
						</form>
					</div>
					<!--/end panel body-->
				</div>
				<!--/end panel-->
							
		</div>
		<!--End div 8 -->
		 
		
		
		<!--start div 1-->
		<div class="col-xs-2"></div>
		<!--/end div 1-->
		
	</div>
	<!--/end row-->
  </div>
<!--/end container-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.main content-wrapper -->
    <footer class="main-footer">
    <div class="row">
			<div class="col-md-4 col-xs-4">
				 
			</div>
			<div class="col-md-4 col-xs-4">
					 <center><p >Crafted by <a href=""><b>Apoyo Technologies</b></a> </p></center>
			</div>
			<div class="col-md-4 col-xs-4">
			
			</div>
	</div>
  </footer>
</div>
<!-- ./wrapper -->

 

  


<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
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

