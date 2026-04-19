
<?php
include("config/db.php");

$name = $_POST['name'];
$service = $_POST['service'];

$conn->query("INSERT INTO bookings (name,service) VALUES ('$name','$service')");

echo "Booking sent ✔";
?>
