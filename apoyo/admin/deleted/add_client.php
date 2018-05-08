<!--code for Add New Sunject-->
<?php
session_start();
$username=$_SESSION['$username'];
if(isset($_SESSION['$username'])=="")
{
    header('location:admin_login.php');
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


<?php
  include_once 'connect.php';  
$imgerr='';
$err_first_name="";
$err_last_name="";
$err_register=0;

if(isset($_POST['register']))
{
	        $name=$_POST['cname'];
            $file = rand(1000,100000)."-".$_FILES['image']['name'];
            $file_loc = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            $file_type = $_FILES['image']['type'];

            $folder="../img/client/";


            // new file size in KB
            $new_size = $file_size/1024;
            // new file size in KB

            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case

            $final_file=str_replace(' ','-',$new_file_name);


            if(move_uploaded_file($file_loc,$folder.$final_file) )
            {

            $re="INSERT INTO `client`(`name`, `image`) VALUES ('".$name."','".$file."')";
          $result = mysql_query($re)
            or die ("Could not insert! or Already insreted");
            if($result)
            {
                 echo '<script type="text/javascript">'; 
                            echo 'alert("Thank you! Image Added Successfully..");'; 
                          echo 'window.location.href = "client.php";';
                         
                            echo '</script>';
            } 
            }


                    
                     
            
          


                       
}
           
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Client</title>
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
		
		<li >
          <a href="candidate.php">
           <i class="fa fa-pencil"></i> <span>Candidate</span>
          </a>
        </li>
				
		<li >
          <a href="training.php">
           <i class="fa fa-database"></i> <span>Training</span>
          </a>
        </li >
          <li >
          <a href="fees.php">
           <i class="fa fa-user"></i> <span>Fees</span>
          </a>
        </li>
            <li>
          <a href="comment.php">
           <i class="fa fa-user"></i> <span>Comment</span>
          </a>
        </li>
            <li >
          <a href="gallery.php">
           <i class="fa fa-user"></i> <span>Gallery</span>
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
          
            <li class="active">
          <a href="client.php">
           <i class="fa fa-user"></i> <span>Client</span>
          </a>
        </li>
           <li>
          <a href="news.php">
           <i class="fa fa-user"></i> <span>News</span>
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
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="client.php">Client</a></li>
		<li class="active"><a href="#">Add Client</a></li>
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
        <div class="col-xs-2"></div>
		<!--Registration form code-->
		<div class="col-xs-6">
				<div class="panel panel-primary" style="margin-top:50px;">
					<div class="panel-heading" style="text-align:center;"><h2>Add Client</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
								
                            
                                    <div class="row">
                                      <div class="col-md-3"><label>Company Name</label></div>
                                    <div class="col-md-6">
                                        
                                             <input required type="text" class="form-control" name="cname" placeholder="Enter Company Name">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        
									</div>
                                      <div class="col-md-3"></div>
								</div><br />
                                
                                  <div class="row">
                                      <div class="col-md-3"><label>Select Logo</label></div>
                                    <div class="col-md-6">
										<input required type="file"  class="form-control" name="image">
										
									</div>
                                      <div class="col-md-3"></div>
								</div><br />
                               
							
								
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
		 
		<div class="col-xs-4">
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
				 <center><p >Crafted by <a href="http://wabitsolution.com/"><b>Wab IT Solution</b></a> </p></center>
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