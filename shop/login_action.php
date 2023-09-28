<?php
include('conn.php');
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location: admin_index.php');
    } else {
        header('location: login.php');
        echo '<script>alert("Invalid username or password. Please try again.");</script>';
     
    }
} else {
    // Handle the case when username and password are not set
    echo '<script>alert("Please provide both username and password.");</script>';
}
?>
