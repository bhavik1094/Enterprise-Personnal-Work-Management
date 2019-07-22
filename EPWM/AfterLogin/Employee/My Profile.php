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
    <body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
        <?php
        include 'EmployeeHeader.php';
        $profQuery = mysqli_query($con, "select * from employeemaster where emp_email='$user'");
        ?>
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../../Images/Before Login Images/Employee (7).jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <?php
                            if ($profQuery) {
                                while ($row = mysqli_fetch_assoc($profQuery)) {
                                    ?>
                                    <h5>
                                        <?php echo $row['emp_name'] ?>
                                    </h5>
                                    <h6>
                                        <?php echo $row['emp_prof'] ?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                                    <?php
                                }
                            }
                            ?>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="profile-edit-btn" onclick="document.location.href='Edit Your Profile.php'">Edit Profile</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <?php
                                $basicInfo = mysqli_query($con, "select * from employeemaster where emp_email='$user'");
                                if ($basicInfo) {
                                    while ($row = mysqli_fetch_assoc($basicInfo)) {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_name']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_phone']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_prof']; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <?php
                                 $timeline = mysqli_query($con, "select * from employeemaster where emp_email='$user'");
                                if ($timeline) {
                                    while ($row = mysqli_fetch_assoc($timeline)) {
                                        echo $row['emp_bio'];
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_exp']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_rate']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_tot_proj']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_eng_level']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['emp_avail']; ?></p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <?php
        if (isset($_POST['btnAddDetails'])) {
            $selectedOption2 = "";
            $bio = $_REQUEST['txtEmpBio'];
            foreach ($_POST['skills'] as $selectedOption) {
                $selectedOption2 .= $selectedOption . "  ";
            }
            $updateDetail = mysqli_query($con, "UPDATE employeemaster SET emp_bio='$bio', skills='$selectedOption2' where emp_id='$employeeid'");
            if ($updateDetail) {
                echo "<script>alert('Profile Updated')</script>";
                printf("<script>location.href='My Profile.php'</script>");
            } else {
                echo "<script>alert('Please fill data properly')</script>";
            }
        }
        if (isset($_POST['btnProfile'])) {
            printf("<script>location.href='My Profile.php'</script>");
        }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>