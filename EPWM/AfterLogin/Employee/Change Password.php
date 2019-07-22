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
    <body style="background: #f7f8f9;">
        <?php
        include 'EmployeeHeader.php';
        ?>
        <div class="container-fluid changePwd">
        </div>
        <div class="pwdForm">
            <form method="post">
                <h3>Change Your Password</h3>
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Enter your security answer and current password to change your password.
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
                <div class="form-group">
                    <input type="password" name="txtEmpCurrPwd" class="form-control" placeholder="Current Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtEmpNewPwd" class="form-control" placeholder="New Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtEmpPwd" class="form-control" placeholder="Confirm New Password *" value="" />
                </div>
                <input type="submit" name="btnChangePwd" value="Change Password" class="btnChangePwd"/>
            </form>
        </div>
        <?php
        if (isset($_POST['btnChangePwd'])) {
            $changePwdQue = $_REQUEST['txtEmpQue'];
            $changePwdQAns = $_REQUEST['txtEmpAns'];
            $changeCurrPwd = $_REQUEST['txtEmpCurrPwd'];
            $changeNewPwd = $_REQUEST['txtEmpNewPwd'];
            $changePwd = mysqli_query($con, "UPDATE employeemaster SET emp_pwd='$changeNewPwd' where emp_que='$changePwdQue' AND emp_ans='$changePwdQAns' AND emp_pwd='$changeCurrPwd'");
            if ($changePwd) {
                echo "<script>alert('Your Password Changed')</script>";
                printf("<script>location.href='My Profile.php'</script>");
            } else {
                echo "<script>alert('Please fill data properly')</script>";
                printf("<script>location.href='Change Password.php'</script>");
            }
        }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
