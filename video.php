<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>MYJU'S</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">

        <style type="text/css">
    
body
{
  background-color: #000;
}
    section
    {
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
   padding-left: 30px;
   
    }
    .title
  {
  margin-top: 20px;
  font-size: 2rem;
    color: black;
     padding-left: 20px;
   padding-bottom: 20px;
  }
  .description
  {
  line-height: 1.5;
   font-size: 1.7rem;
   color: #888;
   margin-top: 1rem;
   padding-left: 20px;
   padding-bottom: 20px;
  }
  .main
  {
   display: inline-flex;
  }
  .main2
  {
    background-color: #eee;
    border-radius: .5rem;
    width: 27rem;
    object-fit: cover;
        
  }
  .box
  {
    margin: 25px;
    border-radius: .5rem;
  }

.serch
{
  border-radius: 10px;
  border: 2px solid lightblue;
  width: 500px;
  height: 40px;
  padding-left: 20px;
  font-size: 1.5rem;
  margin-top: 40px;

}

.catagory
{
  border-radius: 10px;
  border: 2px solid lightblue;
  width: 250px;
  height: 40px;
  padding-left: 20px;
  margin-top: 40px;
  font-size: 1.5rem;
}

.btn4
{

      background: blue;
    color:white;
    text-decoration: none;
    align-items: center;
    padding: 5px;
    border-radius: 6px;
    margin-left: 20px;
    margin-top: 40px;
    font-size: 20px;
    width: 90px;
    border: 4px solid blue;

}
.btnd
{

    background: blue;
    color:white;
    text-decoration: none;
    align-items: center;
    padding: 5px;
    border-radius: 6px;
    margin-left: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 18px;
    width: 120px;
    border: 4px solid blue;

}
.btnb
{

    background: lightgreen;
    color:black;
    text-decoration: none;
    align-items: center;
    padding: 5px;
    border-radius: 6px;
    margin-left: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 18px;
    width: 90px;
    border: 4px solid lightgreen;

}


  </style>
</head>

<?php include 'header.php'?>

        
            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-12">

                            <h2 class="text-white">Video'S</h2>
                        </div>

                    </div>
                </div>
            </header>


<center>
  
  <form method="post">

  <input type="" name="serch" value="" placeholder="Serch Video " class="serch" >
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

$q = mysqli_query($c," SELECT * FROM video WHERE name='$serch' or course='$course'");

while($row = mysqli_fetch_array($q))
{
?>

<section class="main">
<div class="main2">
  <video width="380px"; controls class="box">
    <source src="<?php echo 'admin/teacher/'.$row['url'];  ?>" type="video/mp4">
  </video>

 <div class="title">
    <?php
    echo  $row['name'];?>
    </div>
    <div class="description">
    <?php 
    echo $row['des']; ?>
    </div>
     <div>
        <button class="btnd">DOWLOAD</button>
        <a href="buy.php" class="btnb">BuyNow</a>
    </div>
 </div>
</section>
<?php 
}
}
else
{
  $c = mysqli_connect("localhost","root","","myjus");

$q = mysqli_query($c,"select * from video");

while($row = mysqli_fetch_array($q))
{
?>

<section class="main">
<div class="main2">
  <video width="380px"; controls class="box">
    <source src="<?php echo 'admin/teacher/'.$row['url'];  ?>" type="video/mp4">
  </video>

 <div class="title">
    <?php
    echo  $row['name'];?>
    </div>
    <div class="description">
    <?php 
    echo $row['des']; ?>
    </div>
    <div>
        <a  name="down" href="download_vid.php?id=<?php echo $row['id']; ?>" class="btnd" >DOWLOAD</a>
        <a href="buy.php" class="btnb">BuyNow</a>
    </div>
   
 </div>
</section>
<?php 
}
}
?>


		<?php include 'footer2.php'?>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>