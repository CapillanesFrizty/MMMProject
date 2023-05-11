<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
    <?php
    require_once('connector.php');

    $model_num = $_GET['model-Num'];
    $query = "SELECT * FROM `productmodel` WHERE `modelID` = $model_num";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

    ?>
        <div id="update" class="container ms-auto">

            <div class="container d-flex justify-content-center">
                <p class="display-3 ms-5">
                    Update Products
                    <a class="btn btn-danger" href="./public/ProductAdd.php" role="button">Back</a>
                </p>
            </div>

            <div class="container my-auto d-flex justify-content-center">
                <form action="./updatefunc.php" method="post" class="w-50">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model Name</label>
                        <input type="text" class="form-control" name="ModelName" value="<?php echo $row[1] ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Model Description</label>
                        <input type="text" class="form-control" name="description" value="<?php echo $row[2] ?>" />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Suggested Retail Price</label>
                        <input type="text" class="form-control" name="sRp" value="<?php echo $row[3] ?>" />
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>