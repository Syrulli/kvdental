<?php
    $title = "Book an appointment";
    include('functions/userfunction.php');
    include('./includes/header.php');
    include('email.php');
?>

<section style="background-image: url('img/dummy_img_1.png') !important; background-repeat: no-repeat; background-position: center !important; background-size: cover; background-attachment: fixed;">
    <div class="container home-container1-content">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-12 col-sm-12 text-start mt-sm-5">
                <h3 id="text" class="typing-text" style="color: var(--text-color); font-size: 60px; font-size: clamp(2rem, 5vw, 5rem); border-right: 2px solid white;"></h3>
                <p style="color:white;">Welcome to our Online Dental Appointment Scheduling! Book your dental appointments easily and conveniently. Choose your preferred date and time for a seamless experience. Our dedicated dental professionals are here to provide exceptional care. Thank you for choosing us for your dental health needs—we look forward to seeing you soon!</p>
            </div>
        </div>
    </div>
</section>
<section class="position-relative pb-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <h2 class="mb-2" style="color: var(--first-color);">Best dental clinic that you can trust.</h2>
                <p><small><i class="fa-solid fa-calendar-xmark"></i> Monday <span style="color: red !important;">CLOSED</span></small></p>
                <p><small><i class="fa-regular fa-clock"></i> Tuesday 10:00 AM - 6:00 PM</small></p>
                <p><small><i class="fa-regular fa-clock"></i> Wednesday 10:00 AM - 6:00 PM </small></p>
                <p><small><i class="fa-regular fa-clock"></i> Thursday10:00 AM - 6:00 PM</small></p>
                <p><small><i class="fa-regular fa-clock"></i> Friday10:00 AM - 6:00 PM</small></p>
                <p><small><i class="fa-regular fa-clock"></i> Saturday 9:00 AM - 6:00 PM</small></p>
                <p><small><i class="fa-regular fa-clock"></i> Sunday 9:00 AM - 1:00 PM</small></p>
            </div>
            <div class="col-lg-5" id="appointmentDiv" style="display: block;">
                <div class="card mt-lg-3 shadow bg-body-tertiary rounded">
                    <form id="appointmentForm" class="active">
                        <div class="card-header text-center text-white" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Appointment Preference</div>
                        <div class="card-body">
                            <div class="mb-3 ">
                                <label for="appointment_date" class="form-label"><small>Appointment Date</label></small>
                                <input type="date" id="appointment_date" name="appointment_date" class="form-control" min="2024-01-01" required>
                            </div>

                            <div class="mb-3">
                                <label for="appointment_date" class="form-label"><small>Available Time Slot</label></small>
                                <select name="timeSlot" id="appointment_availableTime" class="form-select" autocomplete="on" required>
                                    <option>Select a date first</option>
                                </select>
                            </div>

                            <label for="hmo" class="form-label"><small>Health maintenance organization <small>(<span style="color: var(--first-color);"><b>Optional</b></span>)</small></label></small>
                            <select class="form-select mb-3" id="hmo" name="hmo" aria-label="Default select example" autocomplete="on">
                                <option selected>No HMO</option>
                                <option value="Maxicare Healthcare Corp.">Maxicare Healthcare Corp.</option>
                                <option value="Medicard Philippines, lnc.">Medicard Philippines, lnc.</option>
                            </select>

                            <label for="service" class="form-label"><small>Dental services</small></label>
                            <select for="service" id="service" name="service" class="form-select mb-3" required aria-label="Large select example" required autocomplete="on">
                                <option selected>Dental services offered:</option>
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
                        </div>
                        <div class="card-footer text-body-secondary text-center">
                            <button type="button" id="nextButton" class="btn btn-primary btn-sm">Next <i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </form>

                    <form id="personalInfoForm" class="active" style="display: none;">
                        <div class="card-header text-center text-white" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Personal Informations</div>

                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="patient_name"><small>Full Name</label></small>
                                <input type="text" id="patient_name" name="patient_name" class="form-control" placeholder="Enter full name." required autocomplete="on">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dob"><small>Birthdate</label></small>
                                <input type="date" id="dob" name="dob" class="form-control" required autocomplete="on" min="1920-01-01">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="age"><small>Age </label></small>
                                <input type="number" maxlength="100" class="form-control" id="age" name="age" placeholder="Enter Age" required autocomplete="on">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="gender">
                                    <small>Gender</small>
                                </label>
                                <div class="d-flex justify-content-center">
                                    <div class="form-check me-4">
                                        <input class="form-check-input" type="radio" name="gender" value="Male" id="male" checked>
                                        <label class="form-check-label" for="male"><small>Male</small></label>
                                    </div>
                                    <div class="form-check me-4">
                                        <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                                        <label class="form-check-label" for="female"><small>Female</small></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Prefer not to say" id="prefer-not-to-say">
                                        <label class="form-check-label" for="prefer-not-to-say"><small>Prefer not to say</small></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-body-secondary text-center">
                            <button id="prevButton" type="submit" class="btn btn-secondary btn-sm"><i class="fa-solid fa-angle-left"></i> Back</button>
                            <button id="nextButton2" type="button" class="btn btn-primary btn-sm">Next <i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </form>

                    <form id="contactInfoForm" class="active" style="display: none;">
                        <div class="card-header text-center text-white" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Contact Informations</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="phone"><small>Phone No#</label></small>
                                <input type="tel" maxlength="11" name="phone" id="phone" class="form-control" placeholder="Enter 11-digits philippines phone number" required autocomplete="on">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email"><small>Email Address<small> (<span style="color: var(--first-color);"><b>Optional</b></span>)</small></label></small>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email." autocomplete="on">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="address"><small>Complete Address</label></small>
                                <textarea rows="5" type="text" id="address" name="address" class="form-control" placeholder="Please enter complete address" required autocomplete="on"></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-body-secondary text-center">
                            <button id="prevButton2" type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-angle-left"></i> Back</button>
                            <button id="submitButton" type="button" class="btn btn-success btn-sm final_step">Schedule an appointment <i class="fa-solid fa-calendar-check"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5" id="clinicClosedDiv" style="display: none;">
                <div class="card mt-lg-3 shadow bg-body-tertiary rounded" id="hide_appointment">
                    <div class="card-header text-center text-white" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">Clinic Closed Today</div>
                    <div class="card-body text-center">
                        <img src="img/dummy_img_11.png" style="width: 66%;">
                        <div class="row text-start">
                            <p><small>Please be advised that KV Dental Clinic is closed today. We apologize for any inconvenience this may cause and appreciate your understanding. We will be ready to assist you on our next business day.</small></p>
                            <p><small>Thank you for your continued trust in <span>KV Dental Clinic</span>. We look forward to serving you soon.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="position-absolute bottom-0 start-0" style="z-index: -1;">
        <path fill="#e4e4e45a" fill-opacity="1" d="M0,64L34.3,80C68.6,96,137,128,206,154.7C274.3,181,343,203,411,213.3C480,224,549,224,617,202.7C685.7,181,754,139,823,106.7C891.4,75,960,53,1029,53.3C1097.1,53,1166,75,1234,90.7C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</section>

<script>
    var i = 0;
    var texts = ["Grin with assurance.", "Book now!", "KV Dental"];

    function typeAndDelete() {
        var text = texts[i];
        var typingText = 0;
        var interval = setInterval(function() {
            if (typingText < text.length) {
                document.getElementById("text").innerHTML += text.charAt(typingText);
                typingText++;
            } else {
                clearInterval(interval);
                setTimeout(function() {
                    deleteText();
                }, 1000);
            }
        }, 100);
    }

    function deleteText() {
        var text = document.getElementById("text").innerHTML;
        var typingLength = text.length;
        var interval = setInterval(function() {
            if (typingLength >= 0) {
                var newText = text.substring(0, typingLength);
                document.getElementById("text").innerHTML = newText;
                typingLength--;
            } else {
                clearInterval(interval);
                i = (i + 1) % texts.length;
                typeAndDelete();
            }
        }, 50);
    }
    typeAndDelete();
</script>
<?php include('./includes/footer.php'); ?>
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
            $.getJSON('functions/getAvailableTimeSlots.php?date=' + selectedDate, (data) => {
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

<!-- REMOVE FUNC SCRIPT IF TATAMAAN YUNG FUNCTION SA TAAS -->
<script>
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth() + 1; // Month is zero-based, kaya add 1
    var currentDay = currentDate.getDate();

    var formattedCurrentDate = currentYear + '-' + (currentMonth < 10 ? '0' : '') + currentMonth + '-' + (currentDay < 10 ? '0' : '') + currentDay;

    document.getElementById('appointment_date').min = formattedCurrentDate;
</script>
<!-- DOB AND AGE AUTOFILL -->
<script>
    $(document).ready(function() {
        function calculateAge(dob) {
            var birthDate = new Date(dob);
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDifference = today.getMonth() - birthDate.getMonth();

            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            return age;
        }

        $('#dob').change(function() {
            var dob = $(this).val();
            if (dob) {
                var age = calculateAge(dob);
                $('#age').val(age).removeClass('is-invalid');
            } else {
                $('#age').val('');
            }
        });

        $('#dob').on('input', function() {
            if (!$(this).val()) {
                $('#age').val('');
            }
        });
    });
</script>