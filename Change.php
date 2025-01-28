<?php
include 'Conect.php';


$bookingId = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id = $bookingId;";
$result = mysqli_query($con, $sql);


$booking = mysqli_fetch_assoc($result);
$description = $booking['description'];
$date = $booking['date'];
$service = $booking['service'];


if (isset($_POST['change'])) {
   

    $sql = "UPDATE bookings SET description = '$description', service = '$service', date = '$date' WHERE id = $bookingId;";
    $result = mysqli_query($con, $sql);

    
    if ($result) {
        header("Location: Profile.php");
        exit();
    } else {
        echo 'Error updating record: ' . mysqli_error($con);
    }
}
?>

<a href='Change.php?id=$bookingId' id='update-booking'><i class='fa-solid fa-arrow-right'></i>Change</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Change.css">
    <title>Change Booking</title>
</head>
<body>
    <header>
        <h1>WIRE THE FUTURE</h1>
    </header>
    <main>
        <section class="change">
            <h2>CHANGE BOOKING</h2>
            <form method="post">
                <label for="appointment-date">Choose a date:</label>
                <input type="date" id="appointment-date" name="appointment-date" value=<?php echo $date;?>>
                <br><br>
                <label for="service-type">Choose The Service:</label>
                <select name="service-type" id="service-type" >
                    <option value=<?php echo $service;?> disabled selected></option>
                    <option value="Normal-Wiring">Normal-Wiring</option>
                    <option value="Fiber-Wiring">Fiber-Wiring</option>
                    <option value="Wired-Camera">Wired-Camera</option>
                    <option value="Wireless-Camera">Wireless-Camera</option>
                </select>
                <br><br>

                <label for="description">Add Description:</label>
                <input type="text" id="description" name="description" value=<?php echo $description;?>>
                <br><br>

                <button id="change-btn" type="submit" name="change">Change</button>
            </form>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>