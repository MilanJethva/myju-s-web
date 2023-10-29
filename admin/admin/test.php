
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      .main
      {
        padding: 10px;
        display: inline-flex;
        align-items: center;
      }
      embed{
        border: 2px solid black;
        margin-top: 30px;

      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <?php include 'header.php'?>
    <div class="div1">
      <?php
      $c = mysqli_connect("localhost","root","","myjus");

     $q = mysqli_query($c,"select * from pdf");
      while ($info=mysqli_fetch_array($q)) {
        ?>
        <div class="main">
      <embed type="application/pdf" src="<?php echo $info['url'] ; ?>" width="900" height="500">
        </div>
    <?php
      }

      ?>

    </div>

  </body>
</html>
