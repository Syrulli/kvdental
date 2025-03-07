<?php
    $title = "Edit Treatment Record";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-3 mt-4">
            <li class="breadcrumb-item active">
                <a href="all_appointments.php" class="text-black">Appointments Schedule</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:history.go(-2);" class="text-black">Charting Plan</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:history.go(-1);" class="text-black">Treatment Record</a>
            </li>
            <li class="breadcrumb-item">
                <span><b>Edit Treatment Record</b></span>
            </li>
        </ol>
        <hr> 
        <div class="row mt-4">
            <div class="col-lg-12">
                <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $tbl_treatment_record = editTreatmentRecord($id);

                        if (mysqli_num_rows($tbl_treatment_record) > 0) {
                            $data = mysqli_fetch_array($tbl_treatment_record);
                            ?>
                                <div class="card" style="border: none !important;">
                                    <div class="card-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                        <h5>Edit <?= $data['patient_name'] ?>'s Treatment Record</h5>
                                    </div>
                                    <div class="card-body shadow p-3 mb-5 bg-body-tertiary rounded">
                                        <form action="code.php" method="POST" enctype="multipart/form-data" id="treatmentPlan_form">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <input type="hidden" name="record_id" value="<?= $data['record_id'] ?>">
                                                    <label class="form-label" for="date"><small><b>Date & Time </b></small><span style="color: red !important;">*</span></label>
                                                    <input type="datetime-local" name="date" class="form-control"  value="<?= $data['date'] ?>" placeholder="Date & Time" required max="<?php echo date('Y-m-d\TH:i', strtotime('+1 day')); ?>">
                                                </div>
                                                </div>
                                                <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="procedure_description"><small><b>Procedure</b></small><span style="color: red !important;">*</span></label>
                                                    <textarea rows="6" type="text" name="procedure_description" class="form-control" placeholder="Procedure." spellcheck="on" required><?= $data['procedure_description'] ?></textarea>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-end">
                                                <button type="button" class="btn btn-secondary btn-sm me-2" id="remove_disable_btn" title="Edit Informations">Edit Record</button>
                                                <button type="submit" class="btn btn-success btn-sm" name="update_treatment_record_btn" id="submit_btn" title="Update Treatment Record" disabled>Update <i class="fa-solid fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php
                        } else {
                            error("all_appointments.php", "Patient Information Not Found");
                            exit();
                        }
                    } else {
                        error("all_appointments.php", "ID Missing from URL");
                        exit();
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('remove_disable_btn');
        const formFields = document.querySelectorAll('input, select, textarea');
        const submitButton = document.getElementById('submit_btn');

        formFields.forEach(field => {
            field.setAttribute('disabled', 'disabled');
        });
        submitButton.setAttribute('disabled', 'disabled');
        toggleButton.innerHTML = 'Edit Record  <i class="fa-solid fa-pen-to-square"></i>';

        toggleButton.addEventListener('click', function(event) {
            event.preventDefault();
            formFields.forEach(field => {
                if (field.hasAttribute('disabled')) {
                    field.removeAttribute('disabled');
                } else {
                    field.setAttribute('disabled', 'disabled');
                }
            });
            submitButton.removeAttribute('disabled');
            toggleButton.setAttribute('disabled', 'disabled');
        });
    });
</script>



