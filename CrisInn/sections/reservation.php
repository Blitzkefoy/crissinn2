<section class="reservation-section">
    <h1>Make a Reservation</h1>
    <form action="reservation.php" method="post" class="reservation-form">
        <label for="guest_id">Guest ID:</label>
        <input type="text" id="guest_id" name="guest_id" required>

        <!-- New Room ID Field -->
        <label for="room_id">Room ID:</label>
        <input type="text" id="room_id" name="room_id" required>

        <!-- Existing Room Type Selection -->
        <label for="room_type">Room Type:</label>
        <select id="room_type" name="room_type" required>
            <option value="Single Room">Single Room</option>
            <option value="Double Room">Double Room</option>
            <option value="Suite Room">Suite Room</option>
        </select>

        <label for="number_of_rooms">Number of Rooms:</label>
        <input type="number" id="number_of_rooms" name="number_of_rooms" required>

        <label for="number_of_persons">Number of Persons:</label>
        <input type="number" id="number_of_persons" name="number_of_persons" required>

        <label for="reservation_date">Date:</label>
        <input type="date" id="reservation_date" name="reservation_date" required>

        <input type="submit" value="Reserve">
    </form>
</section>
