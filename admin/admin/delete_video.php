<?php
  error_reporting();
  session_start();
  $name =  $_SESSION['name'];
  if($name == true){


$c = mysqli_connect("localhost","root","","myjus");


if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	 mysqli_query($c,"delete from video where id='$id' "); 
    header("location:opration_video.php");
}
   
?>

<?php
}
else{
  header("location:../404/error.php");
}
?>
