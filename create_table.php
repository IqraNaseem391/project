<?php
include 'Connection.php';

$sql = "CREATE TABLE IF NOT EXISTS nurse_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    request_type VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    priority VARCHAR(50) NOT NULL
);
CREATE TABLE IF NOT EXISTS pharmacist_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id VARCHAR(255) NOT NULL,
    medication_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    urgency VARCHAR(50) NOT NULL
);";
if ($connection->multi_query($sql) === TRUE) {
    echo "Table created successfuly";
}
?>