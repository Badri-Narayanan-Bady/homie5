<?php
$servername = "localhost";
$username = "root";
$password = "itsBady7";
$dbname = "homie5"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : null;
    $is_service_provider = isset($_POST['is_service_provider']) ? 1 : 0;

    if ($name && $email && $password) {
        // Insert into users table
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, is_service_provider) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $email, $password, $is_service_provider);

        if ($stmt->execute()) {
            $user_id = $stmt->insert_id;

            if ($is_service_provider) {
                // Insert into service_providers table
                $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : null;
                $service_type = isset($_POST['service_type']) ? $_POST['service_type'] : null;
                $location = isset($_POST['location']) ? $_POST['location'] : null;

                $stmt = $conn->prepare("INSERT INTO service_providers (user_id, phone_number, service_type, location) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("isss", $user_id, $phone_number, $service_type, $location);

                if ($stmt->execute()) {
                    echo "Service provider registered successfully!";
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                echo "User registered successfully!";
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please fill in all required fields.";
    }
}

$conn->close();
