<?php
    $title = "Edit Patient Informations";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
?>
<div class="container-fluid px-4">
    <ol class="breadcrumb mb-3 mt-4">
        <li class="breadcrumb-item active"><a href="all_appointments.php" class="text-black">Appointments Schedule</a></li>
        <li class="breadcrumb-item"><span><b>Edit Patient Informations</b></span></li>
    </ol>
    <hr>
    <div class="row mt-4">
        <div class="col-lg-12">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tbl_appointments = getPatientInfoById("tbl_appointments", $id);

                if (mysqli_num_rows($tbl_appointments) > 0) {
                    $data = mysqli_fetch_array($tbl_appointments);
            ?>
                    <div class="card" style="border: none !important;">
                        <div class="card-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                            <h5>Edit <?= $data['patient_name'] ?>'s Informations</h5>
                        </div>
                        <div class="card-body shadow p-3 mb-5 bg-body-tertiary rounded">
                            <form action="notification.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <input type="hidden" name="tbl_patient_info_id" value="<?= $data['patient_id'] ?>">
                                            <label class="form-label" for="patient_name"><b><small>Patient Name <span style="color: red !important;">*</span></small></b></label>
                                            <input type="text" name="patient_name" value="<?= $data['patient_name'] ?>" class="form-control" placeholder="Enter Patient Name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="age" class="form-label"><b><small>Age <span style="color: red !important;">*</span></small></b></label>
                                            <input type="number" name="age" value="<?= $data['age'] ?>" class="form-control" placeholder="Enter Patient Age" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="dob" class="form-label"><b><small>Birthdate <span style="color: red !important;">*</span></small></b></label>
                                            <input type="date" name="dob" value="<?= $data['dob'] ?>" class="form-control" required>
                                        </div>

                                        <div class="mb-3 ">
                                            <label for="appointment_date" class="form-label"><small>Appointment Date</label></small>
                                            <input type="date" id="appointment_date" value="<?= $data['appointment_date'] ?>" name="appointment_date" class="form-control" min="2024-01-01">
                                        </div>

                                        <div class="mb-3">
                                            <label for="appointment_date" class="form-label"><small>Available Time Slot</label></small>
                                            <select name="timeSlot" id="appointment_availableTime" class="form-select" autocomplete="on">
                                                <option>Select a date first</option>
                                            </select>
                                        </div>

                                        <label for="service" class="form-label"><b><small>Dental services <span style="color: red !important;">*</span></small></b></label>
                                        <select for="service" id="service" name="service" class="form-select mb-3" required aria-label="Large select example">
                                            <option selected><?= $data['service'] ?></option>
                                            <option value="Cleaning & polishing">Cleaning and polishing</option>
                                            <option value="Deep scaling">Deep scaling (gum treatment)</option>
                                            <option value="Tooth filling">Tooth filling (pasta)</option>
                                            <option value="Fluoride treatment">Fluoride treatment</option>
                                            <option value="Pit & fissure sealant">Pit and fissure sealant</option>
                                            <option value="Orthodontic braces">Orthodontic braces and clear aligners (with monthly cleaning and kit)</option>
                                            <option value="Oral Surgery">Oral Surgery (wisdom teeth removal, etc..)</option>
                                            <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                            <option value="Endodontics">Endodontics</option>
                                            <option value="Pediatric Dentistry">Pediatric Dentistry</option>
                                            <option value="Dentures">Dentures (Removable and Fixed)</option>
                                            <option value="Crowns & bridges">Crowns and bridges</option>
                                            <option value="Veneers/Laminates">Veneers/Laminates</option>
                                            <option value="Dental Implants ">Dental Implants</option>
                                        </select>

                                        <div class="mb-3">
                                            <label for="email" class="form-label"><b><small>Email</small></b></label>
                                            <input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" placeholder="Enter email">
                                        </div>

                                        <div class="d-flex flex-column align-items-start mb-3">
                                            <label class="form-label"><b><small>Gender <span style="color: red !important;">*</span></small></b></label>
                                            <div class="d-flex flex-row">
                                                <div class="form-check mx-3">
                                                    <input class="form-check-input" type="radio" name="gender" value="Male" id="male" <?php if ($data['gender'] === 'Male') echo 'checked'; ?>>
                                                    <label class="form-check-label" for="male">Male</label>
                                                </div>
                                                <div class="form-check mx-3">
                                                    <input class="form-check-input" type="radio" name="gender" value="Female" id="female" <?php if ($data['gender'] === 'Female') echo 'checked'; ?>>
                                                    <label class="form-check-label" for="female">Female</label>
                                                </div>
                                                <div class="form-check mx-3">
                                                    <input class="form-check-input" type="radio" name="gender" value="Prefer not to say" id="prefer-not-to-say" <?php if ($data['gender'] === 'Prefer not to say') echo 'checked'; ?>>
                                                    <label class="form-check-label" for="prefer-not-to-say">Prefer not to say</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column align-items-start mb-3">
                                            <label class="form-label"><b><small>Status <span style="color: red !important;">*</span></small></b></label>
                                            <div class="d-flex flex-row">
                                                <div class="form-check mx-3">
                                                    <input class="form-check-input" type="radio" name="IsNewPatient" value="New Patient" id="new_patient" <?php if ($data['IsNewPatient'] === 'New Patient') echo 'checked'; ?>>
                                                    <label class="form-check-label" for="new_patient">New patient</label>
                                                </div>
                                                <div class="form-check mx-3">
                                                    <input class="form-check-input" type="radio" name="IsNewPatient" value="Follow-up Schedule" id="followUp_sched" <?php if ($data['IsNewPatient'] === 'Follow-up Schedule') echo 'checked'; ?>>
                                                    <label class="form-check-label" for="followUp_sched">Follow-up Schedule</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="hmo" class="form-label"><small>Health maintenance organization <small>(<span style="color: var(--first-color);"><b>Optional</b></span>)</small></label></small>
                                        <select class="form-select mb-3" id="hmo" name="hmo" aria-label="Default select example" autocomplete="on">
                                            <option selected>No HMO</option>
                                            <option value="Maxicare Healthcare Corp.">Maxicare Healthcare Corp.</option>
                                            <option value="Medicard Philippines, lnc.">Medicard Philippines, lnc.</option>
                                        </select>

                                        <div class="mb-3">
                                            <label for="phone" class="form-label"><b><small>Phone No# <span style="color: red !important;">*</span></small></b></label>
                                            <input type="tel" name="phone" value="<?= $data['phone'] ?>" class="form-control" placeholder="Phone No." maxlength="11" required>
                                        </div>

                                        <div class="mb-1">
                                            <label class="form-label"><b><small>Address:</small></b></label>
                                            <textarea rows="8" type="text" name="address" class="form-control" placeholder="Address: " required><?= $data['address'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="note"><b><small>Note:</small></b></label>
                                            <textarea rows="6" type="text" name="note" class="form-control" placeholder="Note"><?= $data['note'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="note"><b><small>Reason for visit: </small></b><small>(Applicable only for <span>walk-in</span> patient)</small> </label>
                                            <textarea rows="6" type="text" name="reason_visit" class="form-control" placeholder="Reason for visit." spellcheck="on"><?= $data['reason_visit'] ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary btn-sm me-2" id="remove_disable_btn" title="Edit Informations">Edit Informations</button>
                                    <button type="submit" class="btn btn-success btn-sm" name="update_patient_btn" id="submit_btn" title="Update" disabled>Update <i class="fa-solid fa-paper-plane"></i></button>
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
        toggleButton.innerHTML = 'Edit Informations  <i class="fa-solid fa-pen-to-square"></i>';

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
<script>
    const checkDayofWeek = (selectedDate) => {
        const date = new Date(selectedDate);
        const dayOfWeek = date.getDay();
        const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        const dayName = days[dayOfWeek];
        return dayName
    }

    const checkIfDateIsValid = (appointmentDate) => {
        const today = new Date();
        const comparisonDate = new Date(appointmentDate);

        today.setHours(0, 0, 0, 0);
        comparisonDate.setHours(0, 0, 0, 0);

        if (today.getTime() <= comparisonDate.getTime()) {
            return true;
        } else {
            return false;
        }
    }

    const validateAppointment = (appointmentDate) => {
        if (checkDayofWeek(appointmentDate) === 'Monday') {
            return false;
        } else if (!checkIfDateIsValid(appointmentDate)) {
            return false;
        } else {
            return true;
        }
    }

    const writeTimeSlots = (timeSlotsAvailable, appointmentDate) => {

        let processedTimeSlots = [];
        const now = new Date();

        const sundayTimeSlots = ['1', '2', '3', '4'];
        const saturdayTimeSlots = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
        const weekdayTimeSlots = ['2', '3', '4', '5', '6', '7', '8', '9'];

        const timeSlotLabels = {
            '1': '09:00am - 10:00am',
            '2': '10:00am - 11:00am',
            '3': '11:00am - 12:00pm',
            '4': '12:00pm - 01:00pm',
            '5': '01:00pm - 02:00pm',
            '6': '02:00pm - 03:00pm',
            '7': '03:00pm - 04:00pm',
            '8': '04:00pm - 05:00pm',
            '9': '05:00pm - 06:00pm'
        };

        const getTimeSlotEndTime = (timeSlotId) => {
            const timeSlot = timeSlotLabels[timeSlotId];
            const endTime = timeSlot.split('-')[1].trim();
            const [time, modifier] = endTime.split(' ');
            let [hours, minutes] = time.split(':');

            if (modifier === 'pm' && hours !== '12') {
                hours = parseInt(hours, 10) + 12;
            }

            const endDate = new Date(appointmentDate);
            endDate.setHours(hours, minutes, 0, 0);
            return endDate;
        };

        const filterPastTimeSlots = (timeSlots) => {
            return timeSlots.filter((data) => {
                const endTime = getTimeSlotEndTime(data.id);
                return endTime > now;
            });
        };

        switch (checkDayofWeek(appointmentDate)) {
            case 'Sunday':
                processedTimeSlots = timeSlotsAvailable.filter(data => sundayTimeSlots.includes(data.id));
                break;
            case 'Saturday':
                processedTimeSlots = timeSlotsAvailable.filter(data => saturdayTimeSlots.includes(data.id));
                break;
            case 'Monday':
                processedTimeSlots = [];
                break;
            default:
                processedTimeSlots = timeSlotsAvailable.filter(data => weekdayTimeSlots.includes(data.id));
                break;
        }

        if (new Date(appointmentDate).toDateString() === now.toDateString()) {
            processedTimeSlots = filterPastTimeSlots(processedTimeSlots);
        }

        return processedTimeSlots;
    }

    $('#appointment_date').change(function() {
        const selectedDate = $(this).val();
        let output = '<option>Clinic Closed</option>';

        if (validateAppointment(selectedDate)) {
            $.getJSON('../functions/getAvailableTimeSlots.php?date=' + selectedDate, (data) => {
                if (data.length === 0) {
                    alertify.error('No slots available');
                    $('#appointmentForm').find('#nextButton').prop('disabled', true);
                } else {
                    output = '';
                    const timeSlotDataProcessed = writeTimeSlots(data, selectedDate);
                    timeSlotDataProcessed.map((data, indx) => {
                        output += `<option value=${data.id}>${data.time_labels}</option>`;
                    });

                    $('#appointmentForm').find('#nextButton').prop('disabled', false);
                }
                $('#appointment_availableTime').html(output);
            });
        } else {
            alertify.error('Clinic Closed!');
            $('#appointmentForm').find('#nextButton').prop('disabled', true);
        }
        $('#appointment_availableTime').html(output);
    });
</script>

<script>
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth() + 1; // Month is zero-based, kaya add 1
    var currentDay = currentDate.getDate();

    var formattedCurrentDate = currentYear + '-' + (currentMonth < 10 ? '0' : '') + currentMonth + '-' + (currentDay < 10 ? '0' : '') + currentDay;

    document.getElementById('appointment_date').min = formattedCurrentDate;
</script>