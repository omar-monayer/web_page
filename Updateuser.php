<?php
include 'Conect.php';
session_start();

$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($con, $sql);

$user = mysqli_fetch_assoc($result);
$fullname = $user['full_name'];
$phone = $user['phone'];
$email = $user['email'];
$location = $user['location'];
print_r($user);

if (isset($_POST['update'])) {
    // Sanitize user input
   // $name = mysqli_real_escape_string($con, $_POST['full-name']);
    //$phone = mysqli_real_escape_string($con, $_POST['phone']);
    //$email = mysqli_real_escape_string($con, $_POST['email']);
    //$location = mysqli_real_escape_string($con, $_POST['location']);
    





    $sql = "UPDATE users SET `full_name` = '$fullname', phone = '$phone', email = '$email', location = '$location' WHERE id = $id";
    $result = mysqli_query($con, $sql);

    // Check if update was successful
    if ($result) {
        // Redirect to profile page after update
        header("Location: Profile.php");
        exit();
    } else {
        echo 'Error updating record: ' . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Update.css">
    <title>Update Info</title>
</head>
<body>
    <header>
        <h1>WIRE THE FUTURE</h1>
    </header>
    <main>
        <section class="update">
            <h3>UPDATE INFO</h3>
            <form method="post">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br><br>
                <label for="full-name">Full Name:</label>
                <input type="text" name="full-name" id="full-name" value="<?php echo $fullname; ?>"><br><br>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>"><br><br>
                <label for="location">Choose your location:</label>
                <select name="location" id="location">
                    <option value= <?php echo $location;?> disabled>Select Location</option>
                    <option value="Sydney">Sydney</option>
                    <option value="Fiber-Wiring">Fiber-Wiring</option>
                    <option value="Wired-Camera">Wired-Camera</option>
                    <option value="Wireless-Camera">Wireless-Camera</option>
                </select>
                <button id="update-button" type="submit" name="update">Update</button>
            </form>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
