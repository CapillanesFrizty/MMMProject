<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mighty Mite Motors Product Page</title>

  <!-- Icons -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- JQUERY CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
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
        <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark" aria-current="page" href="registeredcustomerpage.php?uid=<?= $userid ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="registeredcustomerpage.php?uid=<?= $userid ?>">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="registeredcustomerpage.php?uid=<?= $userid ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="registeredcustomerpage.php?uid=<?= $userid ?>">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="./loginpage.html">Log in</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./registerpage.html">Signup</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Start of homepage content -->
  <div class="container" id="hompg">
    <div class="image">
      <img src="./Pictures/homepage.png">
    </div>
    <div class="text">
      <h1>Find the best ride-on toy cars for your Kids!</h1>
      <h5>Providing you an authentic driving experience</h5>
      <button class="button4" onclick="window.location.href='registerpage.html'">Sign Up Now</button>
    </div>
  </div>

  <!-- Products Section -->
  <hr>
  <div class="container">
    <p class="display-4">Products</p>
    <div class="d-flex flex-row bd-highlight mb-3 justify-content-evenly">
      <?php
      require_once('../connector.php');
      $query = "SELECT * FROM `productmodel`";
      $res = mysqli_query($con, $query);
      if ($res) {
        while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
          ?>
          <div class="card" style="width: 18rem;">
            <img src="../images/<?= $row[4] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $row[1] ?></h5>
              <p class="card-text"><?= $row[2] ?></p>
              <a href="./productspecs.php?uid=<?php echo $userid ?>&Model_id=<?= $row[0] ?>" class="btn btn-primary">View
                Item</a>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
  <!-- End Products Section -->

  <!-- Popup Login / Modal -->
  <div id="myPopup" class="popup">
    <div class="popup-content">
      <h1>Login Now</h1>
      <p>To see more amazing ride-on toy cars</p>
      <a class="btn btn-primary">Login</a>
    </div>
  </div>
  <!-- End of Popup Login -->

  <!-- Footer -->
  <footer class="footer-distributed" id="contact">
    <div class="footer-left">
      <p class="footer-links">
        <a class="link-1" href="#hompg">Home</a>
        <a href="#myButton">Products</a>
        <a href="#contact">About</a>
        <a href="#">Faq</a>
        <a href="#">Support</a>
        <a href="#contact">Contact</a>
      </p>
      <p>Might Mite Motors &copy; 2023</p>
    </div>
  </footer>

  <!-- Bootstrap CDN #2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Popup Script -->
  <script>
    myButton.addEventListener("click", function () {
      myPopup.classList.add("show");
    });
    closePopup.addEventListener("click", function () {
      myPopup.classList.remove("show");
    });
    window.addEventListener("click", function (event) {
      if (event.target == myPopup) {
        myPopup.classList.remove("show");
      }
    });
  </script>
</body>

</html>
