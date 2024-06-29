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

$sql = "SELECT Email, Password FROM user";
$result = $conn->query($sql);

header('Content-Type: application/json');

if ($result) {
    if ($result->num_rows > 0) {
        $userExists = false;
        while ($row = $result->fetch_assoc()) {
            if ($row["Email"] === $email) {
                $userExists = true;
                if ($row["Password"] === $password) {
                    echo json_encode(array("message" => "Login Successful"));
                    break;
                } else {
                    echo json_encode(array("error" => "Check your Password"));
                    break;
                }
            }
        }
        
        if (!$userExists) {
            echo json_encode(array("error" => "No User Exists"));
        }
    } else {
        echo json_encode(array("error" => "No records found in the user table."));
    }
} else {
    echo json_encode(array("error" => "Error in SQL query: " . $conn->error));
}

$conn->close();
?>
