<?php
include('../config/dbcon.php');

if (isset($_GET['id'])) {
    $patientFeedback = mysqli_real_escape_string($con, $_GET['id']);

    $q = "SELECT * FROM tbl_feedback WHERE id = '$patientFeedback'";
    $result = mysqli_query($con, $q);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $email = $row['email'];
            $message = $row['message'];
            $msg_submitted = $row['msg_submitted'];
         
            echo "
                <form action=\"#\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                          
                            <div class=\"mb-2\">
                                <label class=\"form-label\"><small><b>First name</b></small></label>
                                <input required type=\"text\" name=\"name\" class=\"form-control\" value=\"$name\" placeholder=\"First Name\" readonly disabled>
                            </div>
                          
                            <div class=\"mb-2\">
                                <label class=\"form-label\"><small><b>Email</b></small></label>
                                <input required type=\"email\" name=\"email\" class=\"form-control\" value=\"$email\" placeholder=\"Email\" readonly disabled>
                            </div>
                            <div class=\"mb-2\">
                                <label class=\"form-label\"><small><b>Message date Submitted</b></small></label>
                                <input required type=\"text\" name=\"msg_submitted\" class=\"form-control\" value=\"$msg_submitted\" placeholder=\"First Name\" readonly disabled>
                            </div>
                            <div class=\"mb-2\">
                                <label class=\"form-label\"><small><b>Feedback</b></small></label>
                                <textarea rows=\"5\" type=\"text\" name=\"message\" class=\"form-control\" readonly disabled>$message</textarea>
                            </div>
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
