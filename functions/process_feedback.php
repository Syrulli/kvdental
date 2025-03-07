<?php
include('../config/dbcon.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || empty($_POST['rate'])) {
        http_response_code(400);
        echo "All fields are required!";
        exit;
    }
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $rate = intval($_POST['rate']);

    $feedback = $con->prepare("INSERT INTO tbl_feedback (name, email, message, rate) 
                           VALUES (?, ?, ?, ?)");
    $feedback->bind_param("sssi", $name, $email, $message, $rate);

    $result = $feedback->execute();

    if ($result) {
        echo "Feedback submitted successfully!";
    } else {
        http_response_code(500); 
        echo "Error submitting feedback.";
    }
    $feedback->close();
}
