<?php
    $title = "Daily Waiting list - KV Dental Clinic";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4 mt-4" id="tbl_patient_info_id">
        <div class="row">
            <h3 class="float-start">Daily Waiting <span>List</span></h3>
            <hr>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <form class="d-flex" role="search">
                <input id="searchInput" class="form-control me-3" type="search" placeholder="Search Patient Name..." aria-label="Search">
            </form>
            <a title="Add patient" type="button" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_to_queue_btn">
                Add patient <i class="fa-solid fa-circle-plus ms-2"></i>
            </a>
        </div>

  
        <table style="font-size: small;" class="table table-striped table-wrapper-scroll-y my-custom-scrollbar text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Queue</th>
                    <th>Patient Name</th>
                    <th>Urgency Level</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="searchPatientName">
                <?php
                    if (isset($_GET['filter'])) {
                        $filterType = $_GET['filter'];
                        $appointment = getAllPatients($filterType);
                    } else {
                        $appointment = getAllPatients();
                    }
                
                    function toPascalCase($string) {
                        $words = explode(' ', strtolower($string));
                        $pascalCaseWords = array_map('ucfirst', $words);
                        return implode(' ', $pascalCaseWords);
                    }

                    $daily_waiting_list = getDailyWaitingList("tbl_appointments");
                    if (mysqli_num_rows($daily_waiting_list) > 0) {
                        $queue_number = 1;
                        foreach ($daily_waiting_list as $data) {
                            ?>
                                <tr>
                                    <td><small><?= $queue_number; ?></small></td>
                                    <td><small><?= toPascalCase($data['patient_name']); ?></small></td>
                                    <td><small><?= $data['urgency_lvl']; ?></small></td>
                                    <td><small><?= $data['status_upt']; ?></small></td>
                                    <td>                                        
                                        <a href="edit_patient_info.php?id=<?= $data['patient_id']; ?>" type="button" class="pe-2 text-secondary" title="Edit Patient Informations"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="charting_plan.php?id=<?= $data['patient_id']; ?>" type="button" class="pe-2" title="Make A Charting"><i class="fa-solid fa-tooth"></i></a>
                                        <a type="button" value="<?= $data['patient_id']; ?>" class="delete_patient_btn" title="Delete Patient Info & Appointment"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                    </td>
                                </tr>
                            <?php
                            $queue_number++;
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="6">No Patient</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php include('inc/footer.php'); ?>