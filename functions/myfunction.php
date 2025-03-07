<?php 
    session_start();

    include('../config/dbcon.php');
    
    // INDEX FUNCTIONS
    
        function getTotalExpenses(){
            global $con;
            $q = "SELECT SUM(amount) AS total_expenses FROM tbl_expenses";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_assoc($result);
            return number_format($row['total_expenses'], 2); 
        }
        
        
        function getAllAppointmentsForDashboard($tbl_appointments){
            global $con;
            $q = "SELECT * FROM $tbl_appointments";
            return $q = mysqli_query($con, $q);
        }

        function getTodaysAppointment(){
            global $con;
            $today = date('Y-m-d');
            $q = "SELECT * FROM tbl_appointments WHERE DATE(appointment_date) = '$today'";
            return mysqli_query($con, $q);
        }      
        
        function getFollowupSchedule($tbl_appointments){
            global $con;
            $q = "SELECT * FROM $tbl_appointments WHERE IsNewPatient = 'Follow-up Schedule'";
            return mysqli_query($con, $q);
        }

        function getAllFeedback($tbl_feedback){
            global $con;
            $q = "SELECT * FROM $tbl_feedback";
            return $q = mysqli_query($con, $q);
        }
    // INDEX FUNCTIONS

    function getAllPatients($filterType = null){
        global $con;
        $q = "SELECT * FROM tbl_appointments A LEFT JOIN tbl_timeslots B ON B.id = A.timeSlot";

        if($filterType !== null) {
            switch ($filterType) {
                case 'today':
                    $q .= " WHERE DATE(A.appointment_date) = CURDATE()";
                    break;
                case 'this_week':
                    $q .= " WHERE YEARWEEK(A.appointment_date) = YEARWEEK(NOW())";
                    break;
                case 'this_month':
                    $currentMonth = date('m');
                    $currentYear = date('Y');
                    $q .= " WHERE MONTH(A.appointment_date) = $currentMonth AND YEAR(A.appointment_date) = $currentYear";
                    break;
                default:
                    break;
            }
        }
        return mysqli_query($con, $q);
    }
    
    function getAllPatientsInformations(){
        global $con;
        $q = "SELECT * FROM tbl_appointments";
        return $q = mysqli_query($con, $q); 
    }
    // EDIT PATIENT INFO
    function getPatientInfoById($tbl_appointments, $id) {
        global $con;
        $q = "SELECT * FROM $tbl_appointments WHERE patient_id='$id'";
        return mysqli_query($con, $q);
    }
    
    function getAllBlog($tbl_blog){
        global $con;
        $q = "SELECT * FROM $tbl_blog";
        return $q = mysqli_query($con, $q);
    }

    function getSyrulliAI($tbl_syrulli){
        global $con;
        $q = "SELECT * FROM $tbl_syrulli";
        return $q = mysqli_query($con, $q);
    }
    
    function getAllBlogId($tbl_blog, $id){
        global $con;
        $q = "SELECT * FROM $tbl_blog WHERE id='$id' ";
        return $q = mysqli_query($con, $q);
    }

    function getClinicExpenses(){
        global $con;
        $q = "SELECT * FROM tbl_expenses";
        $result = mysqli_query($con, $q);
        return $result;
    }

    function getTreatmentRecordByPatientID($patient_id) {
        global $con;
        $q = "SELECT tr.*, ta.patient_name 
              FROM tbl_treatment_record tr 
              JOIN tbl_appointments ta ON tr.id = ta.patient_id
              WHERE tr.id = $patient_id
              ORDER BY tr.date DESC "; 
        return mysqli_query($con, $q);
    }
    
    function editTreatmentRecord($id){
        global $con;
        $q = "SELECT A.*, B.patient_name 
              FROM tbl_appointments B 
              JOIN tbl_treatment_record  A 
              ON B.patient_id= id
              WHERE A.record_id='$id' ";
        return $q = mysqli_query($con, $q);
    }
    
    function getChartByPatientId($patient_id) {
        global $con;
        $q = "SELECT tr.*, ta.patient_name 
            FROM tbl_chart tr 
            JOIN tbl_appointments ta ON tr.id = ta.patient_id
            WHERE tr.id = $patient_id"; 
        return mysqli_query($con, $q);
    }


    function getDailyWaitingList($tbl_appointments) {
        global $con;
        $q = "SELECT * FROM $tbl_appointments WHERE appointment_date IS NULL ";
        $result = mysqli_query($con, $q);
        return $result;
    }

    function getWaitinglistPatientById($tbl_appointments, $id) {
        global $con;
        $q = "SELECT * FROM $tbl_appointments WHERE patient_id='$id' ";
        return mysqli_query($con, $q);
    }

    function updateAcc(){
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];
        $q = "SELECT * FROM tbl_users WHERE id= '$userId' ";
        return $q = mysqli_query($con, $q);
    }

    function updateClinicExp($bill_id) {
        global $con;
        $q = "SELECT * FROM tbl_expenses WHERE bill_id = $bill_id";
        return mysqli_query($con, $q);
    }
    
    function redirect($url, $message){
        $_SESSION['message'] =  $message;
        header('Location:' .$url);
        exit();
    }
    function error($url, $error_message){
        $_SESSION['error_message'] =  $error_message;
        header('Location:' .$url);
        exit();
    }
?>