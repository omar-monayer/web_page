<?php
session_start();

// Include database connection
include 'Conect.php';

// Check if session variables are set
if (!isset($_SESSION['email']) ) {
    header("Location: Login.php");
}

// Retrieve session variables
$email = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Profile.css">
    <title>Profile Page</title>
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
                                    <a class="nav-link active" aria-current="page" href="Contact-us.php"><i class="fa-solid fa-envelope"></i> Contact us</a>
                                    <a class="nav-link active" aria-current="page" href="destroy.php"><i class="fa-solid fa-user"></i> Log out</a>
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
        <button id="logout-button" onclick="document.location='destroy.php'">
            <i class="fa-solid fa-sign-out-alt"> Log out</i>
        </button>
        
        <section class="part-1">
           
            
           <h2>Personal Information</h2>
           <?php 
               $sql = "SELECT * FROM users WHERE email='$email';";
               $result = mysqli_query($con, $sql);
               if ($result && mysqli_num_rows($result) > 0) {
                   $users = mysqli_fetch_assoc($result);
                   $fullname = $users['full-name'];
                   $email = $users['email'];
                   $phone = $users['phone'];
                   $location = $users['location'];
                   echo "<div class='container-div'>
                           <div><i class='fa-regular fa-user icon'></i>Name: $fullname</div>
                           <div><i class='fa-solid fa-envelope icon'></i>Email: $email</div>
                           <div><i class='fa-solid fa-phone icon'></i>Phone: +962 $phone</div>
                           <div><i class='fa-solid fa-location-dot icon'></i>Location: $location</div>
                         </div>
                         <a href='Updateuser.php' id='update-info'><i class='fa-solid fa-arrow-right'></i>Update</a>";
               } else {
                   echo "No user found.";
               }
           ?>
       </section>

        <section class="part-2">
            <h2>Bookings</h2>
            <div class="biggest-container-div">
            <?php
                // Fetch user bookings
                $stmt = $con->prepare("SELECT * FROM bookings WHERE userid = ?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($booking = $result->fetch_assoc()) {

                    $description = htmlspecialchars($booking['description']);
                    $service = htmlspecialchars($booking['service']);
                    $date = htmlspecialchars($booking['date']);
                    $bookingId = htmlspecialchars($booking['id']);
                   

                    echo "
                        <div class='container-div'>
                            <a class='x' href='Delete.php?id=$bookingId' onclick='confirmDelete()'><i class='fa-solid fa-x'></i></a>
                            <div><i class='fa-solid fa-briefcase icon'></i>Service: $service</div>
                            <div><i class='fa-solid fa-calendar icon'></i>Date: $date</div>
                            <div><i class='fa-solid fa-info-circle icon'></i>Description: $description</div>
                        </div>";
                }
                $stmt->close();
            ?>
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
    <script src="java-script/alert.js"></script>
</body>
</html>

