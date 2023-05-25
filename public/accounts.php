<?php
$userid = $_GET['uid'];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Mighty Mite Motors</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

</head>

<body>

  <!-- Start of new navbar -->
  <nav class="navbar navbar-expand-lg bg-warning ">
    <div class="container-fluid">

      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./Pictures/logoMMM.png" alt="mmm" width="50" height="50">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="registeredcustomerpage.php?uid=<?= $userid ?> #homepg">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registeredcustomerpage.php?uid=<?= $userid ?>#prod">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registeredcustomerpage.php?uid=<?= $userid ?> #aboutpg">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registeredcustomerpage.php?uid=<?= $userid ?> #contactpg">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="./accounts.php?uid=<?= $userid ?>">Profile</a></li>
              <li><a class="dropdown-item" href="./purchasehistory.php?uid=<?= $userid ?>">Transaction history</a></li>
              <li><a class="dropdown-item" href="./customerHomepage.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <button type="button" class="btn btn-outline-secondary position-relative ms-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
            viewBox="0 0 16 16">
            <path
              d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
          </svg>
          <span
            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
          </span>
        </button>
      </div>
    </div>
  </nav>

  <!--end of nav-->

  <!--start of acc content-->
  <div class="row mt-5 w-100 justify-content-center">
    <div class="col-lg-3">
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="./Pictures/user.png" alt="avatar"
            class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3">My Profile</h5>

          <div class="d-flex justify-content-center mb-2"></div>

        </div>
      </div>

    </div>
    <?php
    require_once('../connector.php');

    $query = "SELECT * FROM `customer` WHERE `cusID` = $userid";

    $res = mysqli_query($con, $query);

    if ($res) {
      while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {

        ?>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= $row[1]." ".$row[2]?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= $row[5]?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Username</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= $row[3]?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= $row[6]?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= $row[7]?></p>
                </div>
              </div>
              <button type="button" class="btn btn-primary ms-1 mt-4 ">Save</button>

            </div>
          </div>

          <?php
      }
    }
    ?>
<!-- Footer -->


    </div>
  </div>
</body>

</html>