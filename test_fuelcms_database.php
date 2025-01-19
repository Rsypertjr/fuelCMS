<?php
$conn = new mysqli('localhost', 'idrive_compute_test_user', 'test_password', 'test_fuelcms');
if ($conn->connect_error) {
die("Database connection failed: " . $conn->connect_error);
}
echo "Database connection was successful";