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
        include 'AdminHeader.php';
        ?>
        <div class="container-fluid changePwd">
        </div>
        <div class="pwdForm">
            <form method="post">
                <h3>Change Your Password</h3>
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Enter your current password to change your password.
                </div>
                <div class="form-group">
                    <input type="password" name="txtAdminCurrPwd" class="form-control" placeholder="Current Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtAdminNewPwd" class="form-control" placeholder="New Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" name="txtAdminPwd" class="form-control" placeholder="Confirm New Password *" value="" />
                </div>
                <input type="submit" name="btnChangePwd" value="Change Password" class="btnChangePwd"/>
            </form>
        </div>
        <?php
        if (isset($_POST['btnChangePwd'])) {
            $changeCurrPwd = $_REQUEST['txtAdminCurrPwd'];
            $changeNewPwd = $_REQUEST['txtAdminNewPwd'];
            $changePwd = mysqli_query($con, "UPDATE adminmaster SET password='$changeNewPwd' where admin_id='$admin_session' AND password='$changeCurrPwd'");
            if ($changePwd) {
                echo "<script>alert('Your Password Changed')</script>";
                printf("<script>location.href='AdminDashboard.php'</script>");
            } else {
                echo "<script>alert('Please fill data properly')</script>";
                printf("<script>location.href='Change Password.php'</script>");
            }
        }
        ?>
        
    </body>
</html>
