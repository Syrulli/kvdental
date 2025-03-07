<?php
include('../config/dbcon.php');

$dateSelected = $_GET['date'];

$q = "
    SELECT
        a.id,
        time_labels
    FROM
        tbl_timeslots a
    WHERE
        id 
    NOT IN
        ( 
            SELECT
                timeSlot
            FROM
                tbl_appointments
            WHERE
                appointment_date = '$dateSelected'
        ) 
";


$d  = mysqli_query($con, $q);

$dataJSON = [];

foreach ($d as $data) {
   array_push($dataJSON ,$data);
}

echo json_encode($dataJSON);