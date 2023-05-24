<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="graph.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <div class="container">
                <a class="navbar-brand" href="#">
                    MMM: SALES REPORT
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex mx-5 align-middle" id="navbarNav">
                <ul class="navbar-nav me-1">
                    <li class="nav-item">
                        <a class="nav-link" href="AdminMainPage.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PlaceOrderManagement.php">Placed Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportsandgraph.php">Reports</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    require_once('../connector.php');
    $query = "SELECT COUNT(orderNum) as QUANTITY_OF_ORDERS,SUM(productmodel.SRP*`quantity`) as REVENUE, SUM(productmodel.SRP * `quantity`)-SUM(productmodel.SRP) AS PROFIT FROM `orders` JOIN productmodel ON orders.prodID=productmodel.modelID where `Status`= 'DONE'";

    $result = mysqli_query($con, $query);

    if ($result) {
        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {


            ?>
            <div class="container">
                <p class="display-4">Sales Report</p>
                <div class="row justify-content-evenly">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="h5">Sales/Revenue</p>
                                <hr>
                                <p class="display-4">
                                    <?= "$" . $row[1] . ".00" ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="h5">Quantity<code>(# of orders)</code></p>
                                <hr>
                                <p class="display-4">
                                    <?= $row[0] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="h5">Profit</p>
                                <hr>
                                <p class="display-4">
                                    <?= "$" . $row[2] . ".00" ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <div class="container my-4">
        <hr>
        <p class="display-4">Graphs/Chart</p>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <p class="h5">Best Seller Product</p>
                        <hr>
                        <canvas class="my-5 w-100 chartjs-render-monitor" id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-1 bg-light">
        <p class=" pt-1 text-center">Made by Big Boy ❤️❤️</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>

</body>

</html>