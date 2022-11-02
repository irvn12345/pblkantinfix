<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>HOME PAGE KONSUMEN</title>
        <link rel="stylesheet" type="text/css" href="css/homestyle.css">

        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@0;1&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Condensed&family=Roboto:wght@100&family=Source+Serif+Pro:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

    </head>
    <body>

        <header>
          <a href="#" class="logo">DTEO Canteen</a>
          <div class="bx bx-menu" id="menu-icom"></div>

          <ul class="navbar">
            <li><a href="home.php">HOME</a></li>
            <li><a href="order.php">ORDER</a></li>
            <li><a href="keranjang.php"><i class='bx bx-cart'></i></a></li>
            <li><a href="checkout.php">CHECKOUT</a></li>
            <li><a href="login.php">LOGOUT</a></li> 
          </ul>

        </header>
                  <!--home start-->
                  <section class="home" id="home">
                    <div class="home-text">
                      <h1>WELCOME </h1>

                      <h2>TO DTEO <br> CANTEEN WEBSITE</h2>
                      <a href="#" class="btn">Today's Menu</a>
                    </div>
        
                    <div class="home-img">
                      <img src="image/home.png">
                    </div>
                  </section>

                  <!--About Start-->
                  <section class="about" id="about">
                    <div class="about-img">
                        <img src="image/about.png">
                    </div>

                    <div class="about-text">
                      <a href="#aboutus">
                      <span>About Us</span>
                      <h2>Reason why we <br> created this website</h2>
                      <p>
                        In overcoming the problems in the school canteen, our PBL project is an integrated canteen which aims to be a solution to these problems. This system allows students to use the school canteen but still obeys health protocols and controls the number of students who come to the canteen so that there is no crowd in the school canteen. The system used uses IoT (Internet of Things) so that students can order food in the canteen online through the application and students only need to take the ordered food.
                        <a href="#" class="btn">Learn More</a>
                      </p>
                    </div>
                  </section>

                  <!--Warung Kantin-->
                  <section class="menu" id="menu">
                    <div class="heading">
                      <span>Choose your Booth</span>
                      <h2>Fresh taste and Great Price</h2>
                    </div>

                    <div class="menu-container">
                      <div class="box">
                        <div class="box-img">
                          <img src="image/warung1.png" width="200px">
                        </div>
                        <h2>Warung Soto Bu Wiwin</h2>
                        <h3>Makanan & Minuman</h3>
                        <span>Murah dan Lezat</span>
                        <i class='bx bx-cart'></i>
                      </div>

                      <div class="menu-container">
                        <div class="box">
                          <div class="box-img">
                            <img src="image/warung2.png" width="200px">
                          </div>
                          <h2>Sate Pakdhe Kasman</h2>
                          <h3>Makanan & Minuman</h3>
                          <span>Murah dan Halal</span>
                          <i class='bx bx-cart'></i>
                        </div>

                        <div class="menu-container">
                          <div class="box">
                            <div class="box-img">
                              <img src="image/warung3.png" width="200px">
                            </div>
                            <h2>Nasi Goreng Cak Seger</h2>
                            <h3>Makanan & Minuman</h3>
                            <span>Pedes Banget Loch</span>
                            <i class='bx bx-cart'></i>
                          </div>
                          
                    </div>
                  </section>
                  
                  <!---service start-->
                  <section class="services" id="services">
                    <div class="heading">
                    <span>Services</span>
                    <h2>How to order the food?</h2>
                  </div>

                  <div class="service-container">
                    <div class="s-box">
                      <img src="image/tatacara1.png">
                      <h3>Step One</h3>
                      <p>Open your phone and Login into Vocation Canteen Website</p>
                    </div>

                    <div class="service-container">
                      <div class="s-box">
                        <img src="image/tatacara2.png">
                        <h3>Step Two</h3>
                        <p>Choose what you will eat in the day</p>
                      </div>

                    <div class="service-container">
                      <div class="s-box">
                        <img src="image/tatacara3.png">
                        <h3>Step Three</h3>
                        <p>Wait until your order finish</p>
                      </div>

                      <div class="service-container">
                        <div class="s-box">
                          <img src="image/tatacara4.png">
                          <h3>Step Four</h3>
                          <p>Pick up your order quickly and don't make crowd because it's pandemic! </p>
                        </div>

                  </div>
                  </section>

                  <!---Contact start-->
                  <section class="cta">
                    <h2>We make quality food <br> Everyday</h2>
                    <a href="#" class="btn">Let's Talk</a>
                  </section>

                  <!--Footer Start-->
                  <section id="contact">
                    <div class="footer">
                      <div class="main">
                        <div class="col">
                          <h4>Menu Links</h4>
                          <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">order</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Login</a></li>
                          </ul>
                        </div>

                        <div class="col">
                          <h4>Our Services</h4>
                          <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Developmert</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Product Managemenet</a></li>
                          </ul>
                        </div>

                        <div class="col">
                          <h4>Information</h4>
                          <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Term & Conditions</a></li>
                          </ul>
                        </div>

                        <div class="col">
                          <h4>Contact Us</h4>
                         <div class="social">
                           <a href="#"><i class='bx bxl-facebook'></i></a>
                           <a href="#"><i class='bx bxl-whatsapp'></i></a>
                           <a href="#"><i class='bx bxl-instagram'></i></a>
                           <a href="#"><i class='bx bxl-youtube'></i></a>
                         </div>
                        </div>

                      </div>
                    </div>

                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.35421246295044!2d112.79220399487448!3d-7.278633436524394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa16b161efaf%3A0x2389595a90785228!2sPak%20Nanang%20Warung%20Nasi%20Goreng!5e0!3m2!1sid!2sid!4v1652882499111!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                  </section>
    </body>
</html>


	