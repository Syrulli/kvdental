<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Dashboard</div>
                <a class="nav-link <?= $page == "index.php" ? 'active bg-primary' : ''; ?>" href="../admin/index.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-list"></i></div>
                    <small style="font-size: smaller;">Overview</small>
                </a>

                <a class="nav-link <?= $page == "all_waitinglist.php" ? 'active bg-primary' : ''; ?>" href="all_waitinglist.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list-ol"></i></div>
                    <small style="font-size: smaller;">Daily Waiting List</small>
                </a>

                <a class="nav-link <?= $page == "all_appointments.php" ? 'active bg-primary' : ''; ?>" href="all_appointments.php">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar-check"></i></div>
                    <small style="font-size: smaller;">Appointments Schedule</small>
                </a>

                <a class="nav-link <?= $page == "all_blog.php" ? 'active bg-primary' : ''; ?>" href="all_blog.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-blog"></i></div>
                    <small style="font-size: smaller;">News & Updates</small>
                </a>
                <a class="nav-link <?= $page == "all_feedbacks.php" ? 'active bg-primary' : ''; ?>" href="all_feedbacks.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-comments"></i></div>
                    <small style="font-size: smaller;">Feedbacks</small>
                </a>

                <a class="nav-link <?= $page == "expenses.php" ? 'active bg-primary' : ''; ?>" href="expenses.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-coins"></i></div>
                    <small style="font-size: smaller;">Expenses</small>
                </a>

         
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#update_acc" href="#">
                    <div class="sb-nav-link-icon"> <i class="fa-solid fa-gears"></i></div>
                    <small style="font-size: smaller;">Settings</small>
                </a>

                <a class="nav-link" href="../logout.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                    <small style="font-size: smaller;">Logout</small>
                </a>
            </div>
        </div>
    </nav>
</div>

