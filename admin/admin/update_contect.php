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

   <link rel="stylesheet" type="text/css" href="css/logn.css">
 
</head>
<body>
  
<?php include 'header.php'?>
<center>
  <div class="hm">
  <div class="wrapper">
         <div class="title">
           Update Student
         </div>

   <form method="post" class="box" enctype="multipart/form-data">
    <div class="field">
               <input type="text" required name="name">
               <label>Enter User Name</label>
            </div>
            <div class="field">
               <input type="email" required name="email">
               <label>Enter Email</label>
            </div>
            <div class="field">
               <input type="text" required name="sub">
               <label>Subject</label>
            </div>
            <div class="field">
               <input type="text" required name="suj">
               <label>MEassage</label>
            </div>
            
            <div class="field">
               <input type="submit" value="Update" name="b">
            </div>   
    
    
   </form>
</div></div></center>
</body>
</html>


<center>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body>

<?php
if(isset($_POST['b']))
{
  $c=mysqli_connect("localhost","root","","myjus");

  $id=$_GET['id'];

   $uid=$_POST['name'];
  $em=$_POST['email'];
  $sub=$_POST['sub'];
  $suj=$_POST['suj'];
   
    $q =mysqli_query($c,"update contect set id='$id',name='$uid',email='$em',sub='$sub',sug='$suj' where id='$id' ");
        
        $result = $q; 
       if($result)
       {
        echo "<script>alert('Add Success fully')</script>";
        header("location:view_contect.php");
       }
     else
     {
      echo "<script>alert('please enter correct data')</script>";
      header("location:view_contect.php");
     }
  }

  ?>
  </center>

<?php
}
else{
  header("location:../404/error.php");
}
?>
