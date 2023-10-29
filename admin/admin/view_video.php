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
  <link rel="stylesheet" type="text/css" href="css/view_video1.css">
</head>
<body>
  

<?php include 'header.php'?>
 <center><h1 class="heading">playlist videos</h1>
<form method="post">
  <input type="" name="serch" value="" placeholder="Serch Recored " class="serch" >
  <select  name="course" class="catagory">
        <option value="BCA">BCA</option>
        <option value="BSCIT">BSCIT</option>
        <option value="MCA">MCA</option>
        <option value="MSCIT">MSCIT</option>
      </select>
  <input type="submit" name="s" value="serch" class="btn4">
</form>
 </center>
<?php 

if(isset($_POST['s']))
{

$serch = $_POST['serch'];
$course= $_POST['course'];


$c = mysqli_connect("localhost","root","","myjus");

$q = mysqli_query($c," SELECT * FROM VIDEO WHERE name='$serch' or course='$course' ");

while($row = mysqli_fetch_array($q))
{
?>
<section class="main">

<div class="main2">
    <?php ?>
    <div class="box">
    <?php
    echo "<video  class= 'hg' controls width='395'>
    <source src='$row[url]' type='video/mp4'></video >" ;?>
    <div class="title">
    <?php
    echo  $row['name'];?>
    </div>
    <div class="description">
    <?php 
    echo $row['des']; ?>
    </div>
    </div>
    
</div>
</section>
<?php 
}}
else
{
  $c = mysqli_connect("localhost","root","","myjus");

$q = mysqli_query($c,"select * from video  ");

while($row = mysqli_fetch_array($q))
{
?>
<section class="main">

<div class="main2">
    <?php ?>
    <div class="box">
    <?php
    echo "<video  class= 'hg' controls width='395'>
    <source src='$row[url]' type='video/mp4'></video >" ;?>
    <div class="title">
    <?php
    echo  $row['name'];?>
    </div>
    <div class="description">
    <?php 
    echo $row['des']; ?>
    </div>
    </div>
    
</div>
</section>
<?php 
}}
?>

</body>
</html>

<?php
}
else{
  header("location:../404/error.php");
}
?>
