<!--code for Add New Sunject-->
<?php
session_start();
?>
 <?php
                   include_once 'connect.php';  
                    $id=$_GET['id'];
					
						$query = mysqli_query($DBcon,"select * from jobs where id = '$id'")or die(mysqli_error($DBcon));
						$row = mysqli_fetch_array($query);
                            
                          ?>

<?php

$imgerr='';
$err_first_name="";
$err_last_name="";
$err_register=0;
$req2='';
$req3='';
$req4='';
$req5='';

if(isset($_POST['register']))
{
	         $tab=$_POST['tab'];
            $title=$_POST['title'];
            $subtitle=$_POST['subtitle'];
            $req1=$_POST['req1'];
        
         
            $re="UPDATE `jobs` SET `tab`='".$tab."',`title`='".$title."',`subtitle`='".$subtitle."',`req1`='".$req1."' WHERE `id`='$id'";
                  $result = mysqli_query($DBcon,$re)
                    or die ("Could not Update! ");
                    if($result)
                    {
                         echo '<script type="text/javascript">'; 
                            echo 'alert("Thank you! Record Update Successfully..");'; 
                             echo 'window.location.href = "jobs.php";';
                                               
                            echo '</script>';
                       
                    } 
           
        
          


                       
}
           
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Jobs</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
      #example1 img{
    height: 50px;
    width: 50px;
}
  </style>
  <!--/CSS for registration form center -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

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
           
            
               <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text"  style="color:white ;">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
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
          <a href="index.php" >
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
          <a href="jobs.php" class="active">
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
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="jobs.php">Jobs</a></li>
		<li class="active"><a href="#">Update Jobs</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
            <!-- Main content -->
    <section class="content">
	<div class="container">
	<div class="row">
		<!--this code for register form in center-->
		
		<!--/this code for register form in center-->
		
		<!--Registration form code-->
		<div class="col-xs-11">
				<div class="panel panel-primary" style="margin-top:50px;">
					<div class="panel-heading" style="text-align:center;"><h2>Update Jobs</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
								
								<div class="row">
									<div class="col-md-2">
										
										
									</div>
                                    <div class="col-md-8">
                                         <label>Tab</label>
                                        <input required type="text" class="form-control" name="tab" value="<?php echo $row['tab']?>">
										
									
									</div>
									<div class="col-md-2">
                                       
									</div>
								</div><br />
                                	<div class="row">
									<div class="col-md-2">
										
										
									</div>
                                    <div class="col-md-8">
                                         <label>Title</label>
                                        <input required type="text" class="form-control" name="title" value="<?php echo $row['title']?>" >
									
									
									</div>
									<div class="col-md-2">
                                       
									</div>
								</div><br />
                                	<div class="row">
									<div class="col-md-2">
										
										
									</div>
                                    <div class="col-md-8">
                                         <label>SubTitle</label>
                                        <input required type="text" class="form-control" name="subtitle" value="<?php echo $row['subtitle']?>" >

									
									</div>
									<div class="col-md-2">
                                       
									</div>
								</div><br />
								<div class="row">
									<div class="col-md-2">
                                       
										
										
									</div>
									<div class="col-md-8">
                                         <label>Requirement1</label>
                                        <textarea required class="form-control" name="req1"  rows="4" cols="50"><?php echo $row['req1']?></textarea>
										
										
										
									</div>
                                   <div class="col-md-2">
                                      
										
										
									</div>
								</div><br />
						<br />
                       <br />
                           <br />
                           <br />
								
								  
								
								<div class="row">
									<div class="col-xs-4">
									  
									</div>
									
									<div class="col-xs-4">
										<button type="submit" name="register" class="btn btn-primary btn-block btn-flat">Submit</button>
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
		 
		<div class="col-xs-1">
        </div>
		
		<!--start div 1-->
		
		<!--/end div 1-->
		
	</div>
	<!--/end row-->
  </div>
<!--/end container-->
    </section>
<!--/end container-->
<!--datatable of all subject-->
	
<!--end datatable of all subjets-->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.main content-wrapper -->
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

</div>
<!-- ./wrapper -->

  
  

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>