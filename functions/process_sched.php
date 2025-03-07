<?php
  require '../config/dbcon.php';
  require '../email.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $timeSlot = mysqli_real_escape_string($con, $_POST['timeSlot']);
    $appointment_date = mysqli_real_escape_string($con, $_POST['appointment_date']);
    $hmo = mysqli_real_escape_string($con, $_POST['hmo']);
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $fname = mysqli_real_escape_string($con, $_POST['age']);
    $age = mysqli_real_escape_string($con, $_POST['gender']);
    $gender = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);

    $appointment = $con->prepare("
          INSERT INTO 
              tbl_appointments (timeSlot, appointment_date, hmo, service, patient_name, age, gender, email, phone, address, dob) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $appointment->bind_param(
      "sssssssssss",
      $timeSlot,
      $appointment_date,
      $hmo,
      $service,
      $patient_name,
      $age,
      $gender,
      $email,
      $phone,
      $address,
      $dob
    );

    if ($appointment->execute()) {
      if (sendAppointmentConfirmationEmail($email, $appointment_date, $service, $patient_name, $time_labels)) {

        echo json_encode(array("success" => true, "message" => "Appointment scheduled successfully!"));
      } else {
        echo json_encode(array("success" => false, "message" => "Error sending email notification."));
      }
    } else {
      echo json_encode(array("success" => false, "message" => "Error scheduling appointment: " . $con->error));
    }
    
    $appointment->close();
    $con->close();
    exit;
  }
?>