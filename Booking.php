<?php
include 'Conect.php';
session_start();

// Check if form is submitted
if (isset($_POST['add-reservation'])) {
    // Retrieve form data
    $appointmentdate = $_POST['appointment-date'];
    $servicetype = $_POST['service-type'];
    $description = $_POST['description'];

    // Retrieve user ID from session
    $userid = $_SESSION['id'];

    // Sanitize input
    $appointmentdate = mysqli_real_escape_string($con, $appointmentdate);
    $servicetype = mysqli_real_escape_string($con, $servicetype);
    $description = mysqli_real_escape_string($con, $description);

    // Prepare SQL statement to insert data into bookings table
    $sql = "INSERT INTO bookings (userid, service, description, date) VALUES ('$userid', '$servicetype', '$description', '$appointmentdate');";

    // Execute query
    if (mysqli_query($con, $sql)) {
        header("Location: Profile.php");
        exit();
    } else {
        echo 'Error: ' . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Booking.css">
    <title>Booking Page</title>
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
            <h2>Make Reservation</h2>
            <form method="post">
                <label for="appointment-date">Choose a date:</label>
                <input type="date" id="appointment-date" name="appointment-date" required>
                <br><br>

                <label for="service-type">Choose The Service:</label>
                <select name="service-type" id="service-type" required>
                    <option value="" disabled selected>Choose</option>
                    <option value="Normal-Wiring">Normal-Wiring</option>
                    <option value="Fiber-Wiring">Fiber-Wiring</option>
                    <option value="Wired-Camera">Wired-Camera</option>
                    <option value="Wireless-Camera">Wireless-Camera</option>
                </select>
                <br><br>

                <label for="description">Add Description:</label>
                <input type="text" id="description" name="description" placeholder="Enter Description....">
                <br><br>

                <button id="book-btn" type="submit" name="add-reservation">Book</button>
            </form>
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
