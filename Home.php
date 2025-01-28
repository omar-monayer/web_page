<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Home.css">
    <title>Home Page</title>
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
            <h1>WIRE THE FUTURE</h1>
            <div><img src="images/WIRE THE FUTURE.jpg"width='1400'height='400'class="part-1-image"><p>At WIRE THE FUTURE, we specialize in providing high-quality wiring solutions tailored to meet your needs. Our expert team is committed to ensuring top-notch service and customer satisfaction, we are dedicated to wiring the future with innovative and reliable solutions that empower both individuals and businesses. With years of industry experience, our expert team understands the intricacies of electrical wiring, telecommunications, and security systems.</p></div>
            
        </section> 
        <section class="part-2">
            <h3>Our Services</h3>
            <div class="card-grid">
                <div class="card" onclick="document.location='Service.php#part-2'">
                    <h4>Cameras</h4>
                    <img src='images/securitycam.jpg' alt="Cameras Image" >
                    <p>Our state-of-the-art cameras offer high-resolution imaging, advanced motion detection, and seamless connectivity for your peace of mind.</p>
                </div>
                <div class="card" onclick="document.location='Service.php#part-1'">
                    <h4>Internet Cables</h4>
                    <img src='images/internet cabling.jpeg' alt="Cables Image" >
                    <p>We provide durable and reliable internet cables that ensure fast and stable connectivity for all your devices.</p>
                </div>
                <div class="card" onclick="document.location='Service.php#part-3'">
                    <h4>Video Doorbell</h4>
                    <img src='images/securitycam.jpg' alt="service image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suscipit massa id rhoncus rutrum. Sed.</p>
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