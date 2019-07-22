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
                <h3>Delete Your Account</h3>
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Just so you know, you won't be able to use this account in future.
                </div>
                <p></p>
                <div class="form-group">
                    <select name="reason" class="form-control">
                        <option class="hidden"  selected disabled>Please select your reason</option>
                        <option>Too hard to use</option>
                        <option>Not enough employment engagement</option>
                        <option>Do not have the features I needed</option>
                        <option>Using a different service</option>
                        <option>Not using it enough (or at all)</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="details" class="form-control" placeholder="Other Reason" style="width: 100%; height: 150px;"  required=""></textarea>
                </div>
                <input type="submit" name="btnDelAcc" value="Delete Account" class="btnChangePwd"/>
            </form>
        </div>
        <?php
        if (isset($_POST['btnDelAcc'])) {
            $sql = mysqli_query($con, "select * from employeemaster where emp_email='$user'");
            while ($row = mysqli_fetch_assoc($sql)) {
                $name = $row['emp_name'];
                $employeeId = $row['emp_id'];
            }
            $reason = $_REQUEST['reason'];
            $details=$_REQUEST['details'];
            $person_type="Employee";
            $reasonInsert = mysqli_query($con, "insert into deleted_account_data values('$name','$employeeId','$reason','$details','$person_type')");
            if ($reasonInsert) {
                $reasonDelete = mysqli_query($con, "DELETE FROM employeemaster WHERE emp_name='$name'");
                if ($reasonDelete) {
                    echo "<script>alert('Your account has been deleted')</script>";
                    printf("<script>location.href='../../BeforeLogin/register.php'</script>");
                } else {
                    echo "<script>alert('Please fill data properly')</script>";
                }
            }
        }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
