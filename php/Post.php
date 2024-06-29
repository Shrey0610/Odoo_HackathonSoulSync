<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Serene";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["Namen"];
$email = $_POST["Emailn"];
$password = $_POST["Passwordn"];

$sql = "INSERT INTO user (Name, Email, Password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

header('Content-Type: application/json');

$stmt->bind_param("sss", $name, $email, $password);
if ($stmt->execute()) {
    echo json_encode(array("message" => "New record created successfully"));
} else {
    echo json_encode(array("error" => "Error creating record"));
}

$stmt->close();
$conn->close();
?>
