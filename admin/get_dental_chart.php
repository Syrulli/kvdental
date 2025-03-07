<?php
    include('../config/dbcon.php');
    if (isset($_GET['chart_id'])) {
        $chart_id = $_GET['chart_id'];

        $q = "SELECT a.patient_name, c.created_at, c.image 
            FROM tbl_chart c 
            JOIN tbl_appointments a ON c.id = a.patient_id 
            WHERE c.chart_id = ?";
        $stmt = $con->prepare($q);
        $stmt->bind_param("i", $chart_id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($patient_name, $created_at, $image_path); 
            $stmt->fetch();

            if (file_exists($image_path)) {
                $image_data = file_get_contents($image_path);
                $formatted_date = date('Y-m-d', strtotime($created_at));

                header("Content-Type: image/png");
                header("Content-Disposition: attachment; filename={$patient_name}_dental_chart_{$formatted_date}.png");
                header("Content-Length: " . strlen($image_data));

                echo $image_data;
                exit;
            } else {
                echo "Image file not found.";
            }
        } else {
            echo "Image not found.";
        }

        $stmt->close();
        $con->close();
    } else {
        echo "Invalid request.";
    }
?>