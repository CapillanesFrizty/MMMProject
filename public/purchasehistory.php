<?php
$userid = $_GET['uid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <title>Mighty Mite Motors</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Start of new navbar -->
  <header>
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./Pictures/logoMMM.png" alt="mmm" width="55" height="55" />
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="registeredcustomerpage.php?uid=<?= $userid ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registeredcustomerpage.php?uid=<?= $userid ?>">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registeredcustomerpage.php?uid=<?= $userid ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registeredcustomerpage.php?uid=<?= $userid ?>">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="accounts.php?uid=<?= $userid ?>">Account</a>
                </li>
                <li>
                  <a class="dropdown-item" href="purchasehistory.php?uid=<?= $userid ?>">My Purchase</a>
                </li>
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
  </header>
  <!-- End navbar -->

  <section id="tabs" class="project-tab">
    <div class="container mt-5">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
            role="tab" aria-controls="home" aria-selected="true">
            TO SHIP
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
            role="tab" aria-controls="profile" aria-selected="false">
            RECIEVED
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
            role="tab" aria-controls="contact" aria-selected="false">
            FAILED
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <table class="table" cellspacing="0">
            <thead>
              <tr>
                <th>Model Image</th>
                <th>Model Number</th>
                <th>Model Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once('../connector.php');
              $query = "SELECT  productmodel.img, `prodID`,productmodel.modelName,`quantity`, productmodel.SRP,`orderNum` FROM `orders` JOIN productmodel ON orders.prodID = productmodel.modelID WHERE `cusID` = $userid AND `Status` = 'To Ship'";

              $toshipresult = mysqli_query($con, $query);

              if ($toshipresult) {
                while ($row = mysqli_fetch_array($toshipresult, MYSQLI_NUM)) {
                  ?>
                  <tr>
                    <td><img src="../images/<?= $row[0] ?>" width="150" height="150" /></td>
                    <td>
                      <?= $row[1] ?>
                    </td>
                    <td>
                      <?= $row[2] ?>
                    </td>
                    <td>
                      <?= $row[3] ?>
                    </td>
                    <td>
                      <?= $row[4] ?>
                    </td>
                    <td>
                    <a href="../Recieve.php?order-Num=<?= $row[5]?>&uid=<?=$userid?>" role="button" class="btn btn-success">Recieve</a>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <table class="table" cellspacing="0">
            <thead>
              <tr>
                <th>Model Image</th>
                <th>Model Number</th>
                <th>Model Name</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once('../connector.php');
              $query = "SELECT  productmodel.img, `prodID`,productmodel.modelName,`quantity`, productmodel.SRP FROM `orders` JOIN productmodel ON orders.prodID = productmodel.modelID WHERE `cusID` = $userid AND `Status` = 'DONE'";

              $doneresult = mysqli_query($con, $query);

              if ($doneresult) {
                while ($row = mysqli_fetch_array($doneresult, MYSQLI_NUM)) {
                  ?>
                  <tr>
                    <td><img src="../images/<?= $row[0] ?>" width="150" height="150" /></td>
                    <td>
                      <?= $row[1] ?>
                    </td>
                    <td>
                      <?= $row[2] ?>
                    </td>
                    <td>
                      <?= $row[3] ?>
                    </td>
                    <td>
                      <?= $row[4] ?>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <table class="table" cellspacing="0">
            <thead>
              <tr>
                <th>Model Image</th>
                <th>Model Number</th>
                <th>Model Name</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once('../connector.php');
              $query = "SELECT  productmodel.img, `prodID`,productmodel.modelName,`quantity`, productmodel.SRP FROM `orders` JOIN productmodel ON orders.prodID = productmodel.modelID WHERE `cusID` = $userid AND `Status` = 'FAILED'";
              $failedresult = mysqli_query($con, $query);

              if ($failedresult) {
                while ($row = mysqli_fetch_array($failedresult, MYSQLI_NUM)) {
                  ?>
                  <tr>
                    <td><img src="../images/<?= $row[0] ?>" width="150" height="150" /></td>
                    <td>
                      <?= $row[1] ?>
                    </td>
                    <td>
                      <?= $row[2] ?>
                    </td>
                    <td>
                      <?= $row[3] ?>
                    </td>
                    <td>
                      <?= $row[4] ?>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--tab content-->

</body>

</html>