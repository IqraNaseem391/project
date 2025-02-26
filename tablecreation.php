<?php
include 'Connection.php';

$sqlNurse = "CREATE TABLE Nurse (id VARCHAR(255) PRIMARY KEY, name VARCHAR(255), specialization VARCHAR(255));";
$sqlAdmins = "CREATE TABLE Admins (id VARCHAR(255) PRIMARY KEY, name VARCHAR(255), role VARCHAR(255));";
$sqlRequests = "CREATE TABLE Requests (requestid VARCHAR(255) PRIMARY KEY, dateRequested DATE, status VARCHAR(255), patient VARCHAR(255), doctor VARCHAR(255), nurse VARCHAR(255), dateClosed DATE);";

if ($connection->query($sqlPatients) && $connection->query($sqlDoctors) && $connection->query($sqlNurses) && $connection->query($sqlAdmins) && $connection->query($sqlRequests)) {
    echo "Tables created successfully.";
} else {
    echo "Error creating tables: " . $connection->error;
}

$connection->close();
?>