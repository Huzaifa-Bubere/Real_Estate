<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = "password"; // Change this to your MySQL password

// Create connection
$conn = new mysqli($servername, $username, '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql_create_db = "CREATE DATABASE IF NOT EXISTS wbpmp";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the created database
$conn->select_db("wbpmp");

// Create Table 1: Users
$sql_create_table1 = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    gmail VARCHAR(255) ,
    wish_list LONGTEXT
) AUTO_INCREMENT =210401";
if ($conn->query($sql_create_table1) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table 'users': " . $conn->error;
}

// Create Table 2: Properties
$sql_create_table2 = "CREATE TABLE IF NOT EXISTS properties (
    id_for INT,
    id INT AUTO_INCREMENT PRIMARY KEY,
    prop_for CHAR(1),
    price VARCHAR(255),
    place VARCHAR(255),
    address_prop TEXT,
    add_desc TEXT,
    area VARCHAR(255),
    prop_type CHAR(1),
    image1 LONGBLOB,
    image2 LONGBLOB,
    image3 LONGBLOB,
    image4 LONGBLOB,
    FOREIGN KEY (id_for) REFERENCES users(id),
    UNIQUE INDEX (id)
)AUTO_INCREMENT =01";
if ($conn->query($sql_create_table2) === TRUE) {
    echo "Table 'properties' created successfully<br>";
} else {
    echo "Error creating table 'properties': " . $conn->error;
}

// Create Table 3: Messages
$sql_create_table3 = "CREATE TABLE IF NOT EXISTS messages (
    prop_id INT ,
    msg_id INT AUTO_INCREMENT PRIMARY KEY,
    message_arr TEXT,
    id_sender INT,
    id_receiver INT,
    FOREIGN KEY (id_sender) REFERENCES users(id),
    FOREIGN KEY (prop_id) REFERENCES properties(id),
    FOREIGN KEY (id_receiver) REFERENCES properties(id_for)
)AUTO_INCREMENT =110401";
if ($conn->query($sql_create_table3) === TRUE) {
    echo "Table 'messages' created successfully<br>";
} else {
    echo "Error creating table 'messages': " . $conn->error;
}

// Close connection
$conn->close();
?>
