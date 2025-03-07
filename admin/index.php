<?php
    $title = "Dashboard - KV Dental ";
    include('../middleware/admin_middleware.php');
    include('./inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4 mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card text-center shadow bg-body-tertiary rounded">
                    <div class="card-header bg-primary text-white">
                        <small>Total Clinic Expenses</small>
                    </div>
                    <div class="card-body">
                        <b class="h3">
                            ₱
                            <span id="totalExpCount" class="animated-count">
                                <?php
                                    $totalExp = getTotalExpenses();
                                    echo $totalExp;
                                ?>
                            </span>
                        </b>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card text-center shadow bg-body-tertiary rounded">
                    <div class="card-header bg-primary text-white">
                        <small>Total Appointments</small>
                    </div>
                    <div class="card-body">
                        <b class="h3">
                            +
                            <span id="appointmentCount" class="animated-count">
                                <?php
                                    $appointment = getAllAppointmentsForDashboard("tbl_appointments");
                                    $totalAppointment = mysqli_num_rows($appointment);
                                ?>
                            </span>
                        </b>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-3">
                <div class="card text-center shadow bg-body-tertiary rounded">
                    <div class="card-header bg-primary text-white">
                        <small>Today's Appointment</small>
                    </div>
                    <div class="card-body">
                        <b class="h3">
                            +
                            <span id="todays_app" class="animated-count">
                                <?php
                                    $todaysAppointment = getTodaysAppointment();
                                    $app_today = mysqli_num_rows($todaysAppointment);
                                ?>
                            </span>
                        </b>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card text-center shadow bg-body-tertiary rounded">
                    <div class="card-header bg-primary text-white">
                        <small>Follow-up Schedules</small>
                    </div>
                    <div class="card-body">
                        <b class="h3">
                            +
                            <span id="followUpSchedCount" class="animated-count">
                                <?php
                                    $followUpSched = getFollowupSchedule("tbl_appointments");
                                    $totalfollowUpSched = mysqli_num_rows($followUpSched);
                                ?>
                            </span>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid px-4 mt-5">
        <div class="row float-end mb-3">
            <form class="d-flex" role="search">
                <input id="searchInput" class="form-control me-2" type="search" placeholder="Search Patient Name..." aria-label="Search">
            </form>
        </div>
        <table style="font-size: small;" class="table table-striped table-wrapper-scroll-y my-custom-scrollbar text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Appointment Date</th>
                    <th>Service</th>
                    <th><small>Status</small></th>
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
                                    <td><small><span>Walk-in</span> Patient <span><?= $queue_number; ?></span></small></td>
                                    <?php $queue_number++; ?>
                                    <?php } else { ?>
                                        <td><small><?= htmlspecialchars($data['appointment_date'] . " | " . $data['time_labels']); ?></small></td>
                                    <?php } ?>
                                <td><?= $data['service']; ?></td>
                                <td><?= $data['IsNewPatient']; ?></td>
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
<script>
    var appointmentCount = <?php echo $totalAppointment; ?>;
    var followUpSchedCount = <?php echo $totalfollowUpSched; ?>; 
    var todays_app = <?php echo $app_today; ?>;

    function animateCount(elementId, finalCount) {
        var displayCount = 0;
        var step = Math.max(1, Math.ceil(finalCount / 200)); 

        function updateCount() {
            displayCount += step;
            if (displayCount >= finalCount) {
                displayCount = finalCount;
                clearInterval(animation);
            }
            document.getElementById(elementId).textContent = displayCount;
        }

        var animation = setInterval(updateCount, 130); 
    }

    animateCount('appointmentCount', appointmentCount);
    animateCount('followUpSchedCount', followUpSchedCount);
    animateCount('todays_app', todays_app);
</script>