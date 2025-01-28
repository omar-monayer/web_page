<?php

include 'Conect.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/About-us.css">
    <title>About us Page</title>
</head>
<body>
    <header>
    <section class="nav-bar" id="nav-bar">  

            
<nav class="navbar bg-body-tertiary fixed-top" id="nav2">
         <div class="container-fluid">
             <a class="navbar-brand" href="#">WIRE THE FUTURE</a>
             <button class="navbar-toggler burger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
             <div class="offcanvas-header">
                 <h5 class="offcanvas-title" id="offcanvasNavbarLabel">WIRE THE FUTURE</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
             <div class="offcanvas-body">
                 <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="test.php"><i class="fa-solid fa-house"></i> Home</a>
                     <a class="nav-link active" aria-current="page" href="Service.php"><i class="fa-solid fa-hands-holding-circle"></i> Service</a>
                     <a class="nav-link active" aria-current="page" href="About-us.php"><i class="fa-solid fa-people-group"></i> About us</a>
                     <a class="nav-link active" aria-current="page" href="Contact-us.php"><i class="fa-solid fa-envelope"></i> Cotact us</a>
                     <a class="nav-link active" aria-current="page" href="Profile.php"><i class="fa-solid fa-user"></i> Profile</a>
                 </li>
                
                     </ul>
             </div>
             </div>
         </div>
         </nav>
           
         <nav class="nav1">
             <a id="logo"><img src="images/logowire.PNG" width='70' height='50' class="nav_image"></a>
             <a class="nav-icon" href="test.php"><i class="fa-solid fa-house"></i> Home</a>&nbsp;
             <a class="nav-icon" href="Service.php"><i class="fa-solid fa-hands-holding-circle"></i> Service</a>&nbsp;
             <a class="nav-icon" href="About-us.php"><i class="fa-solid fa-people-group"></i> About us</a>&nbsp;
             <a class="nav-icon" href="Contact-us.php"><i class="fa-solid fa-envelope"></i> Contact us</a>&nbsp;
             <a id="profile" href="Profile.php"><i class="fa-solid fa-user"></i> Profile</a>&nbsp;
         </nav>



</section>  
    </header>
    <main>
      <section class="part-1">
      
        <div class="grid">
            <div class="card-1">
                <h1>Who we are:</h1>
                <p> At WIRE THE FUTURE, we are more than just a wiring solutions provider we are a team of passionate professionals committed to transforming the way people connect, communicate, and secure their environments. Founded on the principles of innovation, reliability, and customer satisfaction, we have been serving our community and clients with top-notch wiring solutions for years.</p>
            </div>
            <div class="card-2">
                <h1>Our Mission:</h1>
                <p>Our mission is to provide high-quality wiring solutions that enhance connectivity, safety, and efficiency. We believe that every project deserves personalized attention, and we work closely with our clients to understand their unique needs and deliver tailored solutions.</p>
            </div>
        </div>
    </section>
      <section class="part-2">
        <h1>Why choose us</h1>
        <div class="icon-container">
            <div>
                <i class="fa-solid fa-helmet-safety"></i>
                <p class="first">Experties</p>
                <p class="second">Our team of professionals is highly trained and experienced in the latest security technologies and installation techniques.</p>
            </div>
            <div>
                <i class="fa-solid fa-person-rays"></i>
                <p class="first">Customer Focus</p>
                <p class="second">We prioritize your needs and work closely with you to tailor solutions that fit your specific requirements.</p>
            </div>
            <div>
                <i class="fa-solid fa-medal"></i>
                <p class="first">Quality Assurance</p>
                <p class="second">We use only the highest quality products and materials, ensuring long-lasting and effective security and networking systems.</p>
            </div>
            <div>
                <i class="fa-regular fa-lightbulb"></i>
                <p class="first">Innovation</p>
                <p class="second">We ensure dependable service and support, guaranteeing that our systems perform consistently and effectively.</p>
            </div>
        </div>
    </section>
    
    <section class="part-3">
        <h1>Our Values</h1>
        <div class="icon-container">
            <div>
                <i class="fa-solid fa-user-shield"></i>
                <p>Integrity</p>
                <p>We conduct our business with honesty and transparency, building trust with our customers through reliable and ethical practices.</p>
            </div>
            <div>
                <i class="fa-solid fa-handshake"></i>
                <p>Commitment</p>
                <p>We are dedicated to providing exceptional service and support, ensuring customer satisfaction at every step.</p>
            </div>
            <div>
                <i class="fa-solid fa-shield"></i>
                <p>Reliability</p>
                <p>We strive to be dependable in all aspects of our business, from the quality of our products to the consistency of our service.</p>
            </div>
            <div>
                <i class="fa-solid fa-people-group"></i>
                <p>Community</p>
                <p>We believe in giving back to the community and strive to make a positive impact through our work and initiatives.</p>
            </div>
        </div>
    </section>
    
      

    </main>
    <footer>
        <section class="bottom">
            <div class="bottom-grid">
                <div class="privacy">
                    <p>Privacy Policy:</p>
                    <p id="second-p">Your privacy is important to us. This Privacy Policy explains how we collect, use, disclose, and protect your information when you visit our website or use our services.</p>
                </div>
                <div class="follow">
                    <p>Follow us:</p>
                    <div class="social-icons">
                        <a><i class="fa-brands fa-instagram"></i></a>
                        <a><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </section>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>