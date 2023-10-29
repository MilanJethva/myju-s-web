<?php
  error_reporting();
  session_start();
  $name =  $_SESSION['name'];
  if($name == true){


$c = mysqli_connect("localhost","root","","myjus");


if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	 mysqli_query($c,"delete from user1 where id='$id' "); 
    header("location:view_contect.php");
}
   
?>
<?php
}
else{
  header("location:../404/error.php");
}
?>
