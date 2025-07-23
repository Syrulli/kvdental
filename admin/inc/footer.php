        <footer class="py-4 bg-light mt-auto postion">
            <div class="container-fluid px-4">
                <div class="small text-center">
                    <div class="text-muted">&copy;Dental Clinic | All rights reserved.</div>
                </div>
            </div>
        </footer>

        <script src="lib/js/minified.js" crossorigin="anonymous"></script>
        <!-- <script src="lib/js/jquery.js"></script> -->
        <!-- <script src="lib/js/bs.js"></script> -->
        <script src="lib/js/scripts.js"></script>
        <script src="lib/js/function.js"></script>
        <!-- <script src="lib/js/alertify.js"></script> -->
        <!-- <script src="lib/js/chart.js"></script> -->
        <!-- <script src="lib/js/fontawesome.js"></script> -->
        <!-- <script src="lib/js/sweetalert.min.js"></script> -->
        <!-- <script src="lib/js/dom-to-image.min.js"></script> -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('searchInput');
                if (searchInput) {
                    searchInput.addEventListener('input', function() {

                        const searchText = this.value.toLowerCase();
                        const rows = searchPatientName.getElementsByTagName('tr');
                        let matchFound = false;

                        for (let row of rows) {
                            const nameColumn = row.getElementsByTagName('td')[0];
                            if (nameColumn) {
                                const nameText = nameColumn.textContent.toLowerCase();
                                if (nameText.includes(searchText)) {
                                    row.style.display = '';
                                    matchFound = true;
                                } else {
                                    row.style.display = 'none';
                                }
                            }
                        }

                        const existingNoNameRow = searchPatientName.querySelector('.no-name-row');
                        if (existingNoNameRow) {
                            existingNoNameRow.remove();
                        }

                        if (!matchFound) {
                            const noNameRow = document.createElement('tr');
                            noNameRow.classList.add('no-name-row');
                            const noNameCell = document.createElement('td');
                            noNameCell.setAttribute('colspan', '6');
                            noNameCell.textContent = 'No name found';
                            noNameRow.appendChild(noNameCell);
                            searchPatientName.appendChild(noNameRow);
                        }

                    });
                } else {
                    console.error("Element with ID 'searchInput' not found.");
                }
            });
        </script>
        <script>
            function togglePasswordVisibility() {
                var passwordInput = document.getElementById('password');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                }
            }
        </script>
        <script>
            <?php
            if (isset($_SESSION['message'])) {
            ?>
                alertify.set('notifier', 'position', 'bottom-right');
                alertify.success('<?= $_SESSION['message']; ?>');
            <?php
                unset($_SESSION['message']);
            }
            ?>
        </script>
        <!-- /*==================== FUNC FOR NOTIFICATIONS ====================*/ -->
        <script>
            $(document).ready(function() {
                function toPascalCase(str) {
                    return str
                        .toLowerCase()
                        .split(' ')
                        .map(function(word) {
                            return word.charAt(0).toUpperCase() + word.slice(1);
                        })
                        .join(' ');
                }

                function fetchLatestAppointment() {
                    var url = 'fetch_latest_appointment.php?_=' + new Date().getTime();
                    $.ajax({
                        url: url,
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#notificationDropdown').empty();
                            var latestAppointments = data.latestAppointments;
                            var upcomingCount = 0;

                            if (latestAppointments.length === 0) {
                                var noAppointmentsMessage = $('<li class="dropdown-item text-muted text-center" style="font-size: smaller;"></li>').text('No Appointment Notifications');
                                $('#notificationDropdown').append(noAppointmentsMessage);
                            } else {
                                latestAppointments.forEach(function(appointment) {
                                    var fullName = toPascalCase(appointment.patient_name);
                                    var appointmentDate = new Date(appointment.appointment_date);
                                    var currentDate = new Date();
                                    var timeLabels = appointment.time_labels;

                                    var notificationItem = $('<li class="dropdown-item" style="font-size: smaller;"></li>').text(fullName + ' | ' + appointment.appointment_date + ' | ' + timeLabels);

                                    if (appointmentDate > currentDate) {
                                        if (appointmentDate <= new Date(currentDate.getTime() + 3 * 24 * 60 * 60 * 1000)) {
                                            notificationItem.addClass('text-primary');
                                        } else {
                                            notificationItem.addClass('text-dark');
                                        }
                                        upcomingCount++;
                                    } else {
                                        notificationItem.addClass('text-muted');
                                    }

                                    $('#notificationDropdown').append(notificationItem);
                                });
                            }

                            $('#notificationCount').text(upcomingCount);
                            $('#notificationCount').toggle(upcomingCount > 0);

                            if (upcomingCount > 0) {
                                $('#bellIcon').addClass('shake-animation');
                                $('#notificationDropdown').append('<li class="text-center"><a id="clearNotificationsBtn" class="btn btn-primary btn-sm m-2" style="font-size: smaller;"><small>Clear Notifications</small></a></li>');
                            } else {
                                $('#bellIcon').removeClass('shake-animation');
                            }
                        },
                        error: function(error) {
                            console.error(error);
                        },
                    });
                }

                $(document).on('click', '#clearNotificationsBtn', function() {
                    $.ajax({
                        url: 'fetch_latest_appointment.php?mark_read=true',
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                $('#notificationDropdown').empty();
                                var noAppointmentsMessage = $('<li class="dropdown-item text-muted text-center" style="font-size: smaller;"></li>').text('No Appointment Notification.');
                                $('#notificationDropdown').append(noAppointmentsMessage);
                                $('#notificationCount').text('0');
                                $('#bellIcon').removeClass('shake-animation');
                            } else {
                                console.error(response.message);
                            }
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                });
                fetchLatestAppointment();
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                <?php if (isset($_SESSION['message'])): ?>
                    alertify.success("<?php echo $_SESSION['message']; ?>");
                    <?php unset($_SESSION['message']); ?>
                <?php endif; ?>

                <?php if (isset($_SESSION['error_message'])): ?>
                    alertify.error("<?php echo $_SESSION['error_message']; ?>");
                    <?php unset($_SESSION['error_message']); ?>
                <?php endif; ?>
            });
        </script>
    </body>
</html>