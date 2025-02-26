<?php
include 'Connection.php';

// Insert Medication Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_request"])) {
    $patient_id = $_POST["patient_id"];
    $medication_name = $_POST["medication_name"];
    $quantity = $_POST["quantity"];
    $urgency = $_POST["urgency"];
    
    $sql = "INSERT INTO pharmacist_requests (patient_id, medication_name, quantity, urgency) VALUES ('$patient_id', '$medication_name', '$quantity', '$urgency')";
    if ($connection->query($sql) === TRUE) {
        echo "New medication request submitted successfully.";
    } else {
        echo "Error: " . $connection->error;
    }
}

// Update Medication Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_request"])) {
    $id = $_POST["id"];
    $quantity = $_POST["quantity"];
    $urgency = $_POST["urgency"];
    
    $sql = "UPDATE pharmacist_requests SET quantity='$quantity', urgency='$urgency' WHERE id=$id";
    if ($connection->query($sql) === TRUE) {
        echo "Medication request updated successfully.";
    } else {
        echo "Error updating request: " . $connection->error;
    }
}

// Delete Medication Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_request"])) {
    $id = $_POST["id"];
    
    $sql = "DELETE FROM pharmacist_requests WHERE id=$id";
    if ($connection->query($sql) === TRUE) {
        echo "Medication request deleted successfully.";
    } else {
        echo "Error deleting request: " . $connection->error;
    }
}

$connection->close();

?>
