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
	</head>
<body>
	<?php include 'header.php'?>
<center>
<h1 class="heading">Videos Opration'S</h1>
		
	<form method="post">
	
	<a href="add_video.php" class="btn1" >Add new</a>

	<input type="" name="serch" value="" placeholder="Serch Recored " class="serch" >
	<select  name="course" class="catagory">
        <option value="BCA">BCA</option>
        <option value="BSCIT">BSCIT</option>
        <option value="MCA">MCA</option>
        <option value="MSCIT">MSCIT</option>
      </select>
	<input type="submit" name="s" value="serch" class="btn4">

</form>
<table border=1 align="center" width="90%"  >
	<tr>
		<th class="hed">ID</th>
		<th class="hed">Name</th>
		<th class="hed">Video'S</th>
		<th class="hed">Description</th>
	    <th class="hed">Course</th>
		<th class="hed">Detlete</th>
		<th class="hed">Update</th>
		
	</tr>

</body>
</html>




<?php 


if(isset($_POST['s']))
{

$serch = $_POST['serch'];
$course= $_POST['course'];


$c = mysqli_connect("localhost","root","","myjus");
		
$q = mysqli_query($c," SELECT * FROM VIDEO WHERE name='$serch' or course='$course' ");
while($r = mysqli_fetch_array($q))
		{
	?>

		<tr><th><?php echo $r['id']; ?></th>
			<th><?php echo $r['name']; ?></th>
			<th><?php  echo "<video  class= 'hg' controls width='300' margin='20'>
            <source src='$r[url]' type='video/mp4'></video >" ;?></th>
    	    <th><?php echo $r['des']; ?></th>
    	    <th><?php echo $r['course']; ?></th>
			<th><a class="btn2" href="delete_video.php?id=<?php echo $r['id']; ?>">Delete</a></th>
			<th><a class="btn3" href="update_video.php?id=<?php echo $r['id']; ?>">Update</a></th>
		</tr>
	<?php } }
else
{

$c = mysqli_connect("localhost","root","","myjus");
		
$q = mysqli_query($c," select * from video  ");

while($r = mysqli_fetch_array($q))
		{
	?>

		<tr><th><?php echo $r['id']; ?></th>
			<th><?php echo $r['name']; ?></th>
			<th><?php  echo "<video  class= 'hg' controls width='300' margin='20'>
            <source src='$r[url]' type='video/mp4'></video >" ;?></th>
    	    <th><?php echo $r['des']; ?></th>
    	    <th><?php echo $r['course']; ?></th>
			<th><a class="btn2" href="delete_video.php?id=<?php echo $r['id']; ?>">Delete</a></th>
			<th><a class="btn3" href="update_video.php?id=<?php echo $r['id']; ?>">Update</a></th>
		</tr>

<?php }}?>
	</table>
</table>
<br><br><br><br>

</center>

<?php
}
else{
  header("location:../404/error.php");
}
?>
