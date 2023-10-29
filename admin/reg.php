
<center>
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

   <form method="post" class="box">
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
               <label>Enter Password</label>
     </div>
     <div class="redio">
      <input type="radio" name="redio" value="Admin"/>Admin 
      <input type="radio" name="redio" value="Principal"/>Principal
      <input type="radio" name="redio" value="Teacher"/>Teacher
      </div>
      <div class="field">
               <input type="submit" value="Login" name="b">
      </div> 
    
   </form>
</div>
</body>
</html>
  
<?php
if(isset($_POST['b']))
{
  $c=mysqli_connect("localhost","root","","myjus");

  $n=$_POST['name'];
  $pass=$_POST['pass'];
  $vpass=$_POST['vpass'];
  $redio=$_POST['redio'];
  

   if ($pass != $vpass)
   {
    echo "<script>alert('not matched')</script>";
   }

   else
   {
    mysqli_query($c,"insert into user(name,pass,vpass,redio) values('$n','$pass','$vpass','$redio')");

   echo "<script>alert('Success fully')</script>";
   
  }
}
  ?>
  </center>
            