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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">MMM: CO.</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">My Account</a>
          </li>
        </ul>
        <button type="button" class="btn btn-primary me-5">
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
              <form action="../addtocartfunction.php?uid=<?= $userid ?>&Model_id=<?= $row[0] ?>" method="post">
                <h5>Quantity</h5>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus"
                          data-field="quant[1]">
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
                <h4 class="price mt-4">Price: <span>$
                    <?= $row[3] ?>.00
                  </span></h4>
                <button class="btn btn-primary">Add to Cart</button>
                <a href="" class="btn btn-primary">Buy Item</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
  }
  ?>
  <footer class="bg-light">
    <p class="p-2 align-middle text-center">Made by Big Boy ❤️❤️</p>
  </footer>

  <script src="../public/UI Behavior/quantity.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>