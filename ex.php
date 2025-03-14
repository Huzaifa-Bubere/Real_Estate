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

// Retrieve data from the properties table
$sql = "SELECT * FROM properties WHERE id_for = 210401"; // Assuming you want to display six records
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["place"] . "</h2>";
        echo "<p>Type: " . $row["prop_type"] . "</p>";
        echo "<p>Price: " . $row["price"] . "</p>";
        // Display image
        echo "<img src='data:image/jpeg;base64," . base64_encode($row["image2"]) . "' alt='Property Image'>";
        echo "<p>Description: " . $row["add_desc"] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
