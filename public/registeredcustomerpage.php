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

  <!-- bootsrap CDN #1 -->
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
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark" aria-current="page" href="#homepg">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#prod">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#aboutpg">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#contactpg">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"
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
          <a role="buttton" class="btn btn-outline-dark position-relative ms-3" href="./addtocart.php?uid=<?=$userid?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
              viewBox="0 0 16 16">text-dark
              <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <span
              class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden">New alerts</span>
            </span>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <!--Search bar-->
  <div id="homepg" class="input-group mb-3 mt-5 container">
    <input type="text" class="form-control" placeholder="Search Item..." aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
  </div>
  <!--End of Search bar-->

  <!-- Products Section -->

  <div class="container">

    <p id="prod"class="display-4">Products</p>
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
              <h5 class="card-title">
                <?= $row[1] ?>
              </h5>
              <p class="card-text">
                <?= $row[2] ?>
              </p>
              <a href="./productspecs.php?uid=<?php echo $userid ?> &Model_id=<?= $row[0] ?>" class="btn btn-primary">View
                Item</a>
            </div>
          </div>

          <?php
        }
      }
      ?>

    </div>
  </div>
  <!--about us-->
<hr>
<div style= "padding: 50px;
  text-align: center;
  "class="about-section" >
  <h1 id="aboutpg">About Us</h1>
  <p>Providing you an authentic driving experience</p>
  <p>Find the best ride-on toy cars for your Kids!  Wide variety of ride-on cars, scooters, trikes, balance bikes, and even electric vehicles.</p>
</div>

  <!--contact-->
  <!--Section: Contact v.2-->
  <hr>
<section class="mb-4">

<!--Section heading-->
<h2 id="contactpg"class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions or problem reports? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="mx-auto col-10 col-md-8 col-lg-6">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control">
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

   
</div>

</section>
<!--Section: Contact v.2-->
 
  <!-- Footer -->
  <footer  Style="background-color: #474e5d; color:white; "class="footer">
    <p class="lead text-center p-1 fs-7">Mighty Mite Motors &copy; 2023</p>
  </footer>

  <!-- bootstrap CDN #2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>