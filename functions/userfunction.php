<?php
    include('config/dbcon.php');
    function getAllBlogActive($tbl_blog){
        global $con;
        $q = "SELECT * FROM $tbl_blog";
        return $q = mysqli_query($con, $q);
    }
    function getPatientFeedback(){
        global $con;
        $q = "SELECT * FROM tbl_feedback ORDER BY msg_submitted DESC LIMIT 8";
        return $q = mysqli_query($con, $q);
    }
    // connected sa auth
    function error($url, $error_message){
        $_SESSION['error_message'] =  $error_message;
        header('Location:' . $url);
        exit();
    }
?>