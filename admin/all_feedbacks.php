<?php
    $title = "Feedbacks - KV Dental ";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');
?>
<section>
    <div class="container-fluid px-4 mt-4" id="feedback_table">
        <div class="row">
            <h3 class="float-start">Feedbacks</h3>
            <hr>
        </div>
        <div class="row float-end mb-3">
            <form class="d-flex" role="search">
                <input id="searchInput" class="form-control me-2" type="search" placeholder="Search Name..." aria-label="Search">
            </form>
        </div>
        <table style="font-size: small;" class="table table-striped table-wrapper-scroll-y my-custom-scrollbar text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="searchPatientName">
                <?php
                $feedback = getAllFeedback("tbl_feedback");
                if (mysqli_num_rows($feedback) > 0) {
                    foreach ($feedback as $data) {
                ?>
                    <tr>
                        <td><small><?= $data['name']; ?></small></td>
                        <td><small><?= $data['message']; ?></small></td>
                        <td>
                            <a title="View patient Feeback " href="#" class="view-feedback" data-id="<?= $data['id']; ?>" data-bs-toggle="modal" data-bs-target="#viewPatientFeedback"><i class="fa-regular fa-eye"></i></a>
                            <a type="button" value="<?= $data['id']; ?>" class="delete_feedback_btn" title="Delete feedback"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                        </td>
                <?php
                    }
                } else {
                    ?>
                        <td colspan="10">No patient Feedback</td>
                     </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>
<?php include('inc/footer.php'); ?>