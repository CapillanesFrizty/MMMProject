<?php

require_once('connector.php');

if (isset($_POST['submit']) && isset($_FILES['model_image'])) {

    $img_name = $_FILES['model_image']['name'];
    $img_size = $_FILES['model_image']['size'];
    $tmp_name = $_FILES['model_image']['tmp_name'];
    $error = $_FILES['model_image']['error'];

    if ($error === 0) {
        if ($img_size > 375000) {
            $error_message = "the file is exceed to 3mb";
            header("location: ./public/ProductAdd.html?error=$error_message");
        } else {
            $get_img_extensions = pathinfo($img_name, PATHINFO_EXTENSION);
            $convert_extension_to_lowercase = strtolower($get_img_extensions);

            $allowed_extensions = array("jpg", "jpeg", "png");

            if (in_array($convert_extension_to_lowercase, $allowed_extensions)) {
                $new_img_name = uniqid("IMG-",true). '.' . $convert_extension_to_lowercase;
                $upload_to_image_folder ='images/'. $new_img_name;
                move_uploaded_file($tmp_name,$upload_to_image_folder);

                // insert to DB
                $model_name = $_POST['model_name'];
                $model_description = $_POST['model_description'];
                $model_SRP = $_POST['model_SRP'];

                $query = "INSERT INTO `productmodel`(`modelName`, `modelDescription`, `SRP`, `img`) VALUES ('$model_name','$model_description','$model_SRP','$new_img_name')";
                
                mysqli_query($con,$query);
                header("location: ./public/ProductAdd.html?message=Model was add Successufuly");
            } else {
                $error_message = "File type is not allowed";
                header("location: ./public/ProductAdd.html?error=$error_message");
            }

        }

    } else {
        $error_message = "File not found";
        header("location: ./public/ProductAdd.html?error=$error_message");
    }

} else {
    header("location: ./public/ProductAdd.html");
}