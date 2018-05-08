 <?php
    include_once 'connect.php';
$id=$_GET['id'];


	
	
	$query = mysql_query("select * from student where id ='$id'")or die(mysql_error());
	$row = mysql_fetch_array($query);
	mysql_query("DELETE FROM student where id ='$id'");
    
    
     $q=$row['resume'];
   
    $k="../resume/$q";
   
   unlink($k);
    
  

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you! Delete Successfully..");'; 
echo 'window.location.href = "candidate.php";';
echo '</script>';

//header("Location:index.html");

?>