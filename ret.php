<?php
session_start();
?>

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
             <a href="login.php" class="sig">Alredy account?</a>
            <div class="field">
               <input type="submit" value="Login" name="b">
            </div>   
   </form>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['b']))
{
  $c=mysqli_connect("localhost","root","","myjus");

  $_SESSION['name'] = $name;

  //$uid=$_POST['name'];
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
    mysqli_query($c,"insert into user1(name,pass,vapss,email,mobie) values('$name','$pass','$vpass','$em','$mo')")or die(mysqli_error($c));

    echo "<h3>create account successfully..</h3>";
    echo "<a href='index.php'>click to login</a>";
  }
}
  ?>
  </center>

        <?php include 'footer.php'?>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

