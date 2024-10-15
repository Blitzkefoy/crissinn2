<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the form using the $_POST method
$guest_id = isset($_POST['guest_id']) ? $_POST['guest_id'] : null;
$room_id = isset($_POST['room_id']) ? $_POST['room_id'] : null;
$number_of_rooms = isset($_POST['number_of_rooms']) ? $_POST['number_of_rooms'] : null;
$number_of_persons = isset($_POST['number_of_persons']) ? $_POST['number_of_persons'] : null;
$reservation_date = isset($_POST['reservation_date']) ? $_POST['reservation_date'] : null;

// Check if guest_id already exists in the reservations table
$checkGuest = "SELECT * FROM reservations WHERE guest_id='$guest_id'";
$result = $conn->query($checkGuest);

if ($result->num_rows > 0) {
    // Guest already has a reservation
    echo "Error: This guest ID already has a reservation. Please update the reservation instead.";
} else {
    // Insert data for a new reservation if the guest doesn't already have a reservation
    if ($guest_id && $room_id && $number_of_rooms && $number_of_persons && $reservation_date) {
        $sql = "INSERT INTO reservations (guest_id, room_id, number_of_rooms, number_of_persons, reservation_date)
                VALUES ('$guest_id', '$room_id', '$number_of_rooms', '$number_of_persons', '$reservation_date')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Reservation successful! Redirecting to home page...";

            // Redirect to the home page after 3 seconds
            header("refresh:3; url=index.php?page=home");
            exit();  // Important: Exit after header to prevent further script execution
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all the fields.";
    }
}

// Close the connection
$conn->close();
?>
