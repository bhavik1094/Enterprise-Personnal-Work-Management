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
        include 'ClientHeader.php';
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
                    <select name="txtClientQue" class="form-control">
                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                        <option>What is your Birthdate?</option>
                        <option>What is Your old Phone Number</option>
                        <option>What is your Pet Name?</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="txtClientAns" class="form-control" placeholder="Enter Your Answer *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtClientCurrPwd" class="form-control" placeholder="Current Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtClientNewPwd" class="form-control" placeholder="New Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtClientPwd" class="form-control" placeholder="Confirm New Password *" value="" />
                </div>
                <input type="submit" name="btnChangePwd" value="Change Password" class="btnChangePwd"/>
            </form>
        </div>
        <?php
        if (isset($_POST['btnChangePwd'])) {
            $changePwdQue = $_REQUEST['txtClientQue'];
            $changePwdQAns = $_REQUEST['txtClientAns'];
            $changeCurrPwd = $_REQUEST['txtClientCurrPwd'];
            $changeNewPwd = $_REQUEST['txtClientNewPwd'];
            $changePwd = mysqli_query($con, "UPDATE clientmaster SET client_pwd='$changeNewPwd' where client_que='$changePwdQue' AND client_ans='$changePwdQAns' AND client_pwd='$changeCurrPwd'");
            if ($changePwd) {
                echo "<script>alert('Your Password Changed')</script>";
                printf("<script>location.href='Your Profile.php'</script>");
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
