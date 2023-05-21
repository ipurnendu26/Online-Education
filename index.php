<?php

$db_name = 'mysql:host=localhost;dbname=contact_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $courses = $_POST['courses'];
   $courses = filter_var($courses, FILTER_SANITIZE_STRING);
   $gender = $_POST['gender'];
   $gender = filter_var($gender, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `contact_form` WHERE name = ? AND number = ? AND email = ? AND courses = ? AND gender = ?");
   $select_contact->execute([$name, $number, $email, $courses, $gender]);

   if($select_contact->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{
      $insert_message = $conn->prepare("INSERT INTO `contact_form`(name, number, email, courses, gender) VALUES(?,?,?,?,?)");
      $insert_message->execute([$name, $number, $email, $courses, $gender]);
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Online Education Website Design</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="#home" class="logo">educa.</a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="about.html">about</a>
         <a href="courses.html">courses</a>
         <a href="#teachers">teachers</a>
         <a href="reviews.html">reviews</a>
         <a href="contact.html">contact</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="row">

      <div class="content">
         <h3>online <span>education</span></h3>
         <a href="#contact" class="btn">contact us</a>
      </div>

      <div class="image">
         <img src="images/homg-img.svg" alt="">
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- couter section stars  -->

<section class="count">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div class="content">
            <h3>150+</h3>
            <p>courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div class="content">
            <h3>1300+</h3>
            <p>students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div class="content">
            <h3>80+</h3>
            <p>teachers</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-face-smile"></i>
         <div class="content">
            <h3>100%</h3>
            <p>satisfaction</p>
         </div>
      </div>

   </div>

</section>

<!-- couter section ends -->




<!-- teachers section starts  -->

<section class="teachers" id="teachers">

   <h1 class="heading">expert <span>tutors</span></h1>

   <div class="swiper teachers-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/tutor-1.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/tutor-2.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/tutor-3.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/tutor-4.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/tutor-5.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/tutor-6.png" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>john deo</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- teachers section ends -->




<!-- footer section starts  -->

<footer class="footer">

   <section>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-linkedin"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-youtube"></a>
      </div>

      <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

   </section>

</footer>

<!-- footer section ends -->















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>