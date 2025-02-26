<?php
include 'Connection.php';

// Create Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_request"])) {
    $request_type = $_POST["request_type"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    
    $sql = "INSERT INTO nurse_requests (request_type, description, priority) VALUES ('$request_type', '$description', '$priority')";
    if ($connection->query($sql) === TRUE) {
        echo "New request submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

// Update Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_request"])) {
    $id = $_POST["id"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    
    $sql = "UPDATE nurse_requests SET description='$description', priority='$priority' WHERE id=$id";
    if ($connection->query($sql) === TRUE) {
        echo "Request updated successfully";
    } else {
        echo "Error updating request: " . $connection->error;
    }
}

// Delete Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_request"])) {
    $id = $_POST["id"];
    
    $sql = "DELETE FROM nurse_requests WHERE id=$id";
    if ($connection->query($sql) === TRUE) {
        echo "Request deleted successfully";
    } else {
        echo "Error deleting request: " . $connection->error;
    }
}

$connection->close();
?>
