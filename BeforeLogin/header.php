<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="../Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="../Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
        <title></title>

    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-md navbar-new-top">
            <a href="/" class="navbar-brand"><img src="../Images/logo.png" alt=""/>GetLance</a>
            <div class="navbar-collapse collapse" id="navbar2">
                <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howItWorks.php">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="why.php">Why</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Community.php">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logIn.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <input type="submit" class="header-btn" value="All Categories" onClick="document.location.href = 'viewAllCategories.php'"/>
                </li>
            </ul>
            </div>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'epwm');
        session_start();
        ?>
    </body>
</html>
