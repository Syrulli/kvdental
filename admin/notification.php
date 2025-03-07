<?php
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('../config/dbcon.php');
include('../functions/myfunction.php');

if (isset($_POST['update_patient_btn'])) {
    $tbl_patient_info_id = $_POST['tbl_patient_info_id'];
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $service = $_POST['service'];
    $IsNewPatient = $_POST['IsNewPatient'];
    $hmo = $_POST['hmo'];
    $timeSlot = $_POST['timeSlot'];
    $appointment_date = $_POST['appointment_date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $dob = $_POST['dob'];

    $stmt = $con->prepare("UPDATE tbl_appointments SET 
        patient_name = ?, 
        age = ?, 
        gender = ?, 
        service = ?,
        IsNewPatient = ?,
        hmo = ?,
        timeSlot = ?,
        appointment_date = ?,
        email = ?, 
        phone = ?, 
        address = ?, 
        note = ?, 
        dob = ?
        WHERE patient_id = ?");
    $stmt->bind_param("sssssssssssssi", $patient_name, $age, $gender, $service, $IsNewPatient, $hmo, $timeSlot, $appointment_date, $email, $phone, $address, $note, $dob, $tbl_patient_info_id);

    if ($stmt->execute()) {
        $stmt->close();

        $stmt = $con->prepare("SELECT time_labels FROM tbl_timeslots WHERE id = ?");
        $stmt->bind_param("i", $timeSlot);
        $stmt->execute();
        $stmt->bind_result($time_labels);
        $stmt->fetch();
        $stmt->close();

        sendEmailNotification($email, $patient_name, $appointment_date, $time_labels);

        redirect("all_appointments.php?id=$tbl_patient_info_id", "Patient Information Updated Successfully!");
    } else {
        $stmt->close();
        error("all_appointments.php?id=$tbl_patient_info_id", "Something Went Wrong!");
        exit();
    }
}

function sendEmailNotification($recipientEmail, $patientName, $appointmentDate, $time_labels) {
    
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kvdentalclinic8@gmail.com'; // remove email
        $mail->Password   = 'saykxloxqnpymyzx'; // remove email pass
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('kvdentalclinic8@gmail.com', 'KV Dental Clinic'); // use existing email
        $mail->addAddress($recipientEmail, $patientName); 

        $mail->isHTML(true);
        $mail->Subject = 'Follow-up Schedule & Appointment Confirmation';
        $mail->Body    = "
            <h3>Dear $patientName,</h3>
            <p>We are writing to confirm your follow-up appointment.</p>
            <p><strong>Appointment Date:</strong> $appointmentDate</p>
            <p><strong>Time Slot:</strong> $time_labels</p>
            <p>We look forward to seeing you!</p>
            <br><br>
            Best Regards,<br>
            KV Dental Clinic
        ";

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}"; 
    }
}