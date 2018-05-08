<!--code for Add New Sunject-->
<?php


?>

<?php
include_once 'connect.php';
$imgerr='';
$err_first_name="";
$err_last_name="";
$err_register=0;
if(isset($_POST['register']))
{

                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $uname=$_POST['uname'];
                $password=$_POST['password'];
               
                       $re="INSERT INTO `adminlogin`(`uname`,`password`,`fname`,`lname`) VALUES ('".$uname."','".$password."','".$fname."','".$lname."')";
                      
                        $res_ins_query=mysqli_query($DBcon,$re);
                        if($res_ins_query)
                        {
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Thank you! Register Successfully..");'; 
                            echo 'window.location.href = "admin.php";';
                         
                            echo '</script>';
                        }
                       else{
                             echo '<script type="text/javascript">'; 
                            echo 'alert("Not Register Successfully..");'; 
                            echo 'window.location.href = "add_admin.php";';
                            echo '</script>';
                       }


                
}
           
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Add Admin</title>
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

  
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include("sidebar.php")?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="admin.php">Admin</a></li>
		<li class="active"><a href="#">Add Admin</a></li>
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
					<div class="panel-heading" style="text-align:center;"><h2>Add Admin</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
								<div class="row">
									<div class="col-md-6">
										<input required type="text" class="form-control" name="fname" placeholder="Enter First Name">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
                                    <div class="col-md-6">
                                        <input required type="text" class="form-control" name="lname" placeholder="Enter Last Name">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									
									</div>
									
								</div><br />
								<div class="row">
									<div class="col-md-6">
                                        <input required type="text" class="form-control" name="uname" placeholder="Enter User Name">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
									
									<div class="col-md-6">
                                       
										<input required type="password" class="form-control" name="password" placeholder="Password">
										 
										
									</div>
									
                                   
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
				 <center><p >Crafted by <a href="#"><b>Apoyo Technology</b></a> </p></center>
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