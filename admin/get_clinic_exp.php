<?php
    include('../config/dbcon.php');

    if (isset($_GET['bill_id'])) {
        $clinic_exp = mysqli_real_escape_string($con, $_GET['bill_id']);

        $q = "SELECT * FROM tbl_expenses WHERE bill_id = '$clinic_exp'";
        $result = mysqli_query($con, $q);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $date = $row['date'];
                $billName = $row['billName'];
                $amount = $row['amount'];
                $image = $row['image'];
                
                $imagePath = '../uploaded/' . $image; 

                echo "
                    <form action=\"#\" enctype=\"multipart/form-data\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"mb-2\">
                                    <label class=\"form-label\"><small><b>Date & Time</b></small></label>
                                    <input required type=\"datetime-local\" name=\"date\" class=\"form-control\" value=\"$date\" readonly disabled>
                                </div>
                                
                                <div class=\"mb-2\">
                                    <label class=\"form-label\"><small><b>Expenses</b></small></label>
                                    <input required type=\"text\" name=\"billName\" class=\"form-control\" value=\"$billName\" readonly disabled>
                                </div>
                            
                                <div class=\"mb-2\">
                                    <label class=\"form-label\"><small><b>Amount</b></small></label>
                                    <input required type=\"number\" name=\"amount\" class=\"form-control\" value=\"$amount\" readonly disabled>
                                </div>

                                <div class=\"mb-2 position-relative mt-5\">
                                    <a href=\"$imagePath\" download class=\"btn btn-primary btn-sm mt-2 position-absolute\" style=\"bottom: 0; right: 0;\">Download Receipt <i class=\"fa-solid fa-download\"></i></a>
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
?>
