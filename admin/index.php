<?php
//session_unset();
error_reporting();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<div class="wrapper">
         <div class="title">
            MYJU'S
         </div>
  <form method="post" >
            <div class="field">
               <input type="text" required name="name">
               <label>Enter User Name</label>
            </div>
            <div class="field">
               <input type="password" required name="pass">
               <label>Enter Password</label>
            </div>
            
            <div class="field">
               <input type="submit" value="Login" name="login">
            </div>   
   </form>
</div>
</body>
</html>


 <?php

$con=mysqli_connect("localhost","root","","myjus") or die("connection error");

if(isset($_POST['login']))
{

  $name=$_POST['name'];
  $pass=$_POST['pass'];

  $res=mysqli_query($con,"select * from user where name='$name' and pass='$pass'  ");

  $check=mysqli_fetch_array($res);

  if($check['redio'] == "Admin")
  {
     $_SESSION['name'] = $name;

     $_SESSION['admin'] = "Admin";
    //$name = $_POST['name']=$name;
    header("Location:admin/index.php");
    echo "<script>alert('Welcome To Admin Panel')</script>";
    
  }
  else if($check['redio']=="Principal")
  {
    $_SESSION['name'] = $name;

    $_SESSION['Teacher'] = "Teacher";
    //$name = $_POST['name']=$name;
    echo "<script>alert('Welcome To Principal Panel')</script>";
    header("Location:Principal/index.php"); 
  }
  else if($check['redio']=="Teacher")
  {
    $_SESSION['name'] = $name;

     $_SESSION['Teacher'] = "Teacher";
    //$name = $_POST['name']=$name;
    echo "<script>alert('Welcome To Techer Panel')</script>";
    header("Location:teacher/index.php"); 
  }
  else
  {
    echo "error";
  }


}
?>