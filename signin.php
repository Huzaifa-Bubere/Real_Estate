<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if(isset($_POST["name1"]) && isset($_POST["pwd1"])) {
        // Sanitize user inputs to prevent SQL injection
        $username = $_POST["name1"];
        $password = $_POST["pwd1"];

        // Database connection parameters
        $servername = "localhost";
        $username_db = "root"; // Change this to your MySQL username
        $password_db = ""; // Change this to your MySQL password if you have one
        $database = "wbpmp"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username_db, $password_db, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to select user from database
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        // Execute SQL statement
        $stmt->execute();

        // Check if user exists in database
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // User exists, redirect to index.php
            setcookie("username", $username, time() + 3600, "/");
            $data1=$username;
            echo "<script>";
            echo "let data = " . json_encode($data1) . ";";
            echo "localStorage.setItem('currentuser', JSON.stringify(data));";
            echo "</script>";
            echo '<script>localStorage.setItem("user_log_status","1");</script>';
            $data2=1;
            echo "<script>";
            echo "let data2 = " . json_encode($data2) . ";";
            echo "localStorage.setItem('myData', JSON.stringify(data2));";
            echo "</script>";
            echo '<script>window.open("index.php", "_self");</script>';
            echo '<script>history.back()</script>';

        } else {
            $data3=0;
            echo "<script>";
            echo "let data = " . json_encode($data3) . ";";
            echo "localStorage.setItem('myData', JSON.stringify(data));";
            echo "</script>";
            echo '<script>window.open("form.php", "_self");</script>';
            echo '<script>history.back()</script>';
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Username and password are required.";
    }
}
?>
