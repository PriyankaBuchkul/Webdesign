 <?php
    include_once 'connect.php';
$id=$_GET['id'];


	
	$query = mysqli_query($DBcon,"select * from team where id ='$id'")or die(mysqli_error($DBcon));
	$row = mysqli_fetch_array($query);
	mysqli_query($DBcon,"DELETE FROM team where id ='$id'");
   
    
     $q=$row['image'];
   
    $k="images/team/$q";
   
   unlink($k);

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "team.php";';
echo '</script>';

//header("Location:index.html");

?>