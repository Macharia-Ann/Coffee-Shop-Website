<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Website</title>
    <link rel="stylesheet" href="styles.css">
<!-- link to font awesome for icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- linking swiper Css -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

 <!-- favicon icon on the browser tab -->
  <link rel="icon" href="images/hero-section-img.png" type="image/png">
</head>
<body>
    <?php
include 'connect.php';
    ?>
   <header>
    <nav class="navbar section-content">
       <a href="#" class="nav-logo">
        <h2 class="logo-text">☕ Grab Coffee</h2>
       </a>
       <ul class="nav-menu">
        <button id="menu-close-button"> <i class="fas fa-times"></i></button>
<li><a href="#" class="nav-link">Home</a></li>
<li><a href="#about" class="nav-link">About</a></li>
<li><a href="#menu" class="nav-link">Menu</a></li>
<li><a href="#testimonials" class="nav-link">Testimonials</a></li>
<li><a href="#gallery" class="nav-link">Gallery</a></li>
<li><a href="#contact" class="nav-link">Contact</a></li>

</ul>
<button id="menu-open-button"> <i class="fas fa-bars"></i></button>

    </nav>
   </header> 

   <!-- Hero Section -->
   <main>
    <section class="hero-section">
       <div class="section-content">
        <div class="hero-details">
            <h2 class="title">Best Coffee In Town</h2>
            <h3 class="subtitle">Make your day great with our special coffee!</h3>
<p class="description">Experience the rich aroma and bold flavor of our freshly brewed coffee — crafted with love to energize 
    your day and warm your soul.</p>
     <div class="buttons">
           <a href="#" class="button order-now">Order Now</a>
            <a href="#contact" class="button contact-us">Contact Us</a> 
        </div>
        </div>

       
       </div> 
<div class="hero-image-wrapper">
    <img src="images/hero-section-img.png" alt="" class="hero-image">
</div>

    </section>


      <!-- About section -->
      <section class="about-section" id="about">
        <div class="section-content">
            <div class="about-image-wrapper">
                <img src="images/having-coffee.jpg" alt="" class="about-image">
            </div>
            <div class="about-details">
                <h2 class="section-title">About Us</h2>
                <p class="text">At Grab Coffee Shop, we believe every great day starts with a perfect cup. Nestled in the heart of the community, our cozy shop serves up rich, handcrafted coffee made from the finest beans — brewed fresh just for you. Whether you're grabbing a quick cup on the go or settling in for a relaxing break, Grab Coffee 
                    is your daily dose of warmth, flavor, and comfort.</p>
<div class="social-link-list">
    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>

</div>
            </div>
        </div>
      </section> 


         <!-- Menu Section -->
<section class="menu-section" id="menu">
   <h2 class="section-title">Our Menu</h2> 
    <div class="section-content">
        <ul class="menu-list">
            <li class="menu-item">
            <img src="images/hot-beverage.png" alt="" class="menu-image">
            <h3 class="name">Hot Beverages</h3>
            <p class="text">We serve a variety of hot beverages, from bold espresso to soothing teas — all brewed to warm your
                 heart and lift your spirit.</p></li>

                 <li class="menu-item">
            <img src="images/cold-beverage.png" alt="" class="menu-image">
            <h3 class="name">Cold Beverages</h3>
            <p class="text">Cool down with our refreshing cold beverages — from iced coffee delights to fruity chilled teas, crafted to 
                energize and refresh you anytime.</p></li>

                  <li class="menu-item">
            <img src="images/refreshments.png" alt="" class="menu-image">
            <h3 class="name">Refreshments</h3>
            <p class="text">Treat yourself to our tasty refreshments — light bites and sweet treats perfectly paired with your 
                favorite drink for a satisfying break.</p></li>

                  <li class="menu-item">
            <img src="images/special-combo.png" alt="" class="menu-image">
            <h3 class="name">Special Combo</h3>
            <p class="text">Enjoy our special combo meals — a perfect blend of your favorite bites and drinks, crafted for flavor, value, and ultimate
                 satisfaction in every serving.</p></li>

                  <li class="menu-item">
            <img src="images/dessert.png" alt="" class="menu-image">
            <h3 class="name">Dessert</h3>
            <p class="text">Indulge in our delightful desserts — from rich cakes to sweet pastries, each bite is a perfect ending 
                to your coffee experience.</p></li>

                  <li class="menu-item">
            <img src="images/burger.png" alt="" class="menu-image">
            <h3 class="name">Burger & French Fries</h3>
            <p class="text">Savor our juicy burgers paired with crispy golden fries — a classic combo made fresh to
                 satisfy your cravings every time.</p></li>
        </ul>
    </div>
</section>






   <!-- Testimonials Section -->
    <section class="testimonial-section" id="testimonials">
        <h2 class="section-title">Testimonials</h2>
        <div class="section-content">
            <div class="slider-container swiper">
                <div class="slider-wrapper">
                    <ul class="testimonial-list swiper-wrapper">
                        <li class="testimonial swiper-slide">
                            <img src="images/person1.jpg" alt="" class="user-image">
                            <h3 class="name">James Muriuki</h3>
                            <i class="feedback">Best coffee I’ve had in ages! Cozy place and friendly staff.</i>
                        </li>
                         <li class="testimonial swiper-slide">
                            <img src="images/person2.jpg" alt="" class="user-image">
                            <h3 class="name">Jayden Kilonzo</h3>
                            <i class="feedback">The perfect spot to unwind with a great cup of coffee.</i>
                        </li>
                         <li class="testimonial swiper-slide">
                            <img src="images/person3.jpg" alt="" class="user-image">
                            <h3 class="name">Brian Odhiambo</h3>
                            <i class="feedback">Loved the iced latte and the vibe — definitely coming back!</i>
                        </li>
                        <li class="testimonial swiper-slide">
                            <img src="images/person4.jpg" alt="" class="user-image">
                            <h3 class="name">Methuselah Bwana</h3>
                            <i class="feedback">Grab Coffee is my daily stop — consistent and delicious.</i>
                        </li>
                        <li class="testimonial swiper-slide">
                            <img src="images/person5.jpg" alt="" class="user-image">
                            <h3 class="name">Daniel Ndegwa</h3>
                            <i class="feedback">Great service, rich flavor, and always fresh.</i>
                        </li>
                        <li class="testimonial swiper-slide">
                            <img src="images/person6.jpg" alt="" class="user-image">
                            <h3 class="name">Faith Tumaini</h3>
                            <i class="feedback">Their desserts with coffee are a match made in heaven!</i>
                        </li>
                    </ul>
 <!-- pagination -->
  <div class="swiper-pagination"></div>
  <!-- navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

</main>

    <!-- Linking swiper script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


   <!-- Gallery Section -->
<section class="gallery-section" id="gallery">
    <h2 class="section-title">Gallery</h2>
    <div class="section-content">
        <ul class="gallery-list">
            <li class="gallery-item">
                <img src="images/hot-coffee.jpg" alt="" class="gallery-image">
            </li>
            <li class="gallery-item">
                <img src="images/gallery2.jpg" alt="" class="gallery-image">
            </li>
               <li class="gallery-item">
                <img src="images/gallery3.jpg" alt="" class="gallery-image">
            </li>   <li class="gallery-item">
                <img src="images/gallery4.jpg" alt="" class="gallery-image">
            </li>   <li class="gallery-item">
                <img src="images/special-combo.png" alt="" class="gallery-image">
            </li>   <li class="gallery-item">
                <img src="images/gallery6.jpg" alt="" class="gallery-image">
            </li>
        </ul>
    </div>
</section>

   <!-- Contact Section -->
<section class="contact-section" id="contact">
<h2 class="section-title">Contact Us</h2>
<div class="section-content">
    <ul class="contact-info-list">
<li class="contact-info">
    <i class="fa-solid fa-location-crosshairs"></i>
    <p> Grab Coffee, Riverside Lane, Westlands, Nairobi</p>
</li>
<li class="contact-info">
    <i class="fa-regular fa-envelope"></i>
    <p> info@grabcoffeeshop.com</p>
</li>
<li class="contact-info">
    <i class="fa-solid fa-phone"></i>
    <p>(+254) 710606816</p>
</li>
<li class="contact-info">
    <i class="fa-regular fa-clock"></i>
    <p>Sunday - Friday: 9:00 AM - 5: 00 PM</p>
</li>
<li class="contact-info">
    <i class="fa-regular fa-clock"></i>
    <p>Saturday: Closed</p>
</li>
<li class="contact-info">
    <i class="fa-solid fa-globe"></i>
    <p>www.codersherryweb.com</p>
</li>
    </ul>
    <form action="" class="contact-form" method="post">
        <input type="text" placeholder="Your name" name="name" class="form-input" required>
        <input type="text" placeholder="Your email" name="email" class="form-input" required>
<textarea class="form-input" name="message" required></textarea>
<button class="submit-button" name="submit">Submit</button>
    </form>
</div>
        <?php
//send data to the database
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//check if message was inserted
$select="select * from `portfolio` where message='$message'";
$result=mysqli_query($conn,$select);


 if ($result && mysqli_num_rows($result) > 0) {
    echo "<script>alert('Thank you for your message!')</script>";

}
else{
    //insert into the bd
    $insert="insert into `portfolio` (name, email, message) values('$name','$email','$message')";
    $res=mysqli_query($conn,$insert);
    if($res){
          echo "<script>alert('Thank you for reaching out to us, we will get back to you!');

   window.location.href = window.location.href;
   </script>";
    }

}
}

?>
</section>

   <!-- Footer Section -->
<footer class="footer-section">
    <div class="section-content">
        <p class="copyright-text">&copy; 2025 Grab Coffee Shop</p>
        <div class="social-link-list">
    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
        </div>
        
        <p class="policy-text">
            <a href="" class="policy-link">Privacy Policy</a>
            <span class="separator">.</span>
            <a href="" class="policy-link">Refund Policy</a>

        </p>
    </div>
</footer>

   <!-- script file -->
    <script src="script.js"></script>
</body>
</html>