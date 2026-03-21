<?php
// ============================================================
// Database Configuration — EXAMPLE FILE
// ============================================================
// Copy this file to config.php and fill in your real values.
// NEVER commit config.php to version control.
// ============================================================

define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_username');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'your_db_name');

// Establish database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('Could not connect to database: ' . mysqli_connect_error());
}
