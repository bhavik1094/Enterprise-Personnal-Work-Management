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
        <style>
           
        </style>
    </head>
    <body>
        <?php
//        include 'header.php';
        //require 'index.php';
        // put your code here
         $con = mysqli_connect('localhost', 'root', '', 'epwm');
        ?>
        <form method="post">
            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="../Images/logo-white.png" class="logo" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                        <a href="index.php" class="back-home"><img src="../Images/left-arrow.png" alt="" class="back-arrow"/>Back To Home</a>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Freelancer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Freelancer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="txtEmpFname" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="txtEmpLname" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="txtEmpPwd" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="Text" class="form-control"  placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="txtEmpEmail" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
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
                                            <input type="text" name="txtEmpAns" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div>
                                        <input type="submit" name="btnAddDetails" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="txtClientFname" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="txtClientLname" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="txtClientEmail" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="txtClientPhone" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="txtClientPwd" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="txtpwd" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select name="txtClientQue" class="form-control">
                                                <option class="hidden" selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="txtClientAns" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" name="btnCliRegister" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['btnAddDetails'])) {
           $empName = $_REQUEST['txtEmpFname'] ." ". $_REQUEST['txtEmpLname'];
            $empId = $_REQUEST['txtEmpFname'] . rand(100, 200);
            $empPwd = $_REQUEST['txtEmpPwd'];
            $empEmail = $_REQUEST['txtEmpEmail'];
            $empPhone = $_REQUEST['txtEmpPhone'];
            $empGender = $_REQUEST['gender'];
            $empQuestion = $_REQUEST['txtEmpQue'];
            $empAnswer = $_REQUEST['txtEmpAns'];
            

            $_SESSION['name'] = $empName;
            $_SESSION['id'] = $empId;
            $_SESSION['pwd'] = $empPwd;
            $_SESSION['email'] = $empEmail;
            $_SESSION['phone'] = $empPhone;
            $_SESSION['gender'] = $empGender;
            $_SESSION['que'] = $empQuestion;
            $_SESSION['ans'] = $empAnswer;
            printf("<script>location.href='RegisterDetailsEmployee.php'</script>");
        }

        if (isset($_POST['btnCliRegister'])) {
            $clientName = $_REQUEST['txtClientFname'] ." ". $_REQUEST['txtClientLname'];
            $clientId = $_REQUEST['txtClientFname'] . rand(100, 200);
            $clientPwd = $_REQUEST['txtClientPwd'];
            $clientEmail = $_REQUEST['txtClientEmail'];
            $clientPhone = $_REQUEST['txtClientPhone'];
            $clientQue = $_REQUEST['txtClientQue'];
            $clientAns = $_REQUEST['txtClientAns'];

            
            $clientQuery = mysqli_query($con, "insert into clientmaster values ('$clientId','$clientName','$clientPwd','$clientEmail','$clientQue','$clientAns','$clientPhone')");
            if ($clientQuery) {
                echo "<script>alert('Record Inserted')</script>";
                printf("<script>location.href='LogIn.php'</script>");
            } else {
                echo "<script>alert('Record does not inserted')</script>";
            }
        }
        ?>
        <?php
//        include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>