

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
   <link rel="stylesheet" type="text/css" href="css/view_book1.css">
  </head>
  <body>
  	<?php include 'header.php'?>
    <center><h1 class="heading">All book</h1>
<form method="post">
  <input type="" name="serch" value="" placeholder="Serch Recored " class="serch" >
  <select  name="course" class="catagory">
        <option value="BCA">BCA</option>
        <option value="BSCIT">BSCIT</option>
        <option value="MCA">MCA</option>
        <option value="MSCIT">MSCIT</option>
      </select>
  <input type="submit" name="s" value="serch" class="btn4">

</form></center>

 <div class="div1">
<?php
      
if(isset($_POST['s']))
{

$serch = $_POST['serch'];
$course= $_POST['course'];



$c = mysqli_connect("localhost","root","","myjus");


$q = mysqli_query($c,"  SELECT * FROM pdf WHERE name='$serch' or course='$course' ");
while ($row=mysqli_fetch_array($q)) 
{
?>
<section class="main">
<div class="main2">
 
<embed class="box" type="application/pdf" src="<?php echo $row['url'] ; ?>" width="380" height="400">
        
<div class="title">
<?php
echo  $row['name'];?>
</div>
<div class="description">
<?php 
echo $row['des']; ?>
</div>
</div>
</section>
    <?php
      }}


else
{
  $c = mysqli_connect("localhost","root","","myjus");

$q = mysqli_query($c,"select * from pdf");
while ($row=mysqli_fetch_array($q)) {
?>

<section class="main">
<div class="main2">

  
   <form method="post">
    <button name="view">view</button>
  </form>

<?php

if(isset($_POST['view']))
{

$file = $row['url'];
$filename = $row['name'];
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $filename . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

// Read the file
readfile($file);
}
?>
         
<div class="title">
<?php
echo  $row['name'];?>
</div>
<div class="description">
<?php 
echo $row['des']; ?>
</div>
</div>
</section>
    <?php
      }}
?>




</div>

  </body>
</html>
 

