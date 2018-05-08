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
	        
            $file = rand(1000,100000)."-".$_FILES['image']['name'];
            $file_loc = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            $file_type = $_FILES['image']['type'];
            $name=$_POST['name'];
             $descr=$_POST['descr'];
            $folder="../images/brand/";


            // new file size in KB
            $new_size = $file_size/1024;
            // new file size in KB

            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case

            $final_file=str_replace(' ','-',$new_file_name);


            if(move_uploaded_file($file_loc,$folder.$final_file) )
            {

             $re="INSERT INTO `testimonial`(`image`, `name`,'descr') VALUES ('".$file."','".$name."','".$descr."')";
          $result = mysqli_query($DBcon,$re)
            or die ("Could not insert! or Already insreted");
            if($result)
            {
                 echo '<script type="text/javascript">'; 
                            echo 'alert("Thank you! Image Added Successfully..");'; 
                          echo 'window.location.href = "gallery.php";';
                         
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
  <title>Admin | Testimonial</title>
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

    <?php include("sidebar.php")?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="gallery.php">testimonial</a></li>
		<li class="active"><a href="#">Add testimonial</a></li>
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
					<div class="panel-heading" style="text-align:center;"><h2>Add testimonial</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
								
                            
                                    <div class="row">
                                      
                                    
                                      <div class="col-md-3"></div>
								</div><br />
                                   
                            
                            
                            
                                  <div class="row">
                                      <div class="col-md-3"><label>Select Image</label></div>
                                    <div class="col-md-6">
										<input required type="file"  class="form-control" name="image">
										
									</div>
                                      <div class="col-md-3"></div>
								</div><br />
                                 <div class="row">
                                      <div class="col-md-3"><label>Enter Testimonial By :</label></div>
                                    <div class="col-md-6">
										<input  type="text"  class="form-control" name="name">
										
									</div>
                                     
                                      <div class="col-md-3"></div>
								</div>
                               <div class="row">
                                      <div class="col-md-3">
                                          <label>Enter Testimonial Words :</label></div>
                                    <div class="col-md-6">
										  <textarea required class="form-control" name="descr" placeholder="Enter Description" rows="4" cols="50"></textarea>
										
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
										
									</div>
                                     
                                      <div class="col-md-3"></div>
								</div>
							
							
								
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
				 <center><p >Crafted by <a href="http://wabitsolution.com/"><b>Apoyo Technologies</b></a> </p></center>
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