<?php
$userid = $_GET['uid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning ">
    <div class="container-fluid">

      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./Pictures/logoMMM.png" alt="mmm" width="50" height="50">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
        <button type="button" class="btn btn-primary me-4">
          Cart <span class="badge bg-secondary">4</span>
        </button>
      </div>
    </div>
  </nav>

  <?php
  $mid = $_GET['Model_id'];
  require_once('../connector.php');
  $query = "SELECT * FROM `productmodel` where `modelID` = $mid";
  $res = mysqli_query($con, $query);
  if ($res) {
    while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
  ?>
      <div class="container p-5 my-5" style="margin-left:14%;">
        <div class="container-fliud">
          <div class="wrapper row">
            <div class="preview col-md-6">
              <div class="preview-pic tab-content mx-5">
                <img src="../images/<?= $row[4] ?>" alt="">
              </div>
            </div>
            <div class="details col-md-6">
              <h3 class="product-title">
                <?= $row[1] ?>
              </h3>
              <p class="product-description">
                <?= $row[2] ?>
              </p>
              <form action="../addtocartfunction.php?uid=<?= $userid ?>&Model_id=<?= $row[0] ?>" method="POST">
                <h5>Quantity</h5>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                          <i class="fi fi-rr-angle-left"></i>
                        </button>
                      </span>
                      <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                          <i class="fi fi-rr-angle-right"></i>
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <h4 class="price mt-4">Price(USD):
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?= $row[3] ?> name="price">
                </h4>
                <button type="submit" class="btn btn-primary" name="add-to-cart">Add to Cart</button>
                <button class="btn btn-primary" name="buy-item">Buy Item</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  <?php
    }
  }
  ?>
  <!-- Footer -->
  <footer Style="background-color: #474e5d; color:white; " class="footer">
    <p class="lead text-center p-1 fs-7 mb-0">Mighty Mite Motors &copy; 2023</p>
  </footer>


  <script src="../public/UI Behavior/quantity.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>