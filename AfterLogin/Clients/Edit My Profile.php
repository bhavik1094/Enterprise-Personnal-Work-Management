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
        <div class="container edit-profile">
            <form method="post">
                 <div class="edit-image">
                <div class="row">
                    <div class="col-md-5">
                        <div class="profile-img">
                            <img src="../../Images/Before Login Images/Employee (7).jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <input type="submit" name="btnViewProfile" value="View profile" class="btnSaveProfile"/>
                        <input type="submit" name="btnSaveProfile" value="Save profile" class="btnSaveProfile"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="edit-options">
                        <ul>
                            <li><a href="Edit My Profile.php">Edit Profile</a></li>
                            <li><a href="Change Password.php">Change Password</a></li>
                            <li><a href="Delete Account.php">Delete Account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="edit-account">
                        <h5>Account Settings</h5>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3">
                                <label>First Name</label>
                            </div>
                            <div class="col-md-9">
                                <?php
                                $showData = mysqli_query($con, "select * from clientmaster where client_email='$userClient'");
                                while ($row = mysqli_fetch_assoc($showData)) {
                                    ?>
                                    <input type="text" name="txtClientFname" class="form-control" placeholder="" value="<?php echo $row['client_name']; ?>" required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="txtClientLname" class="form-control" placeholder="" value="<?php echo $row['client_name']; ?>"  required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-9">
                                    
                                    <input type="email" name="txtClientEmail" class="form-control" placeholder="" value="<?php echo $row['client_email']; ?>"  required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" minlength="10" maxlength="10" name="txtClientPhone" class="form-control"  placeholder="" value="<?php echo $row['client_phone']; ?>"  required="" />
                                </div>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                    
            </div>
            </form>
           
        </div>

        <?php
        if (isset($_POST['btnSaveProfile'])) {

            $name = $_REQUEST['txtClientFname'] . " " . $_REQUEST['txtClientLname'];
            $phone = $_REQUEST['txtClientPhone'];

            $updateQuery = mysqli_query($con, "update clientmaster set client_name='$name',client_phone='$phone' where client_id='$clientId'");
            if ($updateQuery) {
                echo "<script>alert('Your profile is updated')</script>";
                printf("<script>location.href='Edit My Profile.php'</script>");
            } else {
                echo "<script>alert('There might be some error')</script>";
            }
        }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
