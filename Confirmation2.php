<?php
session_start();

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['full-name'];
$phone = $_POST['phone'];
$location = $_POST['location'];

// Include database connection
include 'Conect.php';

// Sanitize user input to prevent SQL injection
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$fullname = mysqli_real_escape_string($con, $fullname);
$phone = mysqli_real_escape_string($con, $phone);
$location = mysqli_real_escape_string($con, $location);

// Hash the password before storing it
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database (Make sure column names are correct)
$sql = "INSERT INTO users (email, password, full_name, location, phone) VALUES ('$email', '$passwordHash', '$fullname', '$location', '$phone')";
$result = mysqli_query($con, $sql);

if ($result) {
    // Get the ID of the inserted user
    $userId = mysqli_insert_id($con);

    // Store data in session
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $passwordHash;
    $_SESSION['location'] = $location;
    $_SESSION['phone'] = $phone;
    $_SESSION['full-name'] = $fullname;
    $_SESSION['id'] = $userId; // Store the user ID in the session

    // Redirect to Profile page
    header("Location: Profile.php");
    exit();
} else {
    echo 'Data insertion failed: ' . mysqli_error($con);
}
?>
