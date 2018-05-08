<!--code for Registration page-->
<?php

?>

<?php
include_once 'connect.php';
 $result=mysql_query("Select * from admin where id=$id;");		
 $row=mysql_fetch_array($result);
if(isset($_POST['change']))
{    
        
					
						 
                          $username=$_POST['username'];
                          
                            
                  
                    $re="UPDATE `admin` SET `username`='".$username."'WHERE `id`='$id'";
                  $result = mysqli_query($DBcon,$re)
                    or die ("Could not Update! ");
                   
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Thank you! UserName Update Successfully..");'; 
                        echo 'window.location.href = "manage_account.php";';
                        echo '</script>';
                        echo "Record Update Successfully";
                        //header("Location:index.html");
       
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Change UserName</title>
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
 <?php require("sidebar.php")?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active"><a href="#">Change UserName</a></li>
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
					<div class="panel-heading" style="text-align:center;"><h2>Change UserName</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
						
								<div class="row">
                                    <div class="col-md-3"></div>
									<div class="col-md-6">
										<input required type="text" disabled class="form-control"  value="<?php echo $row['username']; ?>">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
                                    <div class="col-md-3"></div>
									
								</div><br />
								  
								
                                <div class="row">
                                    <div class="col-md-3"></div>
									<div class="col-md-6">
										<input required type="text" class="form-control" name="username" placeholder="Enter New UserName">
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

