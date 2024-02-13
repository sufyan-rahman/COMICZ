<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>


<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/avishak.jpg" alt="">
         <p>"Amazing website! Was looking for my fav comics and i found them all right here!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Avishak Sikdar</h3>
      </div>

      <div class="box">
         <img src="images/nihad.jpg" alt="">
         <p>"I'm so glad I discovered this book web store. The prices are unbeatable, and the quality of their books is exceptional. I appreciate the personalized book recommendations they provide based on my interests. It's like having my own personal book curator!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nihad Tanfiz</h3>
      </div>

      <div class="box">
         <img src="images/maisha.jpg" alt="">
         <p>"This book web store is my go-to place for all my reading needs. Their customer service is top-notch and helpful in addressing any questions. The reviews and ratings from other customers help me make informed decisions about the books I choose. I'm a loyal customer for life!" </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maisha Mahzabeen</h3>
      </div>

      <div class="box">
         <img src="images/ihtimam.jpg" alt="">
         <p>"As a book lover, I appreciate the wide range of genres available at this web store. They cater to different tastes, and I've discovered some hidden gems thanks to their recommendations. The ordering process is smooth, and the books always arrive in excellent condition. Highly recommended for fellow book enthusiasts!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ihtimam Raja</h3>
      </div>

      <div class="box">
         <img src="images/asif2.jpg" alt="">
         <p>"Shopping at this book web store is a delightful experience. Their website is user-friendly, making it easy to browse and find the books I'm interested in. The prices are reasonable, and the occasional promotions are a bonus. I'm always excited to receive my package, and they never disappoint!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Asif Mozaffar</h3>
      </div>

      <div class="box">
         <img src="images/nahid.jpg" alt="">
         <p>"I've been a loyal customer of this book web store for years, and I can't imagine buying books anywhere else. Their collection is extensive, covering both popular titles and niche genres. The quality of their books is consistently high, and their customer service team is friendly and responsive." </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nahid Hassan</h3>
      </div>

   </div>

</section>



     



</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>