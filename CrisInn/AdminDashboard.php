<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
}

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Reservation ID: " . $row["reservation_id"] . " - Guest ID: " . $row["guest_id"] . " - Room ID: " . $row["room_id"] . "<br>";
    }
} else {
    echo "No reservations.";
}
?>
