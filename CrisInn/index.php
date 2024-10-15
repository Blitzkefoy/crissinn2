<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cris Inn Resort</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=rooms">Rooms</a></li>
                <li><a href="index.php?page=reservation">Reservation</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        // Default page is 'home'
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Load the appropriate section based on the 'page' query parameter
        switch ($page) {
            case 'home':
                include 'sections/home.php';
                break;
            case 'rooms':
                include 'sections/rooms.php';
                break;
            case 'reservation':
                include 'sections/reservation.php';
                break;
            case 'contact':
                include 'sections/contact.php';
                break;
            default:
                include 'sections/home.php';
                break;
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Cris Inn Resort</p>
    </footer>
</body>
</html>
