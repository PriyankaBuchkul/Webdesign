<!--code for Registration page-->

<?php
include_once 'connect.php';
$imgerr='';
$err_first_name="";
$err_last_name="";
$err_register=0;
if(isset($_POST['register']))
{
	
	$caption=$_POST['caption'];
	$desc=$_POST['desc'];
	$date=$_POST['date'];
	
    $file = rand(1000,100000)."-".$_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];

        $folder="../images/resume/";


        // new file size in KB
        $new_size = $file_size/1024;
        // new file size in KB

        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);
       
    list($width, $height) = getimagesize($file_loc);

    if( $new_size<=500)
        {
        if($width==1800 && $height==1200)
            {
                    if(move_uploaded_file($file_loc,$folder.$final_file))
                    {	

                        $sql_ins_query="INSERT INTO `event`(`image`, `caption`,`dec`, `date`) VALUES ('".$file."','".$caption."','".$desc."','".$date."')";

                        $res_ins_query=mysqli_query($DBcon,$sql_ins_query);
                        if($res_ins_query)
                        {
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Thank you! Register Successfully..");'; 
                            echo 'window.location.href = "show_event.php";';
                         
                            echo '</script>';
                        }
                       else{
                           echo '<script type="text/javascript">'; 
                            echo 'alert("Not Register Successfully..");'; 
                            echo 'window.location.href = "show_event.php";';
                            echo '</script>';
                       }


                    }
            }
            else
            {
                                echo '<script type="text/javascript">'; 
                                echo 'alert("Please check image dimensions..!(Image width=1800 height=1200 is mandatory)");'; 

                                echo '</script>';

            }
    }
 else
        {
                            echo '<script type="text/javascript">'; 
                            echo 'alert("Please check image Size..!(Image Size is less than 500KB is mandatory)");'; 

                            echo '</script>';

        }

	
	

}
?>



  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | News</title>
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
    <!-- Main content -->
    <section class="content">
	<div class="container">
	<div class="row">
		<!--this code for register form in center-->
		
		<!--/this code for register form in center-->
		
		<!--Registration form code-->
		<div class="col-xs-11">
				<div class="panel panel-primary" style="margin-top:50px;">
					<div class="panel-heading" style="text-align:center;"><h2>Add Event</h2></div>
							
					<div class="panel-body">
						<form name="form" action="" method="post" enctype="multipart/form-data">
								
								
								<div class="row">
									<div class="col-md-6">
										<input required type="text" class="form-control" name="caption" placeholder="Enter Caption">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
									<div class="col-md-6">
                                        <textarea required class="form-control" name="desc" placeholder="Enter Description" rows="4" cols="50"></textarea>
										
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
										
									</div>
								</div><br />
								  
								<div class="row">
									<div class="col-md-6">
										<input required type="date" class="form-control" name="date" placeholder="Enter Date">
										<span class="glyphicon glyphicon-edit form-control-feedback"></span>
									</div>
                                    <div class="col-md-6">
                                       
										<input required type="file" class="form-control" name="image" placeholder="Insert Image">
										<span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                         <h5><b>*Image dimensions width=1800 height=1200 <br>*Image Size less than 500KB is mandatory..!!</b> </h5>
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
    <!-- /.content -->
 
 </body>
 </html>