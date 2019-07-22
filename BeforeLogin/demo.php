<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <title></title>

    </head>
    <body>

        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" name="btnfile" value="submit"/>
            <input type="submit" name="view" value="submit"/>
        </form>

        <?php
        if (isset($_POST['btnfile'])) {
            if (isset($_FILES['file'])) {
                $errors = array();
                $file_name = $_FILES['file']['name'];
                $file_size = $_FILES['file']['size'];
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_type = $_FILES['file']['type'];
                $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
                $dir = "C:/xampp/htdocs/EPWM/UploadedImages/";

                $target_file = $dir . basename($_FILES["file"]["name"]);
                $expensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $expensions)) {
                    if (file_exists($target_file) == false) {
                        echo "Sorry, file already exists.";
                    }
                } else {
                    $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                }

//                if(file_exists($target_file)) {
//                    unlink($target_file);
//                }

                if (empty($errors) == true) {
                    move_uploaded_file($file_tmp, $dir . "kshiti" . "." . $file_ext);
                    echo "Success";
                } else {
                    print_r($errors);
                }
            }
            echo "<img src='$file_name' alt=''/>";
        }

        if (isset($_POST['view'])) {
//            echo "<img src='../UploadedImages/aaaaaaaaa.jpg' alt=''/>";
            header("Content-type: application/pdf");
            @readfile("C:/xampp/htdocs/EPWM/UploadedFiles/Kshiti Ghelani's Resume.pdf");
        }
        ?>

    </body>
</html>
