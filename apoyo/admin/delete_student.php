 <?php
    include_once 'connect.php';
$id=$_GET['id'];


	
	
	$query = mysqli_query($DBcon,"select * from student where id ='$id'")or die(mysqli_error($DBcon));
	$row = mysqli_fetch_array($query);
	mysqli_query($DBcon,"DELETE FROM student where id ='$id'");
    
    
     $q=$row['resume'];
   
    $k="resume/$q";
   
   unlink($k);
    
  

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "candidate.php";';
echo '</script>';

//header("Location:index.html");

?>