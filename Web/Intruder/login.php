<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Authentication successful
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION["username"] = $row["username"];
        header("Location: authenticate.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}

$conn->close();
?>
