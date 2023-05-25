<?php $userid = $_GET['uid'];?>
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
    <link rel="stylesheet" href="./CSS/orderreciept.css">
    <link rel="stylesheet" href="./CSS/rootDeclaration.css">

    <!-- bootsrap CDN #1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <!--start of receipt-->
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <form action="../confirmpurchase.php?uid=<?=$userid?>" method="post">
                                            <div class="custom-actions-btns mb-5">
                                                <button type="submit" class="btn btn-primary">
                                                    Done
                                                </button>
                                            </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="registeredcustomerpage.php" class="invoice-logo">
                                            Mighty Mite Motors
                                        </a>
                                    </div>

                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                Alex Maxwell<br>
                                                150-600 Church Street, Florida, USA
                                            </address>
                                        </div>
                                    </div>



                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice - #009</div>
                                                <div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-body">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product ID</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    require_once('../connector.php');

                                                    
                                                    $query = "SELECT `quantity`, customer.first_name, customer.last_name, productmodel.modelName, productmodel.modelDescription, productmodel.modelID,productmodel.SRP, productmodel.SRP * `quantity` from orders JOIN customer ON orders.`cusID` = customer.cusID JOIN productmodel on orders.prodID = productmodel.modelID where customer.`cusID` = $userid AND `Status` = ''";
                                                    $result = mysqli_query($con, $query);
                                                    if ($result) {
                                                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                                            ?>
                                                            <tr ">
                                                                <td>
                                                                    
                                                                    <?= $row[3] ?>
                                                                    <p class="m-0 text-muted">
                                                                        <?= $row[4] ?>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <?= $row[5] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $row[0] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $row[6] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $row[7] ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                    <?php
                                                    $userid = $_GET['uid'];
                                                    $query = "SELECT SUM(productmodel.SRP*`quantity`) as subtotal, ROUND(SUM(productmodel.SRP*`quantity`) * 0.5, 0) as tax, SUM(productmodel.SRP*`quantity`)+ROUND(SUM(productmodel.SRP*`quantity`) * 0.5, 0) from orders JOIN productmodel on orders.prodID = productmodel.modelID where `cusID` = 2 AND `Status` = ''";
                                                    $result = mysqli_query($con, $query);
                                                    $row = mysqli_fetch_assoc($result);
                                                    ?>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="3">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                                Tax<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>
                                                        <td>
                                                            <p>
                                                                <?= "$" . $row['subtotal'] . ".00" ?><br>
                                                                $0.00<br>
                                                                <?= "$" . $row['tax'] . ".00" ?><br>
                                                            </p>
                                                            <h5 class="text-success"><strong>
                                                                    <?= "$" . $row['SUM(productmodel.SRP*`quantity`)+ROUND(SUM(productmodel.SRP*`quantity`) * 0.5, 0)'] . '.00' ?>
                                                                </strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-footer">
                                Thank you for Purchasing.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- Footer -->
  <footer  Style="background-color: #474e5d; color:white; "class="footer">
    <p class="lead text-center p-1 fs-7">Mighty Mite Motors &copy; 2023</p>
  </footer>

</body>

</html>