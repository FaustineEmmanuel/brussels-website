<?php
// Database Configuration for XAMPP
// Make sure XAMPP MySQL is running before using this website

define('DB_HOST', 'localhost');
define('DB_USER', 'root');  // Default XAMPP MySQL user
define('DB_PASS', '');       // Default XAMPP MySQL password (empty)
define('DB_NAME', 'brussels_website');

// Initialize connection variable
$conn = null;

// Only try to connect if mysqli extension is available
if (extension_loaded('mysqli')) {
    try {
        // Suppress errors during connection
        $conn = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        // Check connection
        if ($conn && $conn->connect_error) {
            $conn = null; // Set to null if connection failed
        }
    } catch (Exception $e) {
        // Connection failed, continue without database
        $conn = null;
    }
}

// Set charset to UTF-8
if ($conn) {
    $conn->set_charset("utf8mb4");
}

// Function to sanitize input
function sanitize_input($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($conn) {
        return $conn->real_escape_string($data);
    }
    return $data;
}

// Function to track page visits
function track_page_visit($page_name) {
    global $conn;
    if (!$conn) return;
    
    $page_name = sanitize_input($page_name);
    $sql = "UPDATE visitor_stats SET visit_count = visit_count + 1 WHERE page_name = '$page_name'";
    @$conn->query($sql);
}
?>
