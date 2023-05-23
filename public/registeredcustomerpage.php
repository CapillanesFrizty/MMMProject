<?php
$userid = $_GET['uid'];
?>
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

  <!-- bootsrap CDN #1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>


<body>
  <!--navigation bar required all pages--->
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <div class="container">
        <a href="#"><img src="./Pictures/logoMMM.png" alt="MightyMiteMotors.com" style="width: 8%"></a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex mx-5 align-middle" id="navbarNav">
        <ul class="navbar-nav me-5">
          <li class="nav-item">
            <a class="nav-link" href="./registeredcustomerpage.php?uid=<?php echo $userid ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"
              href="./registeredcustomerpage.php?uid=<?php echo $userid ?>">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./registeredcustomerpage.php?uid=<?=$userid?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./registeredcustomerpage.php#prodcat"></a>
          </li>

          <button type="button" class="btn btn-outline-secondary position-relative ms-3">
            <a href="./addtocart.php?uid=<?php echo $userid ?>">
              <img src="./Pictures/shopping-cart.png" alt="cart" style="width: 15px">

              <span
                class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                <span class="visually-hidden">New alerts</span>
              </span>
            </a>
          </button>
        </ul>
      </div>
    </div>
  </nav>

  <!--End of navbar-->


  <!--Search bar-->
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search an item..">
  <button type="search">Search</button>
  <!--End of Search bar-->

  <!--Category List-->
  <!-- <div class="cat">
    <h3>Choose a Category</h3>

    <ul>
      <a><i class="fa-solid fa-truck-pickup"></i>Karts</a>
      <a><i class="fa-duotone fa-car"></i>Cars</a>
      <a><i class="fa-duotone fa-car-side"></i>Manual Ride-on</a>
      <a><i class="fa-duotone fa-moped"></i>Motor bikes</a>

    </ul>
  </div> -->
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
        <div class="card" style="width: 10rem;">
          <img src="../images/<?= $row[4] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?= $row[1] ?>
            </h5>
            <p class="card-text">
              <?= $row[2] ?>
            </p>
            <a href="../addtocartfunction.php?uid=<?php echo $userid ?>&Model_id=<?= $row[0] ?>" class="btn btn-primary">Add
              to Cart</a>
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


  <!-- bootstrap CDN #2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>