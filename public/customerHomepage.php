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
      <div class="navbar">
        <div class="close-nav"><button></button></div>
        <nav>
          <ul>
            <li><a href="#hompg">Home</a></li>
            <li><a href="#hompg">About</a></li>
            <li><a href="#prodcat">Product</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
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
        <div class="card" style="width: 18rem;">
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