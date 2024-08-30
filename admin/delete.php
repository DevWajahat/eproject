<?php
include 'conn.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Convert the id to an integer for safety

    // Prepare the SQL DELETE statement
    $stmt = $conn->prepare("DELETE FROM `movies` WHERE `id` = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind the id parameter and execute the statement
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "<script> alert('Movie deleted successfully!'); window.location.href = 'index.php'; </script>";
    } else {
        echo "<script> alert('Error: " . $stmt->error . "'); </script>";
    }

    // Close the statement and connection
    $stmt->close();
} else {
    echo "<script> alert('Invalid ID.'); window.location.href = 'index.php'; </script>";
}


