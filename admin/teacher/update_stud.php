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
               <input type="password" required name="pass">
               <label>Enter Password</label>
            </div>
            <div class="field">
               <input type="password" required name="vpass">
               <label>confirm Password</label>
            </div>
            <div class="field">
               <input type="email" required name="email">
               <label>Enter Email</label>
            </div>
            <div class="field">
               <input type="mobile" required name="mobile">
               <label>Enter mobile</label>
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
  $pass=$_POST['pass'];
  $vpass=$_POST['vpass'];
  $em=$_POST['email'];
  $mo=$_POST['mobile'];
  

   if ($pass != $vpass)
   {
    echo "<script>alert('not matched')</script>";
   }

   else
   {
    $q =mysqli_query($c,"update user1 set id='$id',name='$uid',pass='$pass',vapss='$vpass',email='$em',mobie='$mo' where id='$id' ");
        
        $result = $q; 
       if($result)
       {
        echo "<script>alert('Add Success fully')</script>";
        header("location:view_stud.php");
       }
     else
     {
      echo "<script>alert('please enter correct data')</script>";
      header("location:view_stud.php");
     }
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
