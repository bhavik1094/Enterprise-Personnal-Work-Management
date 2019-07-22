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
    </head>
    <body>
        <?php
        include 'header.php';
        //require 'index.php';
        // put your code here
        ?>
        <div class="container forget-container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="container after-login-employee register-details">
                        <h1>Admin Login</h1>
                        <div class="bank-form">

                            <div class="bank-form-content">
                                <div class="row">

                                    <div class="col-md-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="txtAdminId" class="form-control" placeholder="Enter Your Id *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="txtPwd" class="form-control" placeholder="Enter Password *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btnContactSubmit" name="btnAdminLogin" value="Login" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
        <?php
        include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
        <?php
        if (isset($_POST['btnAdminLogin'])) {
            $adminId = $_REQUEST['txtAdminId'];
            $adminPwd = $_REQUEST['txtPwd'];
            //$res = mysqli_query($con, "insert into adminmaster values('admin','admin123')");
            $res = mysqli_query($con, "select * from adminmaster where admin_id='$adminId' and password='$adminPwd'");
            if ($res) {
               $_SESSION['login_admin']=$adminId;
               printf("<script>location.href='../AdminPanel/AdminDashboard.php'</script>");
               // header("Location: ../../AfterLogin/Employee/Dashboard.php");
            }
         else {
            echo "<script>alert('Wrong Credentials')</script>";
        }
        }
        ?>
    </body>
</html>
