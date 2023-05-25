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
 <!-- Bootstrap CDN #2 -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
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
  <div class="container " id="hompg">
    <div  class="image ">
    
    </div>
    <div class="text">
      <h1>Find the best ride-on toy cars for your Kids!</h1>
      <h5>Providing you an authentic driving experience</h5>
      <button class="btn btn-primary" onclick="window.location.href='./registerpage.html'">Signup Now</button>
    </div>
  </div>

  <!-- Products Section -->
  <hr>
  <div class="container">
    <p class="display-4" id="prod">Products</p>
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

</body>

</html>
