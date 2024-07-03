<?php
include 'config.php'; // Contains database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $is_service_provider = isset($_POST['is_service_provider']) ? 1 : 0;

    $sql = "INSERT INTO users (name, email, password, is_service_provider) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $name, $email, $password, $is_service_provider);
    $stmt->execute();
    $user_id = $stmt->insert_id;

    if ($is_service_provider) {
        $phone_number = $_POST['phone_number'];
        $service_type = $_POST['service_type'];
        $location = $_POST['location'];

        $sql = "INSERT INTO service_providers (user_id, phone_number, service_type, location) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('isss', $user_id, $phone_number, $service_type, $location);
        $stmt->execute();
    }

    header('Location: login.html');
}