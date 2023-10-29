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
	<link rel="stylesheet" type="text/css" href="css/table.css">
	</style>
</head>
<body>
	<?php include 'header.php'?>
<center>
<h1 class="heading">Student Opration'S</h1>
<form method="post">
	<input type="" name="serch" value="" placeholder="Serch Recored " class="serch" required>
	<input type="submit" name="s" value="serch" class="btn4">

</form>

<table border=1 align="center" width="90%" class="tb" >
	<tr>
		<th class="hed">ID</th>
		<th class="hed">email</th>
		<th class="hed">Delete</th>
		<th class="hed">Update</th>
	</tr>

</body>
</html>


<?php 

if(isset($_POST['s']))
{

$serch = $_POST['serch'];

$c = mysqli_connect("localhost","root","","myjus");
		
$q = mysqli_query($c," select * from sug where name='$serch' ");
while($r = mysqli_fetch_array($q))
		{
	?>

		<tr><th><?php echo $r['id']; ?></th>
			<th><?php echo $r['email']; ?></th>
			<th><a class="btn2" href="delete_stud.php?id=<?php echo $r['id']; ?>">Delete</a></th>
			<th><a class="btn3" href="update_stud.php?id=<?php echo $r['id']; ?>">Update</a></th>
		</tr>
	
<?php }}
else
{

$c = mysqli_connect("localhost","root","","myjus");
	
$q = mysqli_query($c," select * from sug  ");
while($r = mysqli_fetch_array($q))
		{
	?>

		<tr><th><?php echo $r['id']; ?></th>
			<th><?php echo $r['email']; ?></th>
			<th><a class="btn2" href="delete_stud.php?id=<?php echo $r['id']; ?>">Delete</a></th>
			<th><a class="btn3" href="update_stud.php?id=<?php echo $r['id']; ?>">Update</a></th>
		</tr>


	 <?php } }?>
	</table>
</table>
</center>

<?php
}
else{
  header("location:../404/error.php");
}
?>
