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
		<th class="hed">Name</th>
		<th class="hed">pass</th>
		<th class="hed">vpass</th>
		<th class="hed">email</th>
		<th class="hed">mobile</th>
		
	</tr>

</body>
</html>


<?php 




$c = mysqli_connect("localhost","root","","myjus");
		
$q = mysqli_query($c," select u1.*, u.user from user1 u1, user u where u1.id=u.id ");
while($r = mysqli_fetch_array($q))
		{
	?>

		<tr><th><?php echo $r['id']; ?></th>
			<th><?php echo $r['name']; ?></th>
			<th><?php echo $r['pass']; ?></th>
			<th><?php echo $r['vapss']; ?></th>
			<th><?php echo $r['email']; ?></th>
			<th><?php echo $r['mobie']; ?></th>
		</tr>
	
<?php }?>

	</table>
</table>
</center>
