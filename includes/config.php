<?php
session_start();
$env = parse_ini_file('.env');
$servername = 'localhost';
$username = $env['DB_USERNAME'];
$password = $env['DB_PASSWORD'];
$dbname = $env['DB_NAME'];

$isUpdating = false;

class dbConnection extends mysqli {
}

$conn = new dbConnection($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}