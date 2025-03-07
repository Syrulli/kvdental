<?php
    session_start();
    if (isset($_POST['toggle_clinic_status'])) {
        $_SESSION['clinic_closed'] = $_POST['status'] === 'true';
        $status = $_SESSION['clinic_closed'] ? 'Open Clinic' : 'Close Clinic';
        echo json_encode(['status' => $status]);

        error_log('Updated clinic status: ' . $status);

        exit();
    }

    echo json_encode(['status' => 'Error']);
    exit();
?>
