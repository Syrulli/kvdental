<?php
    include('../config/dbcon.php');

    if(isset($_GET['mark_read']) && $_GET['mark_read'] == 'true') {
        $q = "UPDATE tbl_appointments SET read_status = 1";
        $result = mysqli_query($con, $q);
        if(!$result) {
            echo json_encode(array("success" => false, "message" => "Failed to mark notifications as read"));
            exit;
        }
        echo json_encode(array("success" => true));
        exit;
    }

    $q = "SELECT a.appointment_date, a.patient_name, t.time_labels 
        FROM tbl_appointments a 
        INNER JOIN tbl_timeslots t ON a.timeSlot = t.id 
        WHERE a.read_status = 0 
        ORDER BY a.appointment_date";

    $result = mysqli_query($con, $q);

    $latestAppointments = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $appointmentCount = mysqli_num_rows($result); 

    echo json_encode(array("latestAppointments" => $latestAppointments, "appointmentCount" => $appointmentCount));
    mysqli_close($con);
?>
