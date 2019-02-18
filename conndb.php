<?php 

// Define database credentials
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'db_rm';

// Connect to database
try {
	$conn = new mysqli($server, $username, $password, $database);
} catch (Exception $e) {
	die('Connection error ' . $e);
}

?>