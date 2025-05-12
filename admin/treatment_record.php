<?php
    $title = "Treatment Record | KV Dental Clinic";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4" id="treatment_record_table">
        <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl_treatment_record = getTreatmentRecordByPatientID($id);
                ?>
                    <ol class="breadcrumb mb-3 mt-4">
                        <li class="breadcrumb-item active">
                            <a href="all_appointments.php" class="text-black">Appointments Schedule</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="charting_plan.php?id=<?= $id; ?>" class="text-black">Charting Plan</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span><b>Treatment Record</b></span>
                        </li>
                    </ol>
                    <hr>
                <?php
                if (mysqli_num_rows($tbl_treatment_record) > 0) {
                    $data = mysqli_fetch_array($tbl_treatment_record);
                    ?>
                        <div class="card" style="border: none !important;">
                            <div class="card-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <h5><?= $data['patient_name'] ?>'s Treatment Record</h5>
                            </div>
                            <div class="card-body shadow p-3 mb-5 bg-body-tertiary rounded">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <table style="font-size: small;" class="table table-fluid table-striped table-wrapper-scroll-y my-custom-scrollbar text-center">
                                        <thead>
                                            <tr>
                                                <th>Procedure</th>
                                                <th>Date & Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                mysqli_data_seek($tbl_treatment_record, 0);
                                                while ($data = mysqli_fetch_assoc($tbl_treatment_record)) {
                                                ?>
                                                    <tr>
                                                        <input type="hidden" name="record_id" value="<?= $data['record_id'] ?>">
                                                        <td><small><?= $data['procedure_description'] ?></small></td>
                                                        <td><small><?= $data['date'] ?></small></td>
                                                        <td>
                                                            <a href="edit_treatment_record.php?id=<?= $data['record_id']; ?>" type="button" class="pe-2 text-secondary" title="Edit Treatment Record"><i class="fa-solid fa-pen-to-square"></i></a>
                                                            <a type="button" value="<?= $data['record_id']; ?>" class="delete_treatment_record" title="Delete Treatment Record"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <a title="Add Treatment Record" type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#makeTreatmentPlan">
                                            Add Treatment Record <i class="fa-solid fa-file-circle-plus"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                } else {
                    error("all_appointments.php", "No treatment records found.");
                    exit();
                }
            } else {
                error("all_appointments.php", "ID Missing from URL");
                exit();
            }
        ?>
    </div>
</section>
<?php include('inc/footer.php'); ?>