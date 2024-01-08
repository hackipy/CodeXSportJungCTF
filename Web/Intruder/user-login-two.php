<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $hashed_password);

    // Use MD5 for hashing the password
    $hashed_password = md5($password);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Authentication successful
        $row = $result->fetch_assoc();
        $_SESSION["username"] = $row["username"];
        header("Location: user-main.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>
