<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mighty Mite Motors Product Page</title>

  <!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- JQUERY CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- CSS FILES -->
  <link rel="stylesheet" href="./CSS/registeredcustomer.css">
  <link rel="stylesheet" href="./CSS/rootDeclaration.css">
</head>

<body>
  <!--navigation bar required all pages--->
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
            <li><a href="#contact">Account</a></li>
          </ul>
        </nav>
      </div>
      <div class="menu-bar">
        <button class="button4" onclick="window.location.href='registerpage.html'">Sign Up Now</button>
      </div>
    </div>
  </header>
  <!--End of navbar-->


  <!--Search bar-->
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search an item..">
  <button type="search">Search</button>
  <!--End of Search bar-->

  <!--End of Search bar-->

  <!--Category List-->

  <div class="cat">
    <h3>Choose a Category</h3>

    <ul>
      <a><i class="fa-solid fa-truck-pickup"></i>Karts</a>
      <a><i class="fa-duotone fa-car"></i>Cars</a>
      <a><i class="fa-duotone fa-car-side"></i>Manual Ride-on</a>
      <a><i class="fa-duotone fa-moped"></i>Motor bikes</a>

    </ul>
  </div>
  <!--End of Category list-->


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
  <!--footer-->


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

      <p>Mighty Mite Motors &copy; 2023</p>
    </div>

  </footer>

</body>

</html>