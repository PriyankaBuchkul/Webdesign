 <?php
 session_start();
    include_once 'connect.php';
$id=$_GET['id'];

	
	$query = mysqli_query($DBcon,"select * from gallery where id ='$id'")or die(mysqli_error($DBcon));
	$row = mysqli_fetch_array($query);
	mysqli_query($DBcon,"DELETE FROM gallery where id ='$id'");

     $q=$row['image'];
   
    $k="images/gallery/$q";
   
   unlink($k);

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "gallery.php";';
echo '</script>';


?>