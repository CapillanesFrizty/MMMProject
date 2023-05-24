<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mighty Mite Motors - Place Order Management</title>
    <link rel="stylesheet" href="./CSS/ProductAdd.css">
    <link rel="stylesheet" href="./CSS/rootDeclaration.css">
</head>

<body>
    <!--navigation bar required all pages--->
    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="#"><img src="./Pictures/logoMMM.png" alt="MightyMiteMotors.com"></a>
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
    </header>

    <div class="container">
        <!-- Table (changes needed when connected to database) -->
        <table id="myTable">
            <thead>
                <tr class="header">
                    <th style="width:30%;">Order Number</th>
                    <th style="width:40%;">Customer ID</th>
                    <th style="width:20%;">Model ID</th>
                    <th style="width:20%;">Order Date</th>
                    <th style="width:40%;">Quantity</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require_once('../connector.php');

                $query = "SELECT * FROM `orders` WHERE `Status` = 'New Orders'";
                $result = mysqli_query($con, $query);
                if ($result) {
                    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                        ?>
                        <tr>
                            <td>
                                <?= $row[0] ?>
                            </td>
                            <td>
                                <?= $row[1] ?>
                            </td>
                            <td>
                                <?= $row[2] ?>
                            </td>
                            <td>
                                <?= $row[3] ?>
                            </td>
                            <td>
                                <?= $row[4] ?>
                            </td>
                            <td>
                                <a href="../updateorderstatus.php?ordernum=<?= $row[0] ?>">Confirm</a>

                            </td>
                            <td><a href="../CancelOrders.php?ordernum=<?= $row[0] ?>">Cancel</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>