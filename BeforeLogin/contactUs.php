<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
        </style>
    </head>
    <body style="background: -webkit-linear-gradient(left, #0072ff, #00c6ff);">
        <?php
        include 'header.php';
        //require 'index.php';
        // put your code here
        ?>
        <div class="container contact-form">
            <div class="contact-image">
                <img src="../Images/rocket-contact.png" alt=""/>
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>

                    </div>

                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['btnSubmit'])) {
            $nm = $_REQUEST['txtName'];
            $email = $_REQUEST['txtEmail'];
            $phone = $_REQUEST['txtPhone'];
            $msg = $_REQUEST['txtMsg'];

            $con = mysqli_connect('localhost', 'root', '', 'epwm');
            $sql = mysqli_query($con, "insert into contactmaster (name, email, phone, message) values ('$nm','$email','$phone','$msg')");

            if ($sql) {
                echo "<script>alert('Your dta successfully submitted')</script>";
            }
        }
        ?>
        <?php
        include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>
