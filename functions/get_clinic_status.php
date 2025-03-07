<?php
    session_start();
    header('Content-Type: application/json');

    if (!isset($_SESSION['clinic_closed'])) {
        $_SESSION['clinic_closed'] = false; // Default to clinic open
    }

    $status = $_SESSION['clinic_closed'] ? 'Open Clinic' : 'Close Clinic';
    echo json_encode(['status' => $status]);

    error_log('Current clinic status: ' . $status);
?>
