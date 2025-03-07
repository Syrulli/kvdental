/*==================== ALERT FOR DELETE PATIENT ====================*/
$(document).on('click', '.delete_patient_btn', function (e) {
  e.preventDefault();
  var patientAppid = $(this).attr('value');
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: 'code.php',
        data: {
          delete_patient_btn: true,
          all_app_patient_table: patientAppid,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'Appointment Deleted Successfully!', 'success').then(() => {
              location.reload();
            });
          } else if (response == 404) {
            swal('Error!', 'Patient Appointment not found', 'error');
          } else {
            swal('Error!', 'Something went wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== ALERT FOR DELETE NEWS & UPDATES ====================*/
$(document).on('click', '.delete_blog_btn', function (e) {
  e.preventDefault();
  var blogId = $(this).attr('value');
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: 'code.php',
        data: {
          delete_blog_btn: true,
          all_blog_table: blogId,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'Appointment Deleted Successfully!', 'success');
            $('#all_blog_table').load(location.href + ' #all_blog_table');
          } else if (response == 404) {
            swal('Error!', 'News & Blog not found', 'error');
          } else {
            swal('Error!', 'Something went wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== ALERT FOR DELETE CLINIC EXP ====================*/
$(document).on('click', '.delete_clinic_exp_btn', function (e) {
  e.preventDefault();
  var clinic_exp = $(this).attr('value');
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: 'code.php',
        data: {
          delete_clinic_exp_btn: true,
          delete_clinic_exp: clinic_exp,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'Deleted Successfully!', 'success');
            $('#delete_clinic_exp').load(location.href + ' #delete_clinic_exp');
          } else if (response == 404) {
            swal('Error!', 'Data not found', 'error');
          } else {
            swal('Error!', 'Something went wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== ALERT FOR DELETE FEEDBACK ====================*/
$(document).on('click', '.delete_feedback_btn', function (e) {
  e.preventDefault();
  var feedback = $(this).attr('value');
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: 'code.php',
        data: {
          delete_feedback_btn: true,
          feedback_table: feedback,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'Feedback Deleted Successfully!', 'success');
            $('#feedback_table').load(location.href + ' #feedback_table');
          } else if (response == 404) {
            swal('Error!', 'Feedback not found', 'error');
          } else {
            swal('Error!', 'Something went wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== ALERT FOR DELETE TREATMENT RECORD ====================*/
$(document).on('click', '.delete_treatment_record', function (e) {
  e.preventDefault();
  var treatmentTableRecord = $(this).attr('value');
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: 'code.php',
        data: {
          delete_treatment_record: true,
          treatment_record_table: treatmentTableRecord,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'Record Deleted Successfully!', 'success').then(() => {
              window.history.go(-1);
            });
          } else if (response == 404) {
            swal('Error!', 'Treatment Record not found', 'error');
          } else {
            swal('Error!', 'Something went wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== ALERT FOR DELETE CHART RECORD ====================*/
$(document).on('click', '.delete_chart_record', function (e) {
  e.preventDefault();
  var chartTable = $(this).attr('value');
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: 'POST',
        url: 'code.php',
        data: {
          delete_chart_record: true,
          chart_table_record: chartTable,
        },
        success: function (response) {
          if (response == 200) {
            swal('Success!', 'Chart Record Deleted Successfully!', 'success').then(() => {
              location.reload();
            });
          } else if (response == 404) {
            swal('Error!', 'Chart Record not found', 'error');
          } else {
            swal('Error!', 'Something went wrong', 'error');
          }
        },
      });
    }
  });
});

/*==================== FUNC FOR FEEDBACK PROCESS ====================*/
$(document).ready(function () {
  $('.rate label').click(function (e) {
    e.stopPropagation();
  });
  $('#feedback_form').submit(function (e) {
    e.preventDefault();

    var formData = $(this).serialize();
    var email = $('input[name="email"]').val();
    var rating = $('input[name="rate"]:checked').val();

    if (!isValidEmail(email) || !rating) {
      alertify.error('Please fill in all required fields.');
      return false;
    }

    $.ajax({
      type: 'POST',
      url: 'functions/process_feedback.php',
      data: formData,
      success: function () {
        $('#feedback_form')[0].reset();
        alertify.success('Feedback submitted successfully!');
        setTimeout(function () {
          location.reload();
        }, 1000);
      },
      error: function () {
        alertify.error('Error submitting feedback.');
      },
    });
  });
});

function isValidEmail(email) {
  var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return pattern.test(email);
}

/*==================== FUNC FOR VIEW PATIENT INFO ====================*/
$(document).ready(function () {
  $('.view-patient-appointment').click(function (e) {
    e.preventDefault();
    var appointmentId = $(this).data('id');
    fetchPatientInfo(appointmentId);
  });

  function fetchPatientInfo(appointmentId) {
    $.ajax({
      url: 'get_patient_info.php',
      method: 'GET',
      data: { id: appointmentId },
      success: function (response) {
        $('#viewPatientAppointment .modal-body').html(response);
      },
      error: function (error) {
        console.error(error);
      },
    });
  }
});

/*==================== FUNC FOR CLINIC EXP INFO ====================*/
$(document).ready(function () {
  $('.view-clinic-exp').click(function (e) {
    e.preventDefault();
    var clinic_bill_id = $(this).data('id');
    fetchClinicExpenses(clinic_bill_id);
  });

  function fetchClinicExpenses(clinic_bill_id) {
    $.ajax({
      url: 'get_clinic_exp.php',
      method: 'GET',
      data: { bill_id: clinic_bill_id },
      success: function (response) {
        $('#viewClinicExp .modal-body').html(response);
      },
      error: function (error) {
        console.error(error);
      }
    });
  }
});

/*==================== FUNC FOR VIEW FEEDBACK INFO ====================*/
$(document).ready(function () {
  $('.view-feedback').click(function (e) {
    e.preventDefault();
    var patientFeedback = $(this).data('id');
    fetchPatientInfo(patientFeedback);
  });

  function fetchPatientInfo(patientFeedback) {
    $.ajax({
      url: 'get_patient_feedback.php',
      method: 'GET',
      data: { id: patientFeedback },
      success: function (response) {
        $('#viewPatientFeedback .modal-body').html(response);
      },
      error: function (error) {
        console.error(error);
      },
    });
  }
});


/*==================== FUNC FOR APPOINTMENT PROCESS ====================*/
$(document).ready(function () {
  function disableButtons() {
    $('button').prop('disabled', true);
  }

  function enableButtons() {
    $('button').prop('disabled', false);
  }

  function validatePhoneInput() {
    var phoneNumber = $(this).val().trim();
    var phonePattern = /^(09|\+639)\d{9}$/;

    if (!/^\d+$/.test(phoneNumber)) {
      $(this).addClass('is-invalid');
      return;
    }
    if (phonePattern.test(phoneNumber)) {
      $(this).removeClass('is-invalid');
    } else {
      $(this).addClass('is-invalid');
    }
  }
  $('#phone').on('input', validatePhoneInput);

  function showNextForm(currentFormId, nextFormId) {
    $(currentFormId).hide();
    $(nextFormId).show();
  }

  function showPreviousForm(currentFormId, previousFormId) {
    $(currentFormId).hide();
    $(previousFormId).show();
  }

  var today = new Date().toISOString().split('T')[0];
  $('#dob').attr('max', today);

  function validateForm(formId) {
    var isValid = true;

    $(formId + ' input[required]:visible, ' + formId + ' select[required]:visible').each(function () {
      var value = $(this).val().trim();
      $(this).removeClass('is-invalid');

      if (value === '') {
        isValid = false;
        $(this).addClass('is-invalid');
        return;
      }

      if ($(this).attr('id') === 'patient_name') {
        var lettersPattern = /^[A-Z a-z]+$/;
        if (!lettersPattern.test(value)) {
          isValid = false;
          alertify.error('Please enter letters only for full name.');
          $(this).addClass('is-invalid');
        }
      }

      if ($(this).attr('id') === 'phone') {
        var phonePattern = /^(09|\+639)\d{9}$/;
        if (!phonePattern.test(value)) {
          isValid = false;
          alertify.error('Enter 11-digit Philippines phone number.');
          $(this).addClass('is-invalid');
        }
      }

      if ($(this).attr('id') === 'age') {
        var age = parseInt(value);
        if (isNaN(age) || age < 1 || age > 100) {
          isValid = false;
          alertify.error('Please provide a valid age');
          $(this).addClass('is-invalid');
        }
      }

      if ($(this).attr('id') === 'appointment_date') {
        if (value === '') {
          isValid = false;
          alertify.error('Please select prepared date.');
          $(this).addClass('is-invalid');
        }
      }

      if (formId === '#appointmentForm') {
        var selectedService = $('#service').val();
        if (selectedService === 'Dental services offered:') {
          isValid = false;
          alertify.error('Please select a service.');
          $('#service').addClass('is-invalid');
          return false;
        }
      }
    });
    return isValid;
  }

  $('#nextButton').click(function () {
    if (!validateForm('#appointmentForm')) {
      return;
    }
    showNextForm('#appointmentForm', '#personalInfoForm');
  });

  $('#nextButton2').click(function () {
    if (!validateForm('#personalInfoForm')) {
      return;
    }
    showNextForm('#personalInfoForm', '#contactInfoForm');
  });

  $('#prevButton').click(function () {
    showPreviousForm('#personalInfoForm', '#appointmentForm');
  });

  $('#prevButton2').click(function () {
    showPreviousForm('#contactInfoForm', '#personalInfoForm');
  });

  $('#submitButton').click(function () {
    if (!validateForm('#contactInfoForm')) {
      return;
    }

    var email = $('#email').val().trim();
    if (email !== '') {
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        alertify.error('Please enter a valid email.');
        $('#email').addClass('is-invalid');
        return;
      }
    }
    if ($('#address').val().trim() === '') {
      alertify.error('Address is required.');
      $('#address').addClass('is-invalid');
      return;
    }

    var phoneNumber = $('#phone').val().trim();
    if (!/^\d+$/.test(phoneNumber) || phoneNumber.length !== 11) {
      alertify.error('Please enter a valid 11-digit Philippine phone number.');
      return false;
    }

    var formData = $('#appointmentForm, #contactInfoForm, #personalInfoForm').serialize();

    if (
      $('#address').val() === '' ||
      $('#dob').val() === '' ||
      $('#phone').val() === ''
    ) {
      alertify.error('All fields are required.');
      return;
    }

    disableButtons();

    $.ajax({
      type: 'POST',
      url: 'functions/process_sched.php',
      data: formData,
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          alertify.success(response.message);
        } else {
          alertify.error(response.message);
        }
        $('#appointmentForm')[0].reset();
        setTimeout(function () {
          location.reload();
        }, 3000);
      },
      error: function () {
        alertify.error('Error occurred while scheduling appointment.');
      },
      complete: function () {
        setTimeout(function () {
          enableButtons();
          location.reload();
        }, 1000);
      },
    });
  });

  $('#dob, #age, #patient_name, #service, #appointment_date, #email, #address').change(function () {
    $(this).removeClass('is-invalid');
  });
});