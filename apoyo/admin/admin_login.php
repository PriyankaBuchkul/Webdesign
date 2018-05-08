<?php 
session_start();
if(!isset($_SESSION['$username'])=="")
{
 header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login Page</title>
	 
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/jquery.js"></script>


</head>
 <style>
 
 body {
    background: url('dist/img/pro.jpg') no-repeat fixed center center;
    background-size: cover;
}
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
.panel-primary {
     background-color: white !important;
}
.indexfooter{
margin-top:210px;
 background-color: white;
}
     @media (max-width: 750px ) {
         .indexfooter{
             margin-top:115px;
             background-color: white;
            }
     }
</style> 
<body>


 <div class="container">
	<div class="row">
		<!--start div 3-->
		<div class="col-md-3"></div>
		<!--/end div 3-->
		
		<!--Registration form code-->
		<div class="col-md-6">
				  
					<div class="panel panel-primary" style="margin-top:120px;">
						<div class="panel-heading" style="text-align:center;"><h2>Admin Login</h2></div>
						
						<div class="panel-body">
							<form name="form" action="" method="post" enctype="multipart/form-data">
							  <input type="text" class="form-control" name="username" placeholder="Username"  autofocus="" required/>
								<br />
							  <input type="password" class="form-control" name="password" placeholder="Password"  required/>
								<br />
						 	  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="login">Login</button>  
					  
							</form>
							<!--end form-->
 
						</div>
						<!--end panel body -->
					</div>
					<!--end panel-->
		</div>
		
		<!--start div 3-->
		<div class="col-md-3"></div>
		<!--/end div 3-->
		
	</div>
	<!--end  row-->
 </div><!--end container-->
<!--start footer-->
 <footer class="main-footer indexfooter" >
    <div class="row">
			<div class="col-md-4 col-xs-4">
				
			</div>
			<div class="col-md-4 col-xs-4">
				  <center><p >Crafted by <a href="#">Apoyo Technologies</a></center>
			<div class="col-md-4 col-xs-4">
				
                      </div>
        </div>
     </div>
  </footer>
    
</body>
</html>
<?php
include "connect.php";
if(isset($_POST['login'])){
 $Username = $_POST['username']; 
 $Password = $_POST['password'];

 		
         $result = mysqli_query("SELECT * from adminlogin where uname ='".$Username."' and password = '".$Password."'"); 
    $subject_data=mysqli_fetch_assoc($result);
		 $id=$subject_data['id'];
    
    
     if(mysqli_num_rows($result)>0){

         if(!empty($Password)){
			 session_start();
			 $_SESSION['$username']=$id;
            $_SESSION['last_login_timestamp'] = time();
			
           header("location:index.php");
          }
           else if(empty($Password))
		   {
             echo "<br> password incorrect filed ";
           }
 
        }else{
			
			echo '<script type="text/javascript">'; 
			echo 'alert("Invalid Username and Password!..");'; 
			echo '</script>';
		}

}

 ?>