<?php
// Assuming you have a database connection
$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $school = $_POST["school"];
    $grade = $_POST["grade"];
    $plan = $_POST["plan"];

    $sql = "INSERT INTO registration (name, phone, subject, school, grade, plan) 
            VALUES ('$name', '$phone', '$subject', '$school', $grade, '$plan')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

