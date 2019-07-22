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
                        <input type="submit" value="View profile" class="btnSaveProfile"/>
                        <input type="submit" value="Save profile" class="btnSaveProfile"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="edit-options">
                        <ul>
                            <li><a href="Edit Your Profile.php">Edit Profile</a></li>
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
                                $showData = mysqli_query($con, "select * from employeemaster where emp_email='$user'");
                                while ($row = mysqli_fetch_assoc($showData)) {
                                    ?>
                                    <input type="text" name="txtEmpFname" class="form-control" placeholder="<?php echo $row['emp_name']; ?>" value="" required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="txtEmpLname" class="form-control" placeholder="<?php echo $row['emp_name']; ?>" value=""  required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-9">
                                    
                                    <input type="email" name="txtEmpEmail" class="form-control" placeholder="<?php echo $row['emp_email']; ?>" value=""  required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control"  placeholder="<?php echo $row['emp_phone']; ?>" value=""  required="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-7">
                        <div class="edit-account">
                            <h5>Work Settings</h5>
                            <hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="txtEmpProfession" class="form-control"  required="">
                                        <option class="hidden"   selected disabled>Please select your profession</option>
                                        <option>Designer</option>
                                        <option>Developer</option>
                                        <option>Finance Experts</option>
                                        <option>Writer</option>
                                        <option>Sales and Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Experience</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="txtEmpExperience" class="form-control"  required="">
                                        <option class="hidden"  selected disabled>Please select your level</option>
                                        <option>Entry Level</option>
                                        <option>Intermediate</option>
                                        <option>Experts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Hourly Rate</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="txtEmpRate" class="form-control" placeholder="<?php echo $row['emp_rate']; ?>" value=""  required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Total Projects</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="txtEmpProjects"class="form-control" placeholder="<?php echo $row['emp_tot_proj']; ?>" value=""  required=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>English Level</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="txtEmpEngLevel" class="form-control" required="">
                                        <option class="hidden"  selected disabled>Please select your English Proficiency</option>
                                        <option>Basic</option>
                                        <option>Conversational</option>
                                        <option>Fluent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="txtEmpAvailability" class="form-control"  required="">
                                        <option class="hidden"  selected disabled>Please select your Availability for work</option>
                                        <option>Less than 30 Hours a week</option>
                                        <option>More than 30 Hours a week</option>
                                        <option>As Needed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-7">
                        <div class="edit-account">
                            <h5>About Settings</h5>
                            <hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Skills</label>
                                </div>
                                <div class="col-md-9">
                                    <select name="skills[]" multiple="multiple" class="form-control" style="height: 200px; width: 80%;">
                                        <option class="hidden"  selected disabled>Please select your profession</option>
                                        <option disabled>Designers</option>
                                        <option>Adobe Designers</option>
                                        <option>Anroid Designers</option>
                                        <option>Art Direction Experts</option>
                                        <option>Brand/ Logo/ Icon Designers</option>
                                        <option>Creative Designers</option>
                                        <option>Digital Designers</option>
                                        <option>E-Commerce Website Designers</option>
                                        <option>Graphic Designers</option>
                                        <option>Interactive Designers</option>
                                        <option>Photoshop Experts</option>
                                        <option>Responsive Design Experts</option>
                                        <option>SOS Designers</option>
                                        <option>Sketch Experts</option>
                                        <option>Typography Experts</option>
                                        <option>Web Designers</option>
                                        <option>Wordpress Designers</option>

                                        <option disabled></option>
                                        <option disabled>Developers</option>
                                        <option>Angular JS Developers</option>
                                        <option>Anroid Developers</option>
                                        <option>Asp.Net Developers</option>
                                        <option>C/C++ Developers</option>
                                        <option>Doupal Developers</option>
                                        <option>Facebook API Developers</option>
                                        <option>IOS Developers</option>
                                        <option>JAVA Developers</option>
                                        <option>Magento Developers</option>
                                        <option>Microsoft Developers</option>
                                        <option>Wordpress Developers</option>
                                        <option>Google API Developers</option>
                                        <option>Hadoop Developers</option>
                                        <option>Laravel Developers</option>
                                        <option>PHP Developers</option>
                                        <option>Mysql Developers</option>
                                        <option>Windows Application</option>
                                        <option>Javascript/Jquery/Node.js/React.js Developers</option>

                                        <option disabled></option>
                                        <option disabled>Finance Experts</option>
                                        <option>Budgeting Consultants</option>
                                        <option>Business Consultants</option>
                                        <option>Data Analyst</option>
                                        <option>Finance Consultants</option>
                                        <option>Excel Experts</option>
                                        <option>Financial Modeling Consultants</option>
                                        <option>Investment Bankers</option>
                                        <option>Market Research Analyst</option>
                                        <option>Fundraising Consultants</option>
                                        <option>Start up Fundraising Consultants</option>

                                        <option disabled></option>
                                        <option disabled>Writer</option>
                                        <option>Website Content</option>
                                        <option>Blogger / Article</option>
                                        <option>Company Profile</option>
                                        <option>CV and Cover Letter</option>
                                        <option>Novel Writer</option>
                                        <option>E-Book</option>
                                        <option>Copy Writing</option>
                                        <option>Email & News Letter</option>
                                        <option>Editing & Proof Reading</option>
                                        <option>Script Writing</option>

                                        <option disabled></option>
                                        <option disabled>Sales and Marketing</option>
                                        <option>Display Advertising</option>
                                        <option>Offline Marketing</option>
                                        <option>Email Marketing</option>
                                        <option>Press & Media Relations</option>
                                        <option>General Communication</option>
                                        <option>Telemarketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>About You</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="txtEmpBio" class="form-control" placeholder="<?php echo $row['emp_bio']; ?>" style="width: 100%; height: 150px;"  required=""></textarea>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            </form>
           
        </div>

        <?php
        if (isset($_POST['saveProfile'])) {

            $name = $_REQUEST['txtEmpFname'] . " " . $_REQUEST['txtEmpLname'];
            $phone = $_REQUEST['txtEmpPhone'];

            $prof = $_REQUEST['txtEmpProfession'];
            $exp = $_REQUEST['txtEmpExperience'];
            $hr_rate = $_REQUEST['txtEmpRate'];
            $tot_proj = $_REQUEST['txtEmpProjects'];
            $eng_level = $_REQUEST['txtEmpEngLevel'];
            $avail = $_REQUEST['txtEmpAvailability'];

            $bio = $_REQUEST['txtEmpBio'];
            $skills2 = "";
            foreach ($_REQUEST['skills'] as $skills) {
                $skills .= $skills . "   ";
            }

            $updateQuery = mysqli_query($con, "update employeemaster set emp_name='$name',emp_phone='$phone',emp_prof='$prof',emp_exp='$exp',emp_rate='$hr_rate',emp_tot_proj='$tot_proj',emp_eng_level='$eng_level',emp_avail='$avail',emp_skills='$skills2',emp_bio='$bio' where emp_id='$employeeId'");
            if ($updateQuery) {
                echo "<script>alert('Your profile is updated')</script>";
                printf("<script>location.href='Edit Your Profile.php'</script>");
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
