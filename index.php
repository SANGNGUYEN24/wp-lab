 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8" />
     <title>My personal website</title>
     <link rel="stylesheet" type="text/css" href="./css/style.css" />

     <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- <title>Login Form | CodingLab</title> -->
     <!-- <link rel="stylesheet" href="./css/loginStyle.css" /> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
 </head>

 <body>
     
     <?php 
     $page = "home";
     if (isset($_GET["page"])) {$page = $_GET["page"];}
     if (isset($_POST["page"])) {$page = $_POST["page"];}
     ?>

     <?php 
     include "./nav.php";
     include "$page.php";
     ?>

      <section>
         <!--text-->
         <div class="text-container">
             <p>Hello there,</p>
             <p>I'm Sáng</p>
             <p>Welcome to my website.</p>
             <button class="see-cv">See my CV</button>

             <!--My image-->
             <!-- <img src="image/Dev_sang.png" class="my-image" alt="my image" /> -->
         </div>
         </section>

         <div class="about">
             <div class="about-container">
                 <!--Image-->
                 <img src="image/Dev_sang.png" />
                 <!--Text-->
                 <div class="about-text">
                     <p>My full name is Nguyen Dinh Sang</p>
                     <p>
                         and I am majoring in Computer Science in Ho Chi Minh City University
                         of Technology (HCMUT)
                     </p>
                     <p>
                         I am an organizer of Google developer student clubs (GDSC).<br />
                         In the course of my studies, I have acquired an understanding of
                         cutting-edge design trends and best practices, including Mobile
                         Application and Principles of User Experience. I also have
                         experience with native, cross-platform application concepts like
                         Android and Flutter.
                     </p>
                 </div>
             </div>
         </div>

         <!--Service-->
         <!--services-container---------------------------->
         <div class="services">
             <!--text-->
             <div class="services-text">
                 <p>What I interested in?</p>
                 <p>Software</p>
                 <p>
                     I am passionate to learn all new things, my slogan is "Every moment is
                     an oppurtuity"
                 </p>
             </div>
             <div class="box-container">
                 <!--1------------->
                 <div class="box-1">
                     <span>1</span>
                     <p class="heading">Android development</p>
                     <p class="details">
                         I want to make mobile applications is easy to use, help people in
                         our community.
                     </p>
                     <button>Read more</button>
                 </div>
                 <!--2------------->
                 <div class="box-2">
                     <span>2</span>
                     <p class="heading">Flutter development</p>
                     <p class="details">
                         I want to make mobile applications is easy to use, help people in
                         our community.
                     </p>
                     <button>Read more</button>
                 </div>
                 <!--3------------->
                 <div class="box-3">
                     <span>3</span>
                     <p class="heading">UX</p>
                     <p class="details">
                         I want to make mobile applications is easy to use, help people in
                         our community.
                     </p>
                     <button>Read more</button>
                 </div>
             </div>
         </div>
         <!--Contact me-->
         <div class="contact-me">
             <p>If you want to know more about me?</p>
             <button>Contact me</button>
         </div>

         <!--footer--------------->
         <footer>
             <!--heading-->
             <p>Sang Nguyen Dinh</p>
             <!--paragraph-->
             <p>I am happy with your travel to here</p>
             <!--social-->
             <div class="social-icons">
                 <a href="https://www.facebook.com/sang.kakashi.7/"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://www.linkedin.com/in/sangndsteve/"><i class="fab fa-linkedin"></i></a>
                 <a href="https://github.com/SANGNGUYEN24"><i class="fab fa-github"></i></a>
                 <a href="https://www.youtube.com/channel/UC_2PRhodIICE9oTx0dcoyqg/featured"><i
                         class="fab fa-youtube"></i></a>
             </div>
             <!--copyright-->
             <p class="copyright">Copyright by Sang Nguyen</p>
         </footer>

         <script src="./login/validation.js"></script>
 </body>

 </html>