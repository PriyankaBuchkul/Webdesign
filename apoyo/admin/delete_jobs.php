 <?php
    include_once 'connect.php';
$id=$_GET['id'];


	
	

	
	mysqli_query($DBcon,"DELETE FROM jobs where id ='$id'");
    
    
   
  

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "jobs.php";';
echo '</script>';

//header("Location:index.html");

?>