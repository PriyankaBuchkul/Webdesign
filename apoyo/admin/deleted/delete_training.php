 <?php
    include_once 'connect.php';
$id=$_GET['id'];


	
	$query = mysql_query("select * from tstudent where id ='$id'")or die(mysql_error());
	$row = mysql_fetch_array($query);
	mysql_query("DELETE FROM tstudent where id ='$id'");
    mysql_query("DELETE FROM feedate where id ='$id'");
    
     $q=$row['image'];
   
    $k="../img/trainingstud/$q";
   
   unlink($k);

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "training.php";';
echo '</script>';

//header("Location:index.html");

?>