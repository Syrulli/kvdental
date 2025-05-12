<?php
    $title = "Charting Plan | KV Dental Clinic";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4" id="chart_table_record">
        <ol class="breadcrumb mb-3 mt-4">
            <li class="breadcrumb-item active"><a href="all_appointments.php" class="text-black">Appointments Schedule</a></li>
            <li class="breadcrumb-item"><span><b>Charting Plan</b></span></li>
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
                                        <h5>Make <?= $data['patient_name'] ?>'s Dental Chart</h5>
                                    </div>
                                    <div class="card-body shadow p-3 mb-5 bg-body-tertiary rounded">
                                        <?php
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                ?>
                                                    <form id="toothForm" method="POST">
                                                        <input type="hidden" name="patient_id" value="<?= htmlspecialchars($id) ?>">
                                                        <div class="container-fluid bg-white" id="dental-chart">
                                                            <h6 class="mt-2 pe-3 ps-5"><b>RIGHT</b></h6>
                                                            <div class="row mt-3">
                                                                <h6 class="text-center mb-4 pt-3"><b>UPPER</b></h6>
                                                                <div class="col-12">
                                                                    <table class="table table-borderless table-wrapper-scroll-y my-custom-scrollbar text-center">
                                                                        <tbody>
                                                                            <div title="Upper baby tooth dental chart">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <td colspan="3"></td>
                                                                                        <td>55</td>
                                                                                        <td>54</td>
                                                                                        <td>53</td>
                                                                                        <td>52</td>
                                                                                        <td class="border-right">51</td>
                                                                                        <td class="border-left">61</td>
                                                                                        <td>62</td>
                                                                                        <td>63</td>
                                                                                        <td>64</td>
                                                                                        <td>65</td>
                                                                                        <td colspan="3"></td>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tr>
                                                                                    <td colspan="3"></td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Central Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td class="border-left" title="Central Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>
                                                                                    <td colspan="3"></td>
                                                                                </tr>
                                                                            </div>

                                                                            <div title="Upper adult dental chart">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <td>18</td>
                                                                                        <td>17</td>
                                                                                        <td>16</td>
                                                                                        <td>15</td>
                                                                                        <td>14</td>
                                                                                        <td>13</td>
                                                                                        <td>12</td>
                                                                                        <td class="border-right">11</td>
                                                                                        <td class="border-left">21</td>
                                                                                        <td>22</td>
                                                                                        <td>23</td>
                                                                                        <td>24</td>
                                                                                        <td>25</td>
                                                                                        <td>26</td>
                                                                                        <td>27</td>
                                                                                        <td>28</td>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tr>
                                                                                    <td title="Third Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Central Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td class="border-left" title="Central Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, 1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Third Premolar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>
                                                                                </tr>
                                                                            </div>

                                                                            <div title="Lower adult dental chart">
                                                                                <tr class="horizontal_line">
                                                                                    <td title="Third Molar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="molar" transform="scale(1,-1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="molar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="molar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Premolar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="premolar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Premolar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="premolar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="premolar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="incisor" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Central Incisor">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="incisor" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Central Incisor" class="border-left">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="incisor" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="incisor" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="incisor" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Premolar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="premolar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Premolar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="premolar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="molar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="molar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Third Molar">
                                                                                        <h5 class="d-none pt-3" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none pt-3" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none pt-3" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none pt-3 text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" class="molar" transform="scale(1, -1)">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>
                                                                                </tr>
                                                                                <thead>
                                                                                    <td>48</td>
                                                                                    <td>47</td>
                                                                                    <td>46</td>
                                                                                    <td>45</td>
                                                                                    <td>44</td>
                                                                                    <td>43</td>
                                                                                    <td>42</td>
                                                                                    <td>41</td>
                                                                                    <td class="border-left">31</td>
                                                                                    <td>32</td>
                                                                                    <td>33</td>
                                                                                    <td>34</td>
                                                                                    <td>35</td>
                                                                                    <td>36</td>
                                                                                    <td>37</td>
                                                                                    <td>38</td>
                                                                                </thead>
                                                                            </div>

                                                                            <div title="Lower baby dental chart">
                                                                                <tr>
                                                                                    <td colspan="3"></td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, -1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, -1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,-1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Central Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td class="border-left" title="Central Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Lateral Incisor">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Canine">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1,-1)" class="premolar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20, 10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="First Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, -1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>

                                                                                    <td title="Second Molar">
                                                                                        <h5 class="d-none" title="Removable Denture"><b>Rm</b></h5>
                                                                                        <h5 class="d-none" title="Sealants"><b>S</b></h5>
                                                                                        <h5 class="d-none" title="Fixed Cure Composite"><b>Fx</b></h5>
                                                                                        <h5 class="d-none" title="Inlay"><b>In</b></h5>
                                                                                        <h5 class="d-none" title="Pontic"><b>P</b></h5>
                                                                                        <h5 class="d-none" title="Abutment"><b>AB</b></h5>
                                                                                        <h5 class="d-none" title="Amalgam Filling"><b>A</b></h5>
                                                                                        <h5 class="d-none" title="Jacket Crown"><b>JC</b></h5>
                                                                                        <h5 class="d-none" title="Supernumerary"><b>Sp</b></h5>
                                                                                        <h5 class="d-none" title="Congenitally Missing"><b>Cm</b></h5>
                                                                                        <h5 class="d-none" title="Present Teeth"><b>✓</b></h5>
                                                                                        <h5 class="d-none" title="Extraction due to Other Causes"><b>XO</b></h5>
                                                                                        <h5 class="d-none" title="Impacted Tooth"><b>Im</b></h5>
                                                                                        <h5 class="d-none" title="Missing due to Other Causes"><b>MO</b></h5>
                                                                                        <h5 class="d-none" title="Root Fragment"><b>RF</b></h5>
                                                                                        <h3 class="d-none" title="Caries Indicated for Extraction"><b>l</b></h3>
                                                                                        <h5 class="d-none text-danger" title="Missing Due to Caries"><b>M</b></h5>
                                                                                        <h5 class="d-none text-danger" title="Extraction Due to Caries"><b>X</b></h5>
                                                                                        <svg width="30" height="50" transform="scale(1, -1)" class="molar">
                                                                                            <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
                                                                                            <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
                                                                                            <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
                                                                                            <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
                                                                                        </svg>
                                                                                    </td>
                                                                                    <td colspan="3"></td>
                                                                                </tr>
                                                                                <thead>
                                                                                    <td colspan="3"></td>
                                                                                    <td>85</td>
                                                                                    <td>84</td>
                                                                                    <td>83</td>
                                                                                    <td>82</td>
                                                                                    <td>81</td>
                                                                                    <td class="border-left">71</td>
                                                                                    <td>72</td>
                                                                                    <td>73</td>
                                                                                    <td>74</td>
                                                                                    <td>75</td>
                                                                                    <td colspan="3"></td>
                                                                                </thead>
                                                                            </div>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <h6 class="text-center mt-4 pb-3"><b>LOWER</b></h6>
                                                                <canvas id="drawingCanvas"></canvas>
                                                            </div>
                                                            <h6 class="mt-2 ps-3 pe-5"><b>LEFT</b></h6>
                                                        </div>

                                                        <!-- SELECTIONS -->
                                                        <div class="row mt-2 mb-4">
                                                            <div class="col-4">
                                                                <select class="form-select form-select-sm"  id="conditions">
                                                                    <option selected>Select Conditions</option>
                                                                    <option value="decayed">Decayed (Caries Indicated for Filling)</option>
                                                                    <option value="missing">M - Missing due to Caries</option>
                                                                    <option value="filled">Filled</option>
                                                                    <option value="cie">I - Caries Indicated For Extraction</option>
                                                                    <option value="rf">RF - Root Fragment</option>
                                                                    <option value="mo">M0 - Missing Due to Other Causes</option>
                                                                    <option value="impacted">Im - Impacted Tooth</option>
                                                                </select>                                                            
                                                            </div>
                                                            <div class="col-4">
                                                                <select class="form-select form-select-sm"  id="restorationsProsthethics">
                                                                    <option selected >Restorations & Prosthetics</option>
                                                                    <option value="jc" >JC - Jacket Crown</option>
                                                                    <option value="amalgam_filling" >A - Amalgam Filling</option>
                                                                    <option value="ab" >AB - Abutment</option>
                                                                    <option value="pontic" >P - Pontic</option>
                                                                    <option value="inlay" >In - Inlay</option>
                                                                    <option value="fx" >Fx - Fixed Cure Composite</option>
                                                                    <option value="sealants" >S - Sealants</option>
                                                                    <option value="rm" >Rm - Removable Denture</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-4">
                                                                <select class="form-select form-select-sm"  id="select_surgery">
                                                                    <option selected> Select Surgery</option>
                                                                    <option value="extracted">X - Extraction due to Caries</option>
                                                                    <option value="xo">XO - Extraction due to other Causes</option>
                                                                    <option value="present_teeth">✓ - Present Teeth</option>
                                                                    <option value="cm">Cm - Congenitally Missing</option>
                                                                    <option value="sp">Sp - Supernumerary</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 d-flex justify-content-end">
                                                            <?php
                                                                if (isset($_GET['id'])) {
                                                                    $id = $_GET['id'];
                                                                    $tbl_treatment_record = getTreatmentRecordByPatientID($id);
                                                                    $hasTreatmentRecords = mysqli_num_rows($tbl_treatment_record) > 0;
                                                                }
                                                            ?>
                                                            <a type="button" <?php if (isset($hasTreatmentRecords) && $hasTreatmentRecords) : ?> href="treatment_record.php?id=<?= $data['patient_id']; ?>" <?php else : ?> href="#" data-bs-toggle="modal" data-bs-target="#makeTreatmentPlan" <?php endif; ?> class="btn btn-sm me-2 
                                                                    <?php if (isset($hasTreatmentRecords) && $hasTreatmentRecords) : ?> btn-secondary" title="Treatment Record">Treatment Record <i class="fa-solid fa-file-lines"></i>
                                                            <?php else : ?>
                                                                btn-primary" title="Add Treatment Record">
                                                                Add Treatment Record <i class="fa-solid fa-file-circle-plus"></i>
                                                            <?php endif; ?>
                                                            </a>
                                                            <button type="button" class="btn btn-success btn-sm" name="save_chart" id="save_chart" title="Save Chart">Save Chart <i class="fa-solid fa-download" title="Download Dental Chart"></i></button>
                                                        </div>
                                                    </form>
                                                <?php
                                            }
                                        ?>

                                        <div class="dropdown">
                                            <button id="toggleDrawing" class="btn btn-secondary rounded-circle" title="Draw on chart" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-pencil"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" id="colorBlue"><small><b class="text-primary">Blue</b>: Represents dental treatment.</small></a></li>
                                                <li><a class="dropdown-item" href="#" id="colorRed"><small><b class="text-danger">Red</b>: Indicates dental needs.</small></a></li>
                                            </ul>
                                        </div>
                                        <button id="stopDrawingBtn" type="button" class="btn btn-secondary rounded-circle d-none" title="Stop Drawing"><i class="fa-solid fa-ban" title="Stop"></i></button>
                                        <button id="erase" type="button" class="btn btn-danger rounded-circle d-none" title="Erase"><i class="fa-solid fa-eraser"></i></button>
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
    <div class="container-fluid px-4 mt-3">
        <table style="font-size: small;" class="table table-striped table-wrapper-scroll-y my-custom-scrollbar text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Date chart created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $chart = getChartByPatientId($id);
                        if ($chart && mysqli_num_rows($chart) > 0) {
                            while ($data = mysqli_fetch_assoc($chart)) {
                                ?>
                                    <tr>
                                        <td><small><?= $data['created_at']; ?></small></td>
                                        <td>
                                            <a href="get_dental_chart.php?chart_id=<?= $data['chart_id']; ?>&id=<?= $id; ?>"><i class="fa-solid fa-download" title="Download Dental Chart"></i></a>
                                            <a type="button" value="<?= $data['chart_id']; ?>" class="delete_chart_record ps-2" title="Delete Chart Record"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        } else {
                            ?>
                                <tr>
                                    <td colspan="3">No chart record found.</td>
                                </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php include('inc/footer.php'); ?>
<script>
    $(document).ready(function() {

        let selectedColor = ''; 
        let drawingOccurred = false;
        let isErasing = false;

        $('#colorRed').click(function(event) {
            event.preventDefault();
            selectedColor = 'red';
            $('#toggleDrawing').removeClass('btn-outline-primary');
        });

        $('#colorBlue').click(function(event) {
            event.preventDefault(); 
            selectedColor = 'blue';
            $('#toggleDrawing').removeClass('btn-outline-danger');
        });

        // SELECTION HANDLING 
        $('#conditions').change(function() {
            selectedColor = $(this).val();
            $('#select_surgery').val('Select Surgery');
            $('#restorationsProsthethics').val('Restorations & Prosthetics'); 
            checkPolygonsMarked();
        });

        $('#select_surgery').change(function() {
            selectedColor = $(this).val();
            $('#conditions').val('Select Conditions');
            $('#restorationsProsthethics').val('Restorations & Prosthetics'); 
            checkPolygonsMarked();
        });

        $('#restorationsProsthethics').change(function() {
            selectedColor = $(this).val();
            $('#conditions').val('Select Conditions');
            $('#select_surgery').val('Select Surgery');
            checkPolygonsMarked();
        });

        const svgs = document.querySelectorAll('svg.molar, svg.premolar, svg.incisor');

        svgs.forEach(svg => {
            const polygons = svg.querySelectorAll('.polygon');

            polygons.forEach(polygon => {
                polygon.addEventListener('click', () => {
                    if (selectedColor === 'extracted' 
                        || selectedColor === 'missing' 
                        || selectedColor === 'cie' 
                        || selectedColor === 'rf'
                        || selectedColor === 'mo'
                        || selectedColor === 'impacted'
                        || selectedColor === 'xo'
                        || selectedColor === 'present_teeth'
                        || selectedColor === 'cm'
                        || selectedColor === 'sp'
                        || selectedColor === 'jc'
                        || selectedColor === 'amalgam_filling'
                        || selectedColor === 'ab'
                        || selectedColor === 'pontic'
                        || selectedColor === 'inlay'
                        || selectedColor === 'fx'
                        || selectedColor === 'sealants'
                        || selectedColor === 'rm'
                        
                    ) {
                        toggleStrokeForAll(svg, selectedColor);
                    } else {
                        polygon.classList.toggle(selectedColor);
                    }
                    checkPolygonsMarked();
                });
            });
        });

        function toggleStrokeForAll(svg, color) {
            const polygons = svg.querySelectorAll('.polygon');
            const missingIcon = svg.previousElementSibling.previousElementSibling;
            const extractedIcon = svg.previousElementSibling;
            const cieIcon = svg.previousElementSibling.previousElementSibling.previousElementSibling;
            const rfIcon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const moIcon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const impactedIcon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const xoIcon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const present_teeth_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const cm_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const sp_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const jc_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const amalgam_filling_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const ab_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const pontic_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const inlay_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const fx_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const sealant_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;
            const rm_Icon = svg.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling;

            let shouldRemove = false;

            polygons.forEach(polygon => {
                if (polygon.classList.contains('extracted') 
                    || polygon.classList.contains('missing') 
                    || polygon.classList.contains('cie') 
                    || polygon.classList.contains('rf')
                    || polygon.classList.contains('mo')
                    || polygon.classList.contains('impacted')
                    || polygon.classList.contains('xo')
                    || polygon.classList.contains('present_teeth')
                    || polygon.classList.contains('cm')
                    || polygon.classList.contains('sp')
                    || polygon.classList.contains('jc')
                    || polygon.classList.contains('amalgam_filling')
                    || polygon.classList.contains('ab')
                    || polygon.classList.contains('pontic')
                    || polygon.classList.contains('inlay')
                    || polygon.classList.contains('fx')
                    || polygon.classList.contains('sealants')
                    || polygon.classList.contains('rm')
                ) {
                    shouldRemove = true;
                }
            });

            if (shouldRemove) {
                polygons.forEach(polygon => {
                    polygon.classList.remove(
                        'decayed', 
                        'filled', 
                        'extracted',
                        'missing', 
                        'cie', 
                        'rf',
                        'mo',
                        'impacted',
                        'xo',
                        'present_teeth',
                        'cm',
                        'sp',
                        'jc',
                        'amalgam_filling',
                        'ab',
                        'pontic',
                        'inlay',
                        'fx',
                        'sealants',
                        'rm',
                    );
                });

                svg.classList.remove('d-none');
                missingIcon.classList.add('d-none');
                extractedIcon.classList.add('d-none');
                cieIcon.classList.add('d-none');
                rfIcon.classList.add('d-none');
                moIcon.classList.add('d-none');
                impactedIcon.classList.add('d-none');
                xoIcon.classList.add('d-none');
                present_teeth_Icon.classList.add('d-none');
                cm_Icon.classList.add('d-none');
                sp_Icon.classList.add('d-none');
                jc_Icon.classList.add('d-none');
                amalgam_filling_Icon.classList.add('d-none');
                ab_Icon.classList.add('d-none');
                pontic_Icon.classList.add('d-none');
                inlay_Icon.classList.add('d-none');
                fx_Icon.classList.add('d-none');
                sealant_Icon.classList.add('d-none');
                rm_Icon.classList.add('d-none');
                
            } else {
                polygons.forEach(polygon => {
                    polygon.classList.remove(
                        'decayed', 
                        'filled', 
                        'extracted', 
                        'missing', 
                        'cie', 
                        'rf',
                        'mo',
                        'impacted',
                        'xo',
                        'present_teeth',
                        'cm',
                        'sp',
                        'jc',
                        'amalgam_filling',
                        'ab',
                        'pontic',
                        'inlay',
                        'fx',
                        'sealants',
                        'rm',
                    );
                    polygon.classList.add(color);
                });

                svg.classList.add('d-none'); 

                const iconClasses = {
                    'extracted': extractedIcon,
                    'missing': missingIcon,
                    'cie': cieIcon,
                    'rf': rfIcon,
                    'mo': moIcon,
                    'impacted': impactedIcon,
                    'xo': xoIcon,
                    'present_teeth': present_teeth_Icon,
                    'cm': cm_Icon,
                    'sp': sp_Icon,
                    'jc': jc_Icon,
                    'amalgam_filling': amalgam_filling_Icon,
                    'ab': ab_Icon,
                    'pontic': pontic_Icon,
                    'inlay': inlay_Icon,
                    'fx': fx_Icon,
                    'sealants': sealant_Icon,
                    'rm': rm_Icon,
                };

                for (let key in iconClasses) {
                    if (key === color) {
                        iconClasses[key].classList.remove('d-none');
                    } else {
                        iconClasses[key].classList.add('d-none');
                    }
                }
            }
            checkPolygonsMarked();
        }

        function checkPolygonsMarked() {
            let marked = drawingOccurred;
            svgs.forEach(svg => {
                const polygons = svg.querySelectorAll('.polygon');
                polygons.forEach(polygon => {
                    if (polygon.classList.contains('decayed') 
                        || polygon.classList.contains('filled') 
                        || polygon.classList.contains('extracted') 
                        || polygon.classList.contains('missing') 
                        || polygon.classList.contains('cie') 
                        || polygon.classList.contains('rf')
                        || polygon.classList.contains('mo') 
                        || polygon.classList.contains('impacted') 
                        || polygon.classList.contains('xo') 
                        || polygon.classList.contains('present_teeth') 
                        || polygon.classList.contains('cm') 
                        || polygon.classList.contains('sp') 
                        || polygon.classList.contains('js') 
                        || polygon.classList.contains('amalgam_filling') 
                        || polygon.classList.contains('ab') 
                        || polygon.classList.contains('pontic') 
                        || polygon.classList.contains('inlay') 
                        || polygon.classList.contains('fx') 
                        || polygon.classList.contains('sealants') 
                        || polygon.classList.contains('rm') 
                    ) {
                        marked = true;
                    }
                });
            });
            $("#save_chart").prop('disabled', !marked);
        }

        $("#save_chart").click(function() {
            let $saveButton = $(this);
            $saveButton.prop('disabled', true);
            domtoimage.toPng(document.getElementById('dental-chart'))
                .then(function(dataUrl) {
                    let formData = new FormData();
                    let patient_id = <?= json_encode($id) ?>;
                    formData.append('patient_id', patient_id);
                    formData.append('chart_image', dataUrl.split(',')[1]);

                    $.ajax({
                        url: 'code.php',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            alertify.success('Chart Saved Successfully!');
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            alertify.error('Error saving image');
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        },
                        complete: function() {
                            $saveButton.prop('disabled', false);
                        }
                    });
                })
                .catch(function(error) {
                    alertify.error('Oops, something went wrong!');
                    $saveButton.prop('disabled', false);
                });
        });

        checkPolygonsMarked();

        // Canvas drawing logic
        var canvas = document.getElementById('drawingCanvas');
        var ctx = canvas.getContext('2d');
        var drawing = false;

        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;

        function startDrawing(event) {
            drawing = true;
            drawingOccurred = true; 
            draw(event);
            checkPolygonsMarked();
            $('#erase').removeClass('d-none'); 
            $('#stopDrawingBtn').removeClass('d-none'); 
            $('#toggleDrawing').addClass('d-none'); 
        }

        function draw(event) {
            if (!drawing) return;

            ctx.lineWidth = 5;
            ctx.lineCap = 'round';
            ctx.globalCompositeOperation = isErasing ? 'destination-out' : 'source-over';
            ctx.strokeStyle = selectedColor === 'blue' ? 'blue' : 'red';

            var rect = canvas.getBoundingClientRect();
            var x = event.clientX - rect.left;
            var y = event.clientY - rect.top;

            ctx.lineTo(x, y);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(x, y);
        }

        function stopDrawing() {
            drawing = false;
            ctx.beginPath();
        }

        canvas.addEventListener('mousedown', startDrawing);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDrawing);
        canvas.addEventListener('mouseout', stopDrawing);

        document.getElementById('toggleDrawing').addEventListener('click', function() {
            var isDrawingEnabled = canvas.style.pointerEvents === 'auto';
            canvas.style.pointerEvents = isDrawingEnabled ? 'none' : 'auto';
        });

        document.getElementById('stopDrawingBtn').addEventListener('click', function() {
            var isDrawingEnabled = canvas.style.pointerEvents === 'auto';
            canvas.style.pointerEvents = isDrawingEnabled ? 'none' : 'auto';
            $('#toggleDrawing').css('pointerEvents', isErasing ? 'none' : 'auto').toggleClass('d-none', isErasing);
            $('#stopDrawingBtn').addClass('d-none'); 
        });

        document.getElementById('erase').addEventListener('click', function() {
            isErasing = !isErasing;
            this.classList.toggle('active', isErasing);
            canvas.style.cursor = isErasing ? 'crosshair' : 'default';
            this.innerHTML = isErasing ? '<i class="fa-solid fa-ban" title="Stop Erase"></i>' : '<i class="fa-solid fa-eraser" title="Erase"></i>';
            $('#toggleDrawing').css('pointerEvents', isErasing ? 'none' : 'auto').toggleClass('disabled', isErasing);
            $('#stopDrawingBtn').css('pointerEvents', isErasing ? 'none' : 'auto').toggleClass('disabled', isErasing);

            if (!isErasing) {
                $(this).addClass('d-none');
            }
        });
    });
</script>