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

                <div class="col-md-6">
                    <div class="container after-login-employee register-details">
                        <h1>Employee</h1>
                        <div class="bank-form">

                            <div class="bank-form-content">
                                <div class="row">

                                    <div class="col-md-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="txtEmpId" class="form-control" placeholder="Enter Employee Id *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <select name="txtEmpQue" class="form-control">
                                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                    <option>What is your Birthdate?</option>
                                                    <option>What is Your old Phone Number</option>
                                                    <option>What is your Pet Name?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="txtEmpAns" class="form-control" placeholder="Answer *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="txtNewPwd" class="form-control" placeholder="Enter New Password *" value=""/>
                                            </div>  
                                            <div class="form-group">
                                                <input type="password" name="txtPwd" class="form-control" placeholder="Confirm Password *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btnContactSubmit" name="btnEmpLogin" value="Change Password" value="Login" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="container after-login-employee register-details">
                        <h1>Hirer</h1>
                        <div class="bank-form">

                            <div class="bank-form-content">
                                <div class="row">

                                    <div class="col-md-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="txtClientId" class="form-control" placeholder="Enter Client Id *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <select name="txtClientQue" class="form-control">
                                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                    <option>What is your Birthdate?</option>
                                                    <option>What is Your old Phone Number</option>
                                                    <option>What is your Pet Name?</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="txtClientAns" class="form-control" placeholder="Answer *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="txtClientNewPwd" class="form-control" placeholder="Enter New Password *" value=""/>
                                            </div>  
                                            <div class="form-group">
                                                <input type="password" name="txtPwd" class="form-control" placeholder="Confirm Password *" value=""/>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btnContactSubmit" name="btnClientLogin" value="Change Password" value="Login" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['btnEmpLogin'])) {
            $userId = $_REQUEST['txtEmpId'];
            $que = $_REQUEST['txtEmpQue'];
            $ans = $_REQUEST['txtEmpAns'];
            $pswd = $_REQUEST['txtNewPwd'];
            $con = mysqli_connect('localhost', 'root', '', 'epwm');
            $query = mysqli_query($con, "select * from employeemaster where emp_id='$userId'");
            $count = mysqli_num_rows($query);

            if ($count == 1) {
                mysqli_query($con, "update employeemaster set emp_pwd='$pswd' where emp_que='$que' and emp_ans='$ans'");
                echo "<script>alert('You have successfully changed your password')</script>";
            } else {
                echo "<script>alert('Your Data Does nt Match')</script>";
            }
        }

        if (isset($_POST['btnClientLogin'])) { {
                $clientId = $_REQUEST['txtClientId'];
                $clientQue = $_REQUEST['txtClientQue'];
                $clientAns = $_REQUEST['txtClientAns'];
                $clientPswd = $_REQUEST['txtClientNewPwd'];
                $con = mysqli_connect('localhost', 'root', '', 'epwm');
                $query = mysqli_query($con, "select * from clientmaster where client_id='$clientId'");
                $count = mysqli_num_rows($query);

                if ($count == 1) {
                    mysqli_query($con, "update clientmaster set client_pwd='$clientPswd' where client_que='$clientQue' and client_ans='$clientAns'");
                    echo "<script>alert('You have successfully changed your password')</script>";
                } else {
                    echo "<script>alert('Your Data Does nt Match')</script>";
                }
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
