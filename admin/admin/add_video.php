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

   <link rel="stylesheet" type="text/css" href="css/lo.css">
  
</head>
<body>
  
<?php include 'header.php'?>
<center>
  <div class="hm">
  <div class="wrapper">
         <div class="title">
            Upload Video
         </div>

   <form method="post" class="box" enctype="multipart/form-data">
    <div class="field">
               <input type="text" required name="name">
               <label>Enter File  Name</label>
    </div>
    <div class="up" > 
  
          <input type="file" name="p" >
    </div>    
    
    <div class="field">
               <input type="text" required name="dis">
               <label>Enter Description</label>
    </div>

      <select class="filed1" name="course">
        <option value="BCA">BCA</option>
        <option value="BSCIT">BSCIT</option>
        <option value="MCA">MCA</option>
        <option value="MSCIT">MSCIT</option>
      </select>
 
    <div class="field">
               <input type="submit" value="Upload" name="ins">
    </div> 
    
   </form>
</div></div></center>
</body>
</html>


	<?php
	if(isset($_POST['ins']))
	{
		$c = mysqli_connect("localhost","root","","myjus");

      $n=$_POST['name'];
  		$video = "video/".$_FILES['p']['name'];
  		$ds=$_POST['dis'];
      $course=$_POST['course'];
  
		move_uploaded_file($_FILES['p']['tmp_name'], "video/".$_FILES['p']['name']);
		mysqli_query($c,"insert into video(name,url,des,course) values('$n','$video','$ds','$course')");
		echo "<script>alert('Add Success fully')</script>";
		
	}	
	?>
</div></center>

<?php
}
else{
  header("location:../404/error.php");
}
?>
