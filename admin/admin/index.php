<?php
  error_reporting();
  session_start();
  $name =  $_SESSION['name'];
  if($name == true){
?>


<!DOCTYPE html>
<html>
<head>
	<title>MYJU'S</title>
	<style type="text/css">
		

.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 600;
}
.content p{
  font-size: 30px;
  font-weight: 500;
}
	</style>
</head>
<body>

<?php include 'header.php'?>

<div class="content">
         <div class="header">
            Welcome To MYJU'S
         </div>
         <p>
            Best Dicision Bright Future.
         </p>
</div>

</body>
</html>
<?php
}
else{
  header("location:../404/error.php");
}
?>
