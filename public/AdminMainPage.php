<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mighty Mite Motors Product Page</title>

  <!-- JQUERY CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- javascript for adding a model and Products -->
  <script src="../insertModel.js"></script>

  <!-- CSS FILES -->
  <link rel="stylesheet" href="./CSS/ProductAdd.css" />
  <link rel="stylesheet" href="./CSS/rootDeclaration.css" />

  <!-- CDN for bootstrap stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <!--navigation bar required all pages--->
  <header>
    <div class="wrapper">
      <div class="logo">
        <a href="#"><img src="./Pictures/logoMMM.png" alt="MightyMiteMotors.com" /></a>
      </div>
      <div class="navbar">
        <div class="close-nav"><button>×</button></div>
        <nav>
          <ul>
            <li><a href="AdminMainPage.php">Products</a></li>
            <li><a href="PlaceOrderManagement.php">Placed Orders</a></li>
            <li><a href="reportsandgraph.php">Reports</a></li>
          </ul>
        </nav>
      </div>
      <div class="menu-bar">
        <button><i></i></button>
      </div>
    </div>
    <div class="menu-bar">
      <button><i></i></button>
    </div>
    </div>
  </header>

  <div class="container">
    <!-- Content -->
    <h1>MMM: List of Products</h1>
  </div>
  <!--End of navbar-->

  <!--search -->
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search an item.." />
  <a class="btn btn-primary" href="./addModelForm.html" role="button">Add</a>

  <!--table (changes needed when connected to database)-->
  <table id="myTable">
    <tr class="header">
      <th style="width: 25%">Model Image</th>
      <th style="width: 20%">Model Number</th>
      <th style="width: 20%">Model Name</th>
      <th style="width: 20%">Description</th>
      <th style="width: 40%">Price</th>
    </tr>

    <tbody>
      <?php
      require_once('../connector.php');
      $query = "SELECT * FROM `productmodel`";
      $result = mysqli_query($con, $query);
      if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) { ?>

          <tr>
            <!-- MODEL PICTURE -->
            <td> <img src="../images/<?= $row[4] ?>" width="150" height="150" />
            </td>

            <!-- MODEL ID -->
            <td>
              <?php echo "#000" . $row[0] ?>
            </td>

            <!-- MODEL NAME -->
            <td>
              <?php echo $row[1] ?>
            </td>

            <!-- MODEL DESCRIPTION -->
            <td>
              <?php echo $row[2] ?>
            </td>

            <!-- MODEL PRICE -->
            <td>
              <?php echo "$" . $row[3] . ".00" ?>
            </td>

            <!-- UPLETE BUTTONS -->
            <td> <a href="../Delete.php?model_num=<?= $row[0] ?>" role="button" class="btn btn-danger">Delete</a> </td>
            <td> <a id="btnupdate" href="../Updateit.php?model-Num=<?= $row[0] ?>" role="button"
                class="btn btn-secondary">Update</a> </td>
          </tr>

        <?php }
      } ?>

    </tbody>
  </table>

  <script>
    const theBody = document.querySelector("body");
    const openNav = document.querySelector(".menu-bar button");
    const closeNav = document.querySelector(".close-nav button");
    const Navbar = document.querySelector(".navbar");

    // function bodyScroll(){
    //     if(Navbar.classList.contains('show')){
    //         theBody.classList.add('hide-scroll');
    //     }
    //     else if(theBody.classList.contains('hide-scroll')){
    //         theBody.classList.remove('hide-scroll');
    //     }
    // }

    function showHide() {
      Navbar.classList.toggle("show");
      // bodyScroll();
    }

    openNav.onclick = showHide;
    closeNav.onclick = showHide;
  </script>

  <!-- cdn for bootstrap script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>

</html>