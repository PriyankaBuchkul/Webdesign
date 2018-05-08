<!--code for home page-->


<?php

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome - <?php echo $userRow['username']; ?> </title>
  
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
 <?php include("sidebar.php") ?>
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
		  <marquee direction="left" scrollamount="15">
         <img src="images/Slider-1.png" class="user-image" width="900px;" height="500px">
		  <img src="images/Slider-2.png" class="user-image" width="900px;" height="500px">
		   <img src="images/Slider-3.png" class="user-image" width="900px;" height="500px"> 
		   <img src="images/Slider-4.png" class="user-image" width="900px;" height="500px">
		 
		 </marquee>
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
