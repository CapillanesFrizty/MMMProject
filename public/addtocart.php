<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>
    <title>Hello, world!</title>
</head>

<body>

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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
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


    <table class="table w-75 mx-auto mt-5">
        <thead>
            <tr>
                <th scope="col">Customer Lname</th>
                <th scope="col">Model ID</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require_once('../connector.php');

            $uid = $_GET['uid'];

            $query = "SELECT `model_id`, `cus_id`, `quantity`, `price`,cus.first_name,cus.last_name FROM `cart` JOIN customer as cus on cart.cus_id= cus.cusID";

            $res = mysqli_query($con, $query);
            if ($res) {
                while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
                    if ($row[1] == $uid) {
                        ?>

                        <tr>
                            <td>
                                <?= $row[5] ?>
                            </td>
                            <td>
                                <?= $row[0] ?>
                            </td>
                            <td>
                                <?= $row[2] ?>
                            </td>
                            <td>
                                <?= $row[3] ?>
                            </td>
                        </tr>

                        <?php
                    } else {
                        ?>
                        <tr>
                            <td>
                                <p>No Items</p>
                            </td>
                        </tr>

                        <?php
                        break;
                    }
                }
            }
            ?>


        </tbody>

    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>