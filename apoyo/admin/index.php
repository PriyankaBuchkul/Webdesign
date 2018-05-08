<?php
include_once 'connect.php';
?>
<?php
session_start();
$userid=$_SESSION['$userid'];
$username=$_SESSION['$username'];

if(isset($userid)=="")
{
    header('location:login.php');
}
else
{
    if ((time() - $_SESSION['last_login_timestamp']) > 900)
    {
        header("location:logout.php");
        exit;
    }
    else 
    {
        $_SESSION['last_login_timestamp'] = time();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome - <?php echo $username; ?> </title>
  
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
    <a href="index.php" class="logo" style="background-color:#007cc3 ;">
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
           
            
               <?php if (isset($userid)) { ?>
                <li><p class="navbar-text"  style="color:white ;">Signed in as <?php echo $username; ?></p></li>
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
          <p style="margin-left:5px;"><?php echo $username; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:white">MAIN MENU</li>
        <li >
          <a href="index.php" class="active">
           <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
		
		<li >
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
          <a href="admin.php">
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
            
            
		<!-- for spaciing purpose give col -->
		<div class="col-md-1"></div>
		<!-- for spaciing purpose give col -->
		<!-- /.col -->
        <div class="col-md-10">
          <!-- Widget: user widget style 1 -->

          </div>
          <!-- /.widget-user -->
        
		
		<!-- for spaciing purpose give col -->
		<div class="col-md-1"></div>
		<!-- /for spaciing purpose give col -->
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
