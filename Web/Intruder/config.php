<?php
// Replace with your database credentials
$host = 'localhost';
$dbname = 'skyfrgnancehs_kietctf';
$user = 'skyfrgnancehs_sarim';
$password = 'sky1337897frag';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>