<!-- ADD NEWS & BLOGS MODAL -->
<div class="modal fade" id="add_blog_btn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5 text-ce" id="exampleModalLabel">News & Clinic Updates</h1>
      </div>
      <div class="modal-body">
        <form action="code.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="title"><small><b>Title <span style="color: red !important;">*</span></b></small></label>
                <input type="text" name="title" class="form-control" placeholder="Enter Title" spellcheck="true" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label" for="links"><small><b>Link <span style="color: red !important;">*</span></b></small></label>
                <input type="url" name="links" class="form-control" placeholder="Enter link" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="form-label" for="description"><small><b>Description <span style="color: red !important;">*</span></b></small></label>
                <textarea rows="6" type="text" name="description" class="form-control" placeholder="Description" spellcheck="true" required></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-group col-lg-12 mb-2">
              <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
            </div>
          </div>

          <div class="row">
            <p class="text-center "><b><i class="fa-solid fa-circle-exclamation" style="color: red !important;"></i> </b><small>All fields are required.</small></p>
            <div class="col-lg-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-success btn-sm" name="add_blog_btn" title="Submit"><small>Submit <i class="fa-solid fa-paper-plane"></i></small></button>
              <a type="button" class="btn btn-danger btn-sm ms-2" title="Cancel" data-bs-dismiss="modal"><small>Cancel <i class="fa-solid fa-ban"></i></small></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ADD NEWS & BLOGS MODAL -->

<!-- ADD CLINIC EXPENSES MODAL -->
<div class="modal fade" id="clinic_expenses_btn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5 text-center text-white" id="exampleModalLabel">Clinic Expenses</h1>
      </div>
      <div class="modal-body">
        <form action="code.php" method="POST" enctype="multipart/form-data" id="clinic_exp_form">
          <div class="row">
            <div class="col-lg-12">
              <div class="mb-3">
                <label class="form-label">Date & Time <span style="color: red !important;">*</span></label>
                <input type="datetime-local" name="date" class="form-control" placeholder="Date & Time" required max="<?php echo date('Y-m-d\TH:i'); ?>">
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-12 d-flex justify-content-end">
              <button type="button" class="btn btn-primary btn-sm float-end btn-other-expenses" title="Add Input"><small>Add Input <i class="fa-solid fa-circle-plus"></i></small></button>
            </div>
          </div>
          <div class="row mb-3 additional-expense">
            <div class="col-lg-12 d-flex justify-content-end">
              <div class="input-group">
                <input type="file" name="image[]" class="form-control" multiple required>
                <input type="text" step="0.01" aria-label="Name of expenses" name="billName[]" class="form-control" placeholder="Expenses Name" required>
                <input type="number" step="0.02" aria-label="Amount" name="amount[]" class="form-control" placeholder="Amount" required>
              </div>
            </div>
          </div>
          <div class="additional-expenses"></div>
          <div class="row">
            <p class="text-center "><b><i class="fa-solid fa-circle-exclamation" style="color: red !important;"></i> </b><small>All fields are required.</small></p>
            <div class="col-lg-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary btn-sm" name="add_clinic_exp" title="Submit">Submit <i class="fa-solid fa-paper-plane"></i></button>
              <a type="button" class="btn btn-danger btn-sm ms-2" title="Cancel" data-bs-dismiss="modal"><small>Cancel <i class="fa-solid fa-ban"></i></small></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ADD CLINIC EXPENSES MODAL -->

<!-- ADD PATIENT DAILY WAITING LIST MODAL -->
<div class="modal fade" id="add_to_queue_btn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5 text-center text-white" id="exampleModalLabel">Patient Form</h1>
      </div>
      <div class="modal-body">
        <form action="code.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <input type="text" id="patient_name" name="patient_name" class="form-control" placeholder="Enter Full name" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="mb-3">
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone No#" maxlength="11" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
              </div>
            </div>

            <div class="col-lg-6">
              <select for="service" id="service" name="service" class="form-select mb-3" required aria-label="Large select example">
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

            <div class="col-lg-6">
              <div class="mb-3">
                <input type="date" name="dob" class="form-control" required>
              </div>
            </div>

            <div class="col-lg-6">
              <select class="form-select mb-3" id="hmo" name="hmo" aria-label="Default select example" autocomplete="on">
                <option selected>No HMO</option>
                <option value="Maxicare Healthcare Corp.">Maxicare Healthcare Corp.</option>
                <option value="Medicard Philippines, lnc.">Medicard Philippines, lnc.</option>
              </select>
            </div>

            <div class="col-lg-6">
              <div class="mb-3">
                <input type="number" name="age" id="age" placeholder="Age" class="form-control" minlength="3" maxlength="100" required>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="mb-3">
                <textarea rows="5" type="text" id="address" name="address" class="form-control" placeholder="Please enter complete address." required></textarea>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="mb-3">
                <textarea rows="6" id="reason_visit" type="text" name="reason_visit" class="form-control" placeholder="Reason for Visit." spellcheck="true" required></textarea>
              </div>
            </div>

            <div class="d-flex flex-column align-items-start mb-3">
              <label class="form-label"><b><small>Gender <span style="color: red !important;">*</span></small></b></label>
              <div class="d-flex flex-row">
                <div class="form-check mx-3">
                  <input class="form-check-input" type="radio" name="gender" value="Male" id="male" checked>
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                  <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" type="radio" name="gender" value="Prefer not to say" id="prefer-not-to-say">
                  <label class="form-check-label" for="prefer-not-to-say">Prefer not to say</label>
                </div>
              </div>
            </div>

            <div class="d-flex flex-column align-items-start mb-3">
              <label class="form-label" for="urgency_lvl"><b><small>Urgency Level <span style="color: red !important;">*</span></small></b></label>
              <div class="d-flex flex-row">
                <div class="form-check mx-3">
                  <input class="form-check-input" type="radio" name="urgency_lvl" id="non_urgent" value="Non-urgent" checked>
                  <label class="form-check-label" for="non_urgent">Non-urgent</label>
                </div>
                <div class="form-check mx-3 ms-3">
                  <input class="form-check-input" type="radio" name="urgency_lvl" id="urgent" value="Urgent">
                  <label class="form-check-label" for="urgent">Urgent</label>
                </div>
                <div class="form-check mx-3 ms-3">
                  <input class="form-check-input" type="radio" name="urgency_lvl" id="emergency" value="Emergency">
                  <label class="form-check-label" for="emergency">Emergency</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <p class="text-center mt-3"><b><i class="fa-solid fa-circle-exclamation" style="color: red !important;"></i> </b><small>All fields are required.</small></p>
            <div class="col-lg-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-success btn-sm" name="add_patient_waitinglist_btn" title="Sumbit"><small>Submit <i class="fa-solid fa-paper-plane"></i></small></button>
              <a type="button" class="btn btn-danger btn-sm ms-2" title="Cancel" data-bs-dismiss="modal"><small>Cancel <i class="fa-solid fa-ban"></i></small></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ADD PATIENT DAILY WAITING LIST MODAL -->

<!-- ADD TREATMENT RECORD -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="makeTreatmentPlan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5 text-center text-white" id="exampleModalLabel">Treatment Record Form</h1>
      </div>
      <div class="modal-body">
        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
        ?>
          <form action="code.php" method="POST" enctype="multipart/form-data" id="treatmentPlan_form">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <input type="hidden" name="patient_id" value="<?= htmlspecialchars($id) ?>">
                  <label class="form-label" for="date"><small><b>Date & Time </b></small><span style="color: red !important;">*</span></label>
                  <input type="datetime-local" name="date" class="form-control" placeholder="Date & Time" required max="<?php echo date('Y-m-d\TH:i', strtotime('+1 day')); ?>">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-3">
                  <label class="form-label" for="procedure_description"><small><b>Procedure</b></small><span style="color: red !important;">*</span></label>
                  <textarea rows="6" type="text" name="procedure_description" class="form-control" placeholder="Procedure." spellcheck="on" required></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="text-center "><b><i class="fa-solid fa-circle-exclamation" style="color: red !important;"></i> </b><small>All fields are required.</small></p>
              <div class="col-lg-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success btn-sm" name="add_treatmentPlan" title="Submit">Submit <i class="fa-solid fa-paper-plane"></i></button>
                <a type="button" class="btn btn-danger btn-sm ms-2" title="Cancel" data-bs-dismiss="modal"><small>Cancel <i class="fa-solid fa-ban"></i></small></a>
              </div>
            </div>
          </form>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- ADD TREATMENT RECORD -->

<!-- EDIT ADMIN PROFILE-->
<div class="modal fade" id="update_acc">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">My Account</h1>
      </div>
      <div class="modal-body">
        <?php
        $users = updateAcc("tbl_users");
        if (mysqli_num_rows($users) > 0) {
          $users = mysqli_fetch_array($users);
        ?>
          <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <input type="hidden" name="modal_update_acc" value="<?= $users['id'] ?>">
                <div class="mb-3">
                  <label class="form-label"><small><b>Name</b></label></small>
                  <input type="name" name="name" class="form-control" value="<?= $users['name'] ?>" placeholder="Name" required>
                </div>
                <div class="mb-3">
                  <label class="form-label"><small><b>Email</b></label></small>
                  <input type="email" name="email" class="form-control" value="<?= $users['email'] ?>" placeholder="Email" required>
                </div>

                <div class="mb-3">
                  <label class="form-label"><small><b>Phone No#</b></label></small>
                  <input type="tel" name="phone" class="form-control" value="<?= $users['phone'] ?>" placeholder="Phone No." required>
                </div>

                <div class="mb-3">
                  <label class="form-label"><small><b>Birthdate</b></small></label>
                  <input type="date" name="dob" class="form-control" required value="<?= $users['dob'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label"><small><b>New Password</b></label></small>
                  <div class="input-group">
                    <input type="password" name="password" id="password" minlength="8" maxlength="16"
                      pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[#?!]).{8,16}"
                      class="form-control" placeholder="Enter new password (leave blank if unchanged)">
                    <button type="button" class="btn btn-outline-primary" onclick="togglePasswordVisibility()">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                  </div>
                </div>

              </div>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" value="<?= $users['id']; ?>" class="btn btn-success btn-sm" name="update_acc_btn" title="Submit">Submit <i class="fa-solid fa-paper-plane"></i></button>
            </div>
          </form>
        <?php
        } else {
          echo "User Not Found for given ID";
        }
        ?>
      </div>
    </div>
  </div>
</div>
<!-- EDIT ADMIN PROFILE-->

<!-- VIEW FEEDBACKS MODAL -->
<div class="modal fade" id="viewPatientFeedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Feedback</h1>
      </div>
      <div class="modal-body">
        <div id="patientFeedback"></div>
      </div>
    </div>
  </div>
</div>
<!-- VIEW FEEDBACKS MODAL -->

<!-- VIEW PATIENT MODAL -->
<div class="modal fade" id="viewPatientAppointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">Appointment preperences</h1>
      </div>
      <div class="modal-body">
        <div id="patientInfo"></div>
      </div>
    </div>
  </div>
</div>
<!-- VIEW PATIENT MODAL -->

<!-- VIEW CLINIC EXP MODAL -->
<div class="modal fade" id="viewClinicExp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Clinic Expenses</h1>
      </div>
      <div class="modal-body">
        <div id="clinicExpInfo"></div>
      </div>
    </div>
  </div>
</div>
<!-- VIEW CLINIC EXP MODAL -->

<!-- VIEW DENTAL CHART MODAL -->
<div class="modal fade" id="viewDentalChart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Dental Chart</h1>
      </div>
      <div class="modal-body">
        <div id="dentalChartInfo"></div>
      </div>
    </div>
  </div>
</div>
<!-- VIEW DENTAL CHART MODAL -->