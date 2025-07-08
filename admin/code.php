<?php
    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    // UPDATE ACC FUNCTIONS
        if (isset($_POST['update_acc_btn'])) {
            $modal_update_acc = $_POST['modal_update_acc'];
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $dob = mysqli_real_escape_string($con, $_POST['dob']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
        
            if (!empty($password)) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $password_query = ", password='$hashed_password'";
            } else {
                $password_query = ""; 
            }
        
            $update_query = "UPDATE tbl_users SET 
                name='$name', 
                email='$email', 
                dob='$dob',
                phone='$phone'
                $password_query
                WHERE id='$modal_update_acc'";
        
            $update_query_run = mysqli_query($con, $update_query);
        
            if ($update_query_run) {
                redirect("index.php?id=$modal_update_acc", "Account Updated Successfully!");
            } else {
                error("index.php?id=$modal_update_acc", "Something Went Wrong!");
            }
        }
    // UPDATE ACC FUNCTIONS

    // UPDATE BLOG FUNCTIONS 
        else if (isset($_POST['update_blog_btn'])) {
            $tbl_blog_id = $_POST['tbl_blog_id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $links = $_POST['links'];
            $new_image = $_FILES['image']['name'];
            $old_image = $_POST['old_image'];

            if ($new_image != "") {
                $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $update_filename = time() . '.' . $image_ext;
            } else {
                $update_filename = $old_image;
            }
            $path = "../uploaded";

            $update_query = "UPDATE tbl_blog SET 
                    title='$title', 
                    description='$description', 
                    links='$links', 
                    image='$update_filename' 

                WHERE id='$tbl_blog_id' 
            ";
            $update_query_run = mysqli_query($con, $update_query);

            if ($update_query_run){
                if ($_FILES['image']['name'] != ""){
                    move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
                    if (file_exists("../uploaded/" . $old_image)){
                        unlink("../uploaded/" . $old_image);
                    }
                }
                redirect("all_blog.php?id=$tbl_blog_id", "News & Blog Updated Successfully!");
            }else{
                http_response_code(500);
                error("all_blog.php?id=$tbl_blog_id", "Something went wrong!");
            }
        }
    // UPDATE BLOG FUNCTIONS

    // UPDATE TREATMENT RECORD FUNCTIONS 
        else if (isset($_POST['update_treatment_record_btn'])) {
            $record_id = $_POST['record_id'];
            $date = $_POST['date'];
            $procedure_description = $_POST['procedure_description'];

            $update_query = "UPDATE tbl_treatment_record 
                    SET 
                    date = '$date', 
                    procedure_description = '$procedure_description' 
                    WHERE record_id = '$record_id'
            ";
            $update_query_run = mysqli_query($con, $update_query);

            function jsRedirect($jsScript, $message) {
                $_SESSION['message'] = $message;
                echo "<script>{$jsScript}</script>";
                exit();
            }

            if ($update_query_run) {
                jsRedirect("window.history.go(-2);", "Treatment Record Updated Successfully!");
                exit();
            } else {
                http_response_code(500);
                jsRedirect("window.history.go(-2);", "Something went wrong!");
            }
        }
    // UPDATE TREATMENT RECORD FUNCTIONS 

    // ADD EXPENSES FUNCTIONS
        else if (isset($_POST['add_clinic_exp'])) {
            $date = $_POST['date'];
            $billNames = $_POST['billName'];
            $amountArray = $_POST['amount'];
        
            if (!empty($_FILES['image']['name'][0])) {
                foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                    if (isset($billNames[$key]) && isset($amountArray[$key])) {
                        $image = $_FILES['image']['name'][$key];
                        $amount = $amountArray[$key];
                        $billName = $billNames[$key];
        
                        $path = "../uploaded/";
                        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
                        $filename = uniqid('', true) . '.' . $image_ext;
        
                        if (move_uploaded_file($tmp_name, $path . $filename)) {
                            $exp_query = "INSERT INTO tbl_expenses (date, billName, amount, image) VALUES (?, ?, ?, ?)";
                            $stmt = mysqli_prepare($con, $exp_query);
                            mysqli_stmt_bind_param($stmt, 'ssss', $date, $billName, $amount, $filename);
                            $exp_query_run = mysqli_stmt_execute($stmt);
        
                            if (!$exp_query_run) {
                                error("expenses.php", "Error occurred while inserting data into database");
                                exit;
                            }
                        } else {
                            error("expenses.php", "Failed to move uploaded file");
                            exit;
                        }
                    } else {
                        error("expenses.php", "Bill name or amount missing for uploaded image");
                        exit;
                    }
                }
            } else {
                error("expenses.php", "No files were uploaded");
                exit;
            }
            redirect("expenses.php", "Clinic Expenses inserted Successfully");
        }
    // ADD EXPENSES FUNCTIONS

    // ADD BLOG FUNCTIONS
        else if (isset($_POST['add_blog_btn'])) {
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $links = trim($_POST['links']);
            $image = $_FILES['image']['name'];
            $path = "../uploaded";
            $image_ext = pathinfo($image, PATHINFO_EXTENSION);
            $filename = time() . '.' . $image_ext;
            $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($image_ext, $allowed_extensions)) {
                redirect("all_blog.php", "Invalid image file type");
                exit();
            }
        
            $stmt = $con->prepare("INSERT INTO tbl_blog (title, description, links, image) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $title, $description, $links, $filename);
        
            if ($stmt->execute()) {
                $stmt->close();
                move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
                redirect("all_blog.php", "News & Blogs Added Successfully");
            } else {
                $stmt->close();
                error("all_blog.php", "Something Went Wrong");
                exit();
            }
        }
    // ADD BLOG FUNCTIONS

    // ADD TREATMENT PLAN FUNCTIONS
        else if (isset($_POST['add_treatmentPlan'])) {
            $patient_id = $_POST['patient_id']; 
            $date = $_POST['date'];
            $procedure_description = $_POST['procedure_description']; 

            $stmt = $con->prepare("INSERT INTO tbl_treatment_record (id, date, procedure_description) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $patient_id, $date, $procedure_description);
        
            if ($stmt->execute()) {
                $stmt->close();
                redirect("treatment_record.php?id=$patient_id", "Treatment Record Added Successfully");
            } else {
                $stmt->close();
                error("treatment_record.php?id=$patient_id", "Failed to add treatment record");
                exit();
            }
        }
    // ADD TREATMENT PLAN FUNCTIONS

    // ADD WAITING LIST FUNCTIONS
        else if (isset($_POST['add_patient_waitinglist_btn'])) {
            $service = trim($_POST['service']);
            $patient_name = trim($_POST['patient_name']);
            $hmo = trim($_POST['hmo']);
            $email = trim($_POST['email']);
            $age = trim($_POST['age']);
            $gender = trim($_POST['gender']);
            $phone = trim($_POST['phone']);
            $address = trim($_POST['address']);
            $dob = trim($_POST['dob']);
            $reason_visit = trim($_POST['reason_visit']);
            $urgency_lvl = trim($_POST['urgency_lvl']);
        
            $stmt = $con->prepare("INSERT INTO tbl_appointments (
                                    service,
                                    patient_name,
                                    hmo,
                                    email,
                                    age,
                                    gender,
                                    phone,
                                    address,
                                    dob,
                                    reason_visit, 
                                    urgency_lvl
                                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssss", $service, $patient_name, $hmo, $email, $age, $gender, $phone, $address, $dob, $reason_visit, $urgency_lvl);
        
            if ($stmt->execute()) {
                $stmt->close();
                redirect("all_waitinglist.php", "Patient Added Successfully");

            } else {
                $stmt->close();
                error("all_waitinglist.php", "Something Went Wrong");
                exit();
            }
        }
    // ADD WAITING LIST FUNCTIONS

    // SAVE DENTAL CHART FUNCTIONS
        else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['patient_id']) && isset($_POST['chart_image'])) {
            $patient_id = $_POST['patient_id'];
            $chart_image_data = $_POST['chart_image'];
        
            $upload_dir = '../uploaded/patient_charts/';
            $file_name = uniqid('chart_') . '.png';
        
            $file_path = $upload_dir . $file_name;
        
            $decoded_image = base64_decode($chart_image_data);
        
            if (file_put_contents($file_path, $decoded_image)) {
                $stmt = $con->prepare("INSERT INTO tbl_chart (id, image) VALUES (?, ?)");
                $stmt->bind_param("is", $patient_id, $file_path);
        
                if ($stmt->execute()) {
                    echo "Image saved successfully.";
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                    exit();
                }

                $stmt->close();
            } else {
                echo "Failed to save image file.";
                exit();
            }
            $con->close();
        } 
    // SAVE DENTAL CHART FUNCTIONS

    // DELETE BLOG FUNCTIONS
        else if(isset($_POST['delete_blog_btn'])){
            $all_blog_table = mysqli_real_escape_string($con, $_POST['all_blog_table']);

            $tbl_blog_query = "SELECT * FROM tbl_blog WHERE id='$all_blog_table' ";
            $tbl_blog_query_run = mysqli_query($con, $tbl_blog_query);

            if(mysqli_num_rows($tbl_blog_query_run) > 0) {
                $delete_query = "DELETE FROM tbl_blog WHERE id='$all_blog_table' ";
                $delete_query_run = mysqli_query($con, $delete_query);

                if($delete_query_run){
                    echo 200;
                } else {
                    echo 500;
                }
            }
        }
    // DELETE BLOG FUNCTIONS

    // DELETE PATIENT APP & INFO FUNCTIONS
        else if(isset($_POST['delete_patient_btn'])){
            $all_app_patient_table = mysqli_real_escape_string($con, $_POST['all_app_patient_table']);

            $tbl_appointment_query = "SELECT * FROM tbl_appointments WHERE patient_id='$all_app_patient_table' ";
            $tbl_appointment_query_run = mysqli_query($con, $tbl_appointment_query);

            if(mysqli_num_rows($tbl_appointment_query_run) > 0) {
                $delete_query = "DELETE FROM tbl_appointments WHERE patient_id='$all_app_patient_table' ";
                $delete_query_run = mysqli_query($con, $delete_query);

                if($delete_query_run){
                    echo 200;
                } else {
                    echo 500;
                }
            }
        }
    // DELETE PATIENT APP & INFO FUNCTIONS
    
    // DELETE EXPENSES FUNCTIONS
        else if(isset($_POST['delete_clinic_exp_btn'])){
            $delete_clinic_exp = mysqli_real_escape_string($con, $_POST['delete_clinic_exp']);

            $tbl_clinic_exp_query = "SELECT * FROM tbl_expenses WHERE bill_id='$delete_clinic_exp' ";
            $tbl_clinic_exp_run = mysqli_query($con, $tbl_clinic_exp_query);

            if(mysqli_num_rows($tbl_clinic_exp_run) > 0) {
                $delete_query = "DELETE FROM tbl_expenses WHERE bill_id='$delete_clinic_exp' ";
                $delete_query_run = mysqli_query($con, $delete_query);

                if($delete_query_run){
                    echo 200;
                } else {
                    echo 500;
                }
            }
        }
    // DELETE EXPENSES FUNCTIONS

    // DELETE FEEDBACK FUNCTIONS
        else if(isset($_POST['delete_feedback_btn'])){
            $feedback_table = mysqli_real_escape_string($con, $_POST['feedback_table']);

            $tbl_feedback_query = "SELECT * FROM tbl_feedback WHERE id='$feedback_table' ";
            $tbl_feedback_query_run = mysqli_query($con, $tbl_feedback_query);

            if(mysqli_num_rows($tbl_feedback_query_run) > 0) {
                $delete_query = "DELETE FROM tbl_feedback WHERE id='$feedback_table' ";
                $delete_query_run = mysqli_query($con, $delete_query);

                if($delete_query_run){
                    echo 200;
                } else {
                    echo 500;
                }
            }
        }
    // DELETE FEEDBACK FUNCTIONS

    // DELETE TREATMENT RECORD
        else if(isset($_POST['delete_treatment_record'])){
            $treatment_record_table = mysqli_real_escape_string($con, $_POST['treatment_record_table']);

            $treatment_record_q = "SELECT * FROM tbl_treatment_record WHERE record_id='$treatment_record_table' ";
            $treatment_record_q_run = mysqli_query($con, $treatment_record_q);

            if(mysqli_num_rows($treatment_record_q_run) > 0) {
                $delete_query = "DELETE FROM tbl_treatment_record WHERE record_id='$treatment_record_table' ";
                $delete_query_run = mysqli_query($con, $delete_query);

                if($delete_query_run){
                    echo 200;
                } else {
                    echo 500;
                }
            }
        }
    // DELETE TREATMENT RECORD

    // DELETE CHART RECORD
        else if(isset($_POST['delete_chart_record'])){
            $chart_table_record = mysqli_real_escape_string($con, $_POST['chart_table_record']);

            $chart_record_q = "SELECT * FROM tbl_chart WHERE chart_id='$chart_table_record' ";
            $chart_record_q_run = mysqli_query($con, $chart_record_q);

            if(mysqli_num_rows($chart_record_q_run) > 0) {
                $delete_query = "DELETE FROM tbl_chart WHERE chart_id='$chart_table_record' ";
                $delete_query_run = mysqli_query($con, $delete_query);

                if($delete_query_run){
                    echo 200;
                } else {
                    echo 500;
                }
            }
        }
    // DELETE CHART RECORD

    else{
        header('Location: ../index.php');
    }
?> 