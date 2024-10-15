<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $row['admin_id'];
            header('Location: admin_dashboard.php');
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found.";
    }
}
?>
