<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "wbpmp";

$conn = new mysqli($servername, $username, "", $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$place = $_POST["place"];
$type = $_POST["choice"];
$per = $_POST["per"];
$price = $_POST["price"];
$area = $_POST["area"];
$address_prop = $_POST["add"];
$add_desc = $_POST["desc"];
$image1 = $_POST["image1"];
$image2 = $_POST["image2"];
$image3 = $_POST["image3"];
$image4 = $_POST["image4"];

$image5 = file_get_contents($image1);
$image6 = file_get_contents($image2);
$image7 = file_get_contents($image3);
$image8 = file_get_contents($image4);


$user = $_COOKIE["username"];
$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
// Execute the query
$stmt->bind_param("s", $user);
$stmt->execute();

$result = $stmt->get_result();
// Check if the query returned any rows
if ($result->num_rows > 0) {
    // Fetch the first row (assuming username is unique)
    $row = $result->fetch_assoc();
    
    // Extract the id_for
    $id_for = $row['id'];
    
    // Output the id_for
    // echo "ID for 'xyz' is: " . $id_for;
} else {
    // No rows found
    echo "No user found with username 'xyz'";
}
// Prepare and bind the SQL statement
$sql = "INSERT INTO properties (id_for,place, prop_type, prop_for, price, area, address_prop, add_desc, image1, image2, image3, image4)
        VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("isssssssssss", $id_for,$place, $type, $per, $price, $area, $address_prop, $add_desc, $image5, $image6, $image7, $image8);

// Get the form data


// Execute the SQL statement
if ($stmt->execute()) {
    echo "New record inserted successfully";
    echo "<script>history.back();</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
