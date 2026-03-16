<!-- 
Author: Brenden Kambuka
Date: 13th March 2026
Unit: IS312 Web Application Development
-->
<?php
// Database connection
$servername = "localhost";
$username = "root"; // default XAMPP user
$password = "";     // default XAMPP password
$dbname = "FRU10";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve POST data from form
$ProgramCode = $_POST['ProgramCode'];
$ProgramName = $_POST['ProgramName'];
$Duration = $_POST['Duration'];

// Insert into Program table
$sql = "INSERT INTO Program (ProgramCode, ProgramName, Duration)
        VALUES ('$ProgramCode', '$ProgramName', '$Duration')";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New Program</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    Add New Program
</header>

<div class="student-container">
<?php
if ($conn->query($sql) === TRUE) {
    echo "<h2>New program added successfully!</h2>";
} else {
    echo "<h2>Error: " . $sql . "<br>" . $conn->error . "</h2>";
}
$conn->close();
?>
    <a class="return-btn" href="index.php">Return to Home</a>
</div>

<footer>
    &copy; 2026 Brenden Kambuka | IS312 Web Application Development
</footer>

</body>
</html>