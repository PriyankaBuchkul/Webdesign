 <?php
   session_start();
    include_once 'connect.php';
$id=$_GET['id'];


	
	

	$row = mysqli_fetch_array($DBcon,$query);
	mysqli_query($DBcon,"DELETE FROM comment where id ='$id'");
    
    
   
  

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "comment.php";';
echo '</script>';

//header("Location:index.html");

?>