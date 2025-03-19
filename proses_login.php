<?php
session_start();
require_once 'config.php';

// Create a new instance of the Database class
$db = new Database();
$conn = $db->conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form input
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash the password with MD5

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If a match is found, login is successful
        $_SESSION['username'] = $username; // Set session
        header("Location: soalmateri.php"); // Redirect to soalmateri.php
        exit;
    } else {
        // If login fails, display error
        echo "<div style='color: red; text-align: center;'>Invalid username or password</div>";
    }
    $stmt->close();
}
?>
