<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Listing Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">

        <link rel="stylesheet" href="css/login.css">

<?php include 'header.php'?>
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">

                            <h2 class="text-white">Buy A Course</h2>
                        </div>

                    </div>
                </div>
            </header>
 
<center>
  <div class="hm">
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
            <a href="ret.php" class="sig">create a new account?</a>
            <div class="field">
               <input type="submit" value="Login" name="login">
            </div>   
   </form>
</div>
</div>
</center>

</body>
</html>
<?php include 'footer.php'?>

<?php

$con=mysqli_connect("localhost","root","","myjus") or die("connection error");

if(isset($_POST['login']))
{

  $name=$_POST['name'];
  $pass=$_POST['pass'];

  $res=mysqli_query($con,"select * from user1 where name='$name' and pass='$pass' ");
  if($check=mysqli_fetch_array($res))
  {
    echo "<script>alert('Success fully')</script>";
    header("location:index.php");
  }
  else
  {
    echo "<h2>please Enter valid UID and PASS</h2>";
  }


}
?>

        <?php include 'footer.php'?>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

