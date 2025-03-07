<?php
    $title = "Patients Appointment - KV Dental Clinic";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4 mt-4" id="tbl_patient_info_id">
        <div class="row">
            <h4 class="float-start">Appointments <span>Schedule</span></h4>
            <hr>
        </div>
        <div class="row float-end mb-3">
            <div class="col-10">
                <form class="d-flex" role="search">
                    <input id="searchInput" class="form-control " type="search" placeholder="Search Patient Name..." aria-label="Search">
                </form>
            </div>
            <div class="col-2 mt-1">
                <div class="d-flex justify-content-end me-3">
                    <div class="dropdown">
                        <a class="btn-sm" title="Sort Appointments" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-sort"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" style="font-size: small;">
                            <li><a class="dropdown-item" href="?filter=today">Today's Appointment</a></li>
                            <li><a class="dropdown-item" href="?filter=this_week">This week appointment</a></li>
                            <li><a class="dropdown-item" href="?filter=this_month">This month appointment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <table style="font-size: small;" class="table table-striped table-wrapper-scroll-y my-custom-scrollbar text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Appointment Date & Time</th>
                    <th>Service</th>
                    <th>Status</th>
                    <th>Actions</th>
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
                    $queue_number = 1;
                    if (mysqli_num_rows($appointment) > 0) {
                        foreach ($appointment as $data) {
                            ?>
                                <tr>
                                    <td><small><?= toPascalCase($data['patient_name']); ?></small></td>
                                    <?php if (empty($data['appointment_date']) && empty($data['time_labels'])) { ?>
                                    <td><small><span>Walk-in</span> Patient #<span><?= $queue_number; ?></span></small></td>
                                    <?php $queue_number++; ?>
                                    <?php } else { ?>
                                        <td><small><?= htmlspecialchars($data['appointment_date'] . " | " . $data['time_labels']); ?></small></td>
                                    <?php } ?>
                                    <td><small><?= $data['service']; ?></small></td>
                                    <td><small><?= $data['IsNewPatient']; ?></small></td>
                                    <td>
                                        <a href="edit_patient_info.php?id=<?= $data['patient_id']; ?>" type="button" class="pe-2 text-secondary" title="Edit Patient Informations"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="charting_plan.php?id=<?= $data['patient_id']; ?>" type="button" class="pe-2" title="Dental Chart"><i class="fa-solid fa-tooth"></i></a>
                                        <a title="View patient appointment preperences " href="#" class="view-patient-appointment pe-2" data-id="<?= $data['patient_id']; ?>" data-bs-toggle="modal" data-bs-target="#viewPatientAppointment"><i class="fa-regular fa-eye"></i></a>
                                        <a type="button" value="<?= $data['patient_id']; ?>" class="delete_patient_btn" title="Delete Patient Info & Appointment"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="6">No appointment found</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php include('inc/footer.php'); ?>