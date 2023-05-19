<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mighty Mite Motors Product Page</title>

  <!--icons-->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- JQUERY CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- CSS FILES -->
  <link rel="stylesheet" href="./CSS/customerHomepage.css">
  <link rel="stylesheet" href="./CSS/rootDeclaration.css">

  <!-- bootsrap CDN #1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <!--navigation bar required all pages--->
  <header>
    <div class="wrapper">
      <div class="logo">
        <a href="#"><img src="./Pictures/logoMMM.png" alt="MightyMiteMotors.com"></a>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
          <div class="container">
            <a class="navbar-brand" href="#">
              bootstrap
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="d-flex mx-5 align-middle" id="navbarNav">
            <ul class="navbar-nav me-5">
              <li class="nav-item">
                <a class="nav-link" href="./customerHomepage.php#hompg?">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./customerHomepage.php#prodcat">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./customerHomepage.php#contact">Contact</a>
              </li>

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
            </ul>
          </div>
        </div>
      </nav>

      <div class="menu-bar">
        <button class="button4" onclick="window.location.href='registerpage.html'">Sign Up Now</button>
      </div>
    </div>
  </header>

  <!--End of navbar-->

  <!--Start of homapage content-->
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
  <h2 class="productcategory" id="prodcat">Product Category</h2>
  <div class="Items">
    <?php
    require_once('../connector.php');
    $query = "SELECT * FROM `productmodel`";
    $res = mysqli_query($con, $query);
    if ($res) {
      while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
        ?>
        <div class="card" style="width: 10rem">
          <img src="../images/<?= $row[4] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?= $row[1] ?>
            </h5>
            <p class="card-text">
              <?= $row[2] ?>
            </p>
            <a href="../addtocartfunction.php?user_id=1&Model_id=<?= $row[0] ?>" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>

        <?php
      }
    }
    ?>

  </div>
  <!-- End Products Section -->

  <!--pop up Login / modal-->
  <div id="myPopup" class="popup">
    <div class="popup-content">
      <h1>
        Login Now
      </h1>
      <p>To see more amazing ride-on toy cars</p>

      <button id="closePopup" onclick="window.location.href='loginpage.html'">
        Login
      </button>
    </div>
  </div>



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
  <script>
    myButton1.addEventListener("click", function () {
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
  <script>
    myButton2.addEventListener("click", function () {
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
  <script>
    myButton3.addEventListener("click", function () {
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

  <!--end of pop up Login-->

  <!--footer-->
  </div>

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


  <!-- bootstrap CDN #2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>