<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Serene";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["Emailp"];
$password = $_POST["Passwordp"];

$sql = "SELECT Email, Password FROM user WHERE Email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

header('Content-Type: application/json');

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row["Password"] === $password) {
        echo json_encode(array("message" => "Login Successful"));
    } else {
        echo json_encode(array("error" => "Check your Password"));
    }
} else {
    echo json_encode(array("error" => "No User Exists"));
}

$stmt->close();
$conn->close();
?>
