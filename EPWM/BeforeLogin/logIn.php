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
        <?php
//        include 'LoginRegisterHeader.php';
        session_start();
        // put your code here
        ?>
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login as Freelancer</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="txtEmpEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtEmpPwd" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="empLogin" class="btnContactSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="ForgetPassword.php" class="btnForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                    
                </div>
                <div class="col-md-6 login-form-2">
                    <div class="login-logo">
                        <a href="index.php"><img src="../Images/logo-white.png" alt=""/> </a>
                    </div>
                    <h3>Login as Hirer</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="txtCliEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtCliPwd" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="cliLogin" class="btnContactSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="ForgetPassword.php" class="btnForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'epwm');
        if (isset($_POST['empLogin'])) {
            $empEmail = $_REQUEST['txtEmpEmail'];
            $empPwd = $_REQUEST['txtEmpPwd'];

            $res = mysqli_query($con, "select * from employeemaster where emp_email='$empEmail' and emp_pwd='$empPwd'");
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $_SESSION['login_employee'] = $empEmail;
                printf("<script>location.href='../AfterLogin/Employee/Projects and Contests.php'</script>");
                // header("Location: ../../AfterLogin/Employee/Dashboard.php");
            } else {
                echo "<script>alert('Wrong Credentials')</script>";
            }
        }
        if (isset($_POST['cliLogin'])) {
            $clientemail = $_REQUEST['txtCliEmail'];
            $clientpwd = $_REQUEST['txtCliPwd'];

            $res = mysqli_query($con, "select * from clientmaster where client_email='$clientemail' and client_pwd='$clientpwd'");
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $_SESSION['login_client'] = $clientemail;
                printf("<script>location.href='../AfterLogin/Clients/Projects and Contests.php'</script>");
                // header("Location: ../../AfterLogin/Employee/Dashboard.php");
            } else {
                echo "<script>alert('Wrong Credentials')</script>";
            }
        }
        ?>
        <?php
//        include 'footer.php';
        // put your code here
        ?>
    </body>
</html>
