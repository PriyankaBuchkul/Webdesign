 <?php
    include_once 'connect.php';
$id=$_GET['id'];


	
	
	mysqli_query($DBcon,"DELETE FROM testimonial where id ='$id'");
  
    
    

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "testimonial.php";';
echo '</script>';


?>