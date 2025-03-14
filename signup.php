<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["name"]) && isset($_POST["pwd"]) && isset($_POST["gmail"])){
        
        $servername = "localhost";
        $username = "root"; // Change this to your MySQL username
        $password = ""; // Change this to your MySQL password if you have one
        $database = "wbpmp"; // Change this to your database name
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepare and bind SQL statement
        $sql_insert_users = "INSERT INTO users (username, password, gmail) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql_insert_users);
        $stmt->bind_param("sss", $usrnm, $pswd, $gml);

        // Set parameters and execute
        $usrnm = $_POST['name'];
        $pswd = $_POST['pwd'];
        $gml = $_POST['gmail'];

        if ($stmt->execute()) {
            echo '<script>window.open("form.html", "_self");</script>';
            echo '<script>history.back()</script>';
        } else {
            echo "Error adding records to 'users' table: " . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    else {
        echo "All fields are required.";
    }
}
?>
