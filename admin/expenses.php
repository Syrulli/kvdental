<?php
    $title = "Clinic Expenses - KV Dental ";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
    include('modal.php');

    function getTotalExpensesByYear($year){
        global $con;
        $total_expenses = array_fill(0, 12, 0);
        for ($month = 1; $month <= 12; $month++) {
            $sql = "SELECT SUM(amount) AS total_amount 
                            FROM tbl_expenses 
                            WHERE YEAR(date) = $year AND MONTH(date) = $month";
            $result = mysqli_query($con, $sql);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $total_amount = $row['total_amount'];
                $total_expenses[$month - 1] = $total_amount ? $total_amount : 0;
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
        return $total_expenses;
    }
    $selected_year = isset($_GET['year']) ? $_GET['year'] : date('Y');
    $total_expenses = getTotalExpensesByYear($selected_year);
?>
<section>
    <div class="container-fluid px-4 mt-4 mb-5">
        <div class="row">
            <h4 class="float-start">Clinic <span>Expenses</span></h4>
            <hr>
        </div>
        <div class="row float-end mb-3">
            <div class="col-12">
                <div class="dropdown-center">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="yearDropdownButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Select Year
                    </button>
                    <ul class="dropdown-menu" id="yearDropdown" style="font-size: small;">
                        <?php
                            $current_year = date('Y');
                            for ($year = $current_year; $year >= 2024; $year--) {
                                $selected = $year == $selected_year ? 'selected' : '';
                                echo '<li><a class="dropdown-item" href="?year=' . $year . '" ' . $selected . '>' . $year . '</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <canvas id="expensesChart" width="800" height="300"></canvas>
    </div>
</section>
<section>
    <div class="container-fluid px-4 mt-4" id="delete_clinic_exp">
        <div class="row float-end mb-3">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#clinic_expenses_btn">
                Expenses <i class="fa-solid fa-coins"></i>
            </button>
        </div>
        <table style="font-size: small;" class="table table-striped table-wrapper-scroll-y my-custom-scrollbar text-center shadow p-3 mb-5 bg-body-tertiary rounded">
            <thead>
                <tr>
                    <th>Date & Time</th>
                    <th>Name of Exp</th>
                    <th>Amount</th>
                    <th>Receipt</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $clinic_expenses = getClinicExpenses();
                    if (mysqli_num_rows($clinic_expenses) > 0) {
                        foreach ($clinic_expenses as $data) {
                        ?>
                            <tr>
                                <td><small><?= $data['date']; ?></small></td>
                                <td><small><?= $data['billName']; ?></small></td>
                                <td><small><?= $data['amount']; ?></small></td>
                                <td>
                                    <img style="width: 30px; height: 30px; border-radius: 30%;" src="../uploaded/<?= $data['image']; ?>">
                                </td>
                                <td>
                                    <a title="View Clinic Expenses" class="view-clinic-exp pe-2" data-id="<?= $data['bill_id']; ?>" data-bs-toggle="modal" data-bs-target="#viewClinicExp"><i class="fa-regular fa-eye"></i></a>
                                    <a type="button" value="<?= $data['bill_id']; ?>" class="delete_clinic_exp_btn" title="Delete Clinic Expenses"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                            <tr>
                                <td colspan="6">No Clinic Expenses found.</td>
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
    var ctx = document.getElementById('expensesChart').getContext('2d');

    var allData = <?php echo json_encode($total_expenses); ?>;
    var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    var nonZeroIndices = allData.map((value, index) => value > 0 ? index : null).filter(value => value !== null);
    var nonZeroData = nonZeroIndices.map(index => allData[index]);
    var nonZeroLabels = nonZeroIndices.map(index => labels[index]);

    var datasets = [{
        label: 'Monthly Clinic Expenses',
        data: nonZeroData,
        fill: false,
        borderColor: 'rgb(13, 65, 143)',
        showLine: true,
        pointRadius: 3,
    }];

    var expensesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: nonZeroLabels,
            datasets: datasets,
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    $(document).ready(function() {
        $(".btn-other-expenses").click(function() {
            var newInputGroup =
                `
                    <div class="row mb-3 additional-expense">
                        <div class="col-lg-12 d-flex justify-content-end">
                            <div class="input-group">
                                <input type="file" name="image[]" class="form-control" multiple required>
                                <input type="text" step="0.01" aria-label="Name of expenses" name="billName[]" class="form-control" placeholder="Expenses Name" required>
                                <input type="number" step="0.02" aria-label="Amount" name="amount[]" class="form-control" placeholder="Amount" required>
                            </div>
                            <a type="button" class="delete_input_btn btn-remove-expense mt-2 ps-2" title="Delete Input"><i class="fa-solid fa-trash" style="color: red;"></i></a>
                        </div>
                    </div>
                `;
            $(".additional-expenses").append(newInputGroup);
        });

        $(document).on("click", ".btn-remove-expense", function() {
            $(this).closest(".additional-expense").remove();
        });
    });
</script>