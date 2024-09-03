<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "Employee";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT * FROM Employee_login WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if (password_verify($password, $row['password'])) {
        echo "Welcome, " . $row['username'] . "!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid username or password.";
}

$stmt->close();
$conn->close();
?>