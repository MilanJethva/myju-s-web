

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>MYJU'S</title>
      <link rel="stylesheet" href="css/header.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            <li>Teacher</li>
         </div>
         <ul>
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn">Book'S
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="add_book.php">Add Book's</a></li>
                  <li><a href="view_book.php">View Book's</a></li>
                  <li><a href="opration_book.php">Book Opration</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn">Video'S
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="add_video.php">Add Video's</a></li>
                  <li><a href="view_video.php">view Video's</a></li>
                  <li><a href="opration_video.php">Video Opration</a></li>
               </ul>
            </li>

            <li><a href="view_stud.php">Student'S</a></li>
            <li><a href="#">Buy a Course </a></li>
            <li><a href="view_contect.php">Contect</a></li>
            <li><a href="Suggetion.php">Suggetion</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </nav>
      
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
   </body>
</html>

