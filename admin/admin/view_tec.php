<?php
  error_reporting();
  session_start();
  $name =  $_SESSION['name'];
  if($name == true){
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.hed
		{
			margin-top: 5px;
			background-color: #13547a;
  
		}
		.tb
		{
			margin-top: 25px;
		}
	</style>
</head>
<body>
	<?php include 'header.php'?>
<h1 class="hed" align="center">User Data Desplay</h1>
<center>
<table border=1 align="center" width="90%" class="tb" >
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>pass</th>
		<th>vpass</th>
		<th>Teacher</th>
	</tr>

</body>
</html>




<?php 

$c = mysqli_connect("localhost","root","","myjus");
		
$q = mysqli_query($c," select * from user ");
while($r = mysqli_fetch_array($q))
		{
	?>

		<tr><th><?php echo $r['id']; ?></th>
			<th><?php echo $r['name']; ?></th>
			<th><?php echo $r['pass']; ?></th>
			<th><?php echo $r['vpass']; ?></th>
			<th><?php echo $r['redio']; ?></th>
		</tr>
	<?php } ?>
	</table>
</table>
</center>

<?php
}
else{
  header("location:../404/error.php");
}
?>
