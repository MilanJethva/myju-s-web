<?php
  error_reporting();
  session_start();
  $name =  $_SESSION['name'];
  if($name == true){
?>

<?php
 $c = mysqli_connect("localhost","root","","myjus");

$id = $_GET['id'];

$stmt=mysqli_query($c,"SELECT * from video WHERE id=$id");

$count=mysqli_num_rows($stmt);
if($count==1)
{
     $row=mysqli_fetch_array($stmt);
     $pdf=$row['url'];
     $file='../video/'.$pdf;

        header("Content-Type: application/video");
        header("Content-Disposition: attachment; filename=\"".basename($file)."\"");
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        readfile($file);
        exit;  

}
else 
{
    echo 'File not found '; 
} 
?>

<?php
}
else{
  header("location:404/error.php");
}
?>