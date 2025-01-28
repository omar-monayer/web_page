<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet"
        type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Service.css">
    <title>Services Page</title>
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
            <section class="part-1" id="part-1">
                <h3>Internet Cables</h3>
                <div class="card-grid">
                    <div class="card">
                        <h4>Normal Wiring</h4>
                        <img src='images/normal wiring.jpg' alt="Normal Image">
                        <p>Our standard wiring services ensure reliable and efficient connectivity for your network. We use industry-standard practices to guarantee the highest performance.</p>
                    </div>
                    <div class="card">
                        <h4>Fiber Optic Wiring</h4>
                        <img src='images/fiber obtic.webp' alt="Fiber Image" >
                        <p>Experience lightning-fast internet speeds with our fiber optic wiring services. Ideal for businesses and homes that demand high bandwidth and low latency.</p>
                    </div>
                </div>
            </section>
        
            <section class="part-2" id="part-2">
                <h3>Security System</h3>
                <div class="card-grid">
                    <div class="card">
                        <h4>Wireless Cameras</h4>
                        <img src='images/wirelesscam.jpeg' alt="Wireless Cam Image" >
                        <p>Our wireless camera systems provide flexibility and convenience, allowing you to monitor your property from anywhere using your smartphone or tablet.</p>
                    </div>
                    <div class="card">
                        <h4>Wired Cameras</h4>
                        <img src='images/wiredcam.webp' alt="Wired Cam Image" >
                        <p>Opt for our wired camera systems for a stable and secure surveillance solution. Perfect for both residential and commercial properties, ensuring round-the-clock monitoring.</p>
                    </div>
                </div>
            </section>
        
            <section class="part-3" id="part-3">
                <h3>Another Service</h3>
                <div class="card-grid">
                    <div class="card">
                        <h4>Service 1</h4>
                        <img src='images/image-render.jpg' alt="Sweet Image" >
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suscipit massa id rhoncus rutrum.</p>
                    </div>
                    <div class="card">
                        <h4>Service 2</h4>
                        <img src='images/image-render.jpg' alt="Sweet Image" >
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suscipit massa id rhoncus rutrum.</p>
                    </div>
                </div>
            </section>
            <section class="part-4">
                <button id="book-now-btn" onclick="document.location='Booking.php'">Book Now</button>
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