<?php
include('../config/dbcon.php');

if (isset($_GET['id'])) {
    $appointmentId  = mysqli_real_escape_string($con, $_GET['id']);
    $query = "SELECT A.*, B.time_labels 
              FROM tbl_appointments A 
              LEFT JOIN tbl_timeslots B ON B.id = A.timeSlot 
              WHERE patient_id = '$appointmentId'";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $patient_id = $row['patient_id'];
            $service = $row['service'];
            $hmo = $row['hmo'];
            $patient_name = $row['patient_name'];
            $age = $row['age'];
            $gender = $row['gender'];
            $IsNewPatient = $row['IsNewPatient'];
            $address = $row['address'];
            $email = $row['email'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $note = $row['note'];
            $reason_visit = $row['reason_visit'];
            $appointment_date = $row['appointment_date'];
            $time_labels = $row['time_labels'];

            echo "
                <form action=\"#\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"patient_name\"><b><small>Patient Name</small></b></label>
                                <input required type=\"text\" name=\"id\" class=\"form-control\" value=\"$patient_name\" placeholder=\"ID\" readonly disabled>
                            </div>

                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"age\"><b><small>Age</small></b></label>
                                <input required type=\"number\" name=\"age\" class=\"form-control\" value=\"$age\" placeholder=\"age\" readonly disabled>
                            </div>

                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"gender\"><b><small>Gender</small></b></label>
                                <input required type=\"text\" name=\"gender\" class=\"form-control\" value=\"$gender\" placeholder=\"gender\" readonly disabled>
                            </div>

                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"hmo\"><b><small>HMO</small></b></label>
                                <input required type=\"text\" name=\"hmo\" class=\"form-control\" value=\"$hmo\" placeholder=\"HMO\" readonly disabled>
                            </div>

                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"status\"><b><small>Status</small></b></label>
                                <input required type=\"text\" name=\"IsNewPatient\" class=\"form-control\" value=\"$IsNewPatient\" placeholder=\"Status\" readonly disabled>
                            </div>

                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"service\"><b><small>Service</small></b></label>
                                <input required type=\"text\" name=\"service\" class=\"form-control\" value=\"$service\" placeholder=\"Service\" readonly disabled>
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"mb-2\">
                                <label class=\"form-label\"><b><small>Appointment Date & Time</small></b></label>
                                <input required type=\"text\" name=\"appointment_date\" class=\"form-control\" value=\"$appointment_date | $time_labels\" placeholder=\"Appointment Date\" readonly disabled>
                            </div>
                          
                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"email\"><b><small>Email</small></b></label>
                                <input required type=\"email\" name=\"email\" class=\"form-control\" value=\"$email\" placeholder=\"Email\" readonly disabled>
                            </div>
                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"phone\"><b><small>Phone No.</small></b></label>
                                <input required type=\"tel\" name=\"phone\" class=\"form-control\" value=\"$phone\" placeholder=\"Phone No.\" readonly disabled>
                            </div>
                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"dob\"><b><small>Date of birth</small></b></label>
                                <input required type=\"date\" name=\"dob\" class=\"form-control\" value=\"$dob\" placeholder=\"Date of birth\" readonly disabled>
                            </div>

                            <div class=\"mb-2\">
                                <label class=\"form-label\" for=\"address\"><b><small>Address:</small></b></label>
                                <textarea rows=\"4\" type=\"text\" name=\"address\" class=\"form-control\" readonly disabled>$address</textarea>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"form-label\" for=\"note\"><b><small>Note:</small></b></label>
                            <textarea rows=\"4\" type=\"text\" name=\"note\" class=\"form-control\" readonly disabled>$note</textarea>
                        </div>

                        <div class=\"mb-2\">
                        <label class=\"form-label\" for=\"reason_visit\"><b><small>Reason for visit: </small></b><small>(Applicable only for <span>walk-in</span> patient)</small> </label>
                        <textarea rows=\"5\" type=\"text\" name=\"reason_visit\" class=\"form-control\" readonly disabled>$reason_visit</textarea>
                    </div>
                    </div>
                </form>
            ";
        } else {
            echo "Patient not found.";
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    echo "Invalid request.";
}
