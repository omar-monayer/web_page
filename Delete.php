<?php





include 'Conect.php';

$bookingId = intval($_GET['id']);
$sql ="DELETE FROM bookings WHERE id=$bookingId;";
$result=mysqli_query($con,$sql);
header("Location:Profile.php");








?>