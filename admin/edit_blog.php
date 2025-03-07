<?php
$title = "Edit News & Clinic Updates";
include('../middleware/admin_middleware.php');
include('inc/header.php');
?>

<div class="container-fluid px-4">
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active"><a href="all_blog.php" class="text-black">News & Clinic Updates</a></li>
        <li class="breadcrumb-item"><span><b>Edit News & Clinic Updates</b></span></li>
    </ol>
    <div class="row mt-3">
        <div class="col-lg-12">
            <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $tbl_blog = getAllBlogId("tbl_blog", $id);

                    if (mysqli_num_rows($tbl_blog) > 0) {
                        $data = mysqli_fetch_array($tbl_blog);
                        ?>
                            <div class="card">
                                <div class="card-header text-white d-flex justify-content-center" style="background-color: var(--first-color); border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                    <h1 class="modal-title fs-5 text-ce" id="exampleModalLabel">Edit News & Clinic Updates</h1>
                                </div>
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="hidden" name="tbl_blog_id" value="<?= $data['id'] ?>">
                                                    <label class="form-label mt-2"><b><small>Title <span style="color: red !important;">*</span></small></b></label>
                                                    <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control" placeholder="News & Clinic Update Title" required>

                                                    <label class="form-label mt-2"><b><small>Links <span style="color: red !important;">*</span></small></b></label>
                                                    <input required type="text" name="links" value="<?= $data['links'] ?>" class="form-control" placeholder="Enter News & Clinic Update links" required>

                                                    <input type="file" name="image" class="form-control mt-4" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                                    <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label"><b><small>Description <span style="color: red !important;">*</span></small></b></label>
                                                    <textarea rows="7" type="text" name="description" class="form-control" placeholder="Description" required><?= $data['description'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-center "><b><i class="fa-solid fa-circle-exclamation" style="color: red !important;"></i> </b><small>All fields are required.</small></p>

                                        <div class="col-lg-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary btn-sm" name="update_blog_btn" title="Submit">Submit <i class="fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    } else {
                        redirect("all_blog.php", "News & Blog Not Found");
                    }
                } else {
                    redirect("all_blog.php", "ID Missing from URL");
                }
            ?>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); ?>