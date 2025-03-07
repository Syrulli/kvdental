<nav class="navbar navbar-expand-lg fixed-top" id="header">
  <div class="container">
    <a href="index.php" class="navbar-brand text-white">
      <svg width="35px" height="35px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
          <g fill="none" fill-rule="evenodd">
            <polygon fill="#7a90ff" points="17.561 10.341 13.629 11.493 14.78 7.561 13.629 3.629 17.561 4.78 21.493 3.629 20.341 7.561 21.493 11.493" transform="rotate(-45 17.56 7.56)"></polygon>
            <polygon fill="#7a90ff" points="17.78 55.67 15.107 56.453 15.89 53.78 15.107 51.107 17.78 51.89 20.453 51.107 19.67 53.78 20.453 56.453" transform="rotate(-45 17.78 53.78)"></polygon>
            <path fill="#c7c7c7" d="M26.0714286,14 C21.8109462,14 19,18.8928881 19,24.9285714 C19,30.9642548 21.8109462,50 26.0714286,50 C28.5568423,50 28.8391605,34.1920244 32.1785714,34.177711 C36.1608395,34.1920244 35.8003005,50 38.2857143,50 C42.5461966,50 45.3571429,30.9642548 45.3571429,24.9285714 C45.3571429,18.8928881 42.5461966,14 38.2857143,14 C36.25,14 34.2142857,15.9285714 32.1785714,15.9285714 C30.1428571,15.9285714 28.1071429,14 26.0714286,14 Z"></path>
            <polygon fill="#7a90ff" points="36.78 23.67 34.107 24.453 34.89 21.78 34.107 19.107 36.78 19.89 39.453 19.107 38.67 21.78 39.453 24.453" transform="rotate(-45 36.78 21.78)"></polygon>
            <path stroke="#7a90ff" stroke-linecap="round" stroke-width="2" d="M17.4701388,29.01117 C9.93126448,29.8980783 4.92849706,31.4581568 4.92849706,33.2346166 C4.92849706,35.9960404 17.0168088,38.2346166 31.9284971,38.2346166 C46.8401853,38.2346166 58.9284971,35.9960404 58.9284971,33.2346166 C58.9284971,31.8411183 55.8501866,30.5807641 50.8841565,29.6740337" transform="rotate(-30 31.928 33.623)"></path>
            <path stroke="#0011ff" stroke-linecap="round" stroke-width="2" d="M13.3558551,29.1929448 C8.13881926,30.1045985 4.8826859,31.3969451 4.8826859,32.830127 C4.8826859,35.5915508 16.9709977,37.830127 31.8826859,37.830127 L31.8826859,37.830127 C46.7943741,37.830127 58.8826859,35.5915508 58.8826859,32.830127 C58.8826859,31.0833094 54.0454791,29.5457122 46.7162979,28.6516378" transform="rotate(30 31.883 33.24)"></path>
          </g>
        </g>
      </svg>
      JC Dental Clinic
    </a>
    <button class="navbar-toggler custom-toggler" style="border: none !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color:#fff !important;">
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item text-white">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="faq.php">FAQs</a>
        </li>

        <?php
          if (isset($_SESSION['auth'])) {
            ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= $_SESSION['auth_user']['name']; ?>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-black" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                  <button type="button" class="btn btn-warning btn-sm ms-4 mt-2" id="closed_clinic"><small>Close Clinic</small></button>
                </ul>
              </li>
            <?php
          } else {
          ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li> -->
          <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>