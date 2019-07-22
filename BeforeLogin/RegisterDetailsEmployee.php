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
    <body style="background: -webkit-linear-gradient(left, #0072ff, #00c6ff);">
        <?php
        include 'header.php';
        ?>

        <div class="container contact-form register-details">
            <div class="contact-image">
                <img src="../Images/rocket-contact.png" alt=""/>
            </div>
            <form method="post">
                <h3 class="register-details-head">Tell us More About You</h3>
                <div class="row register-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="txtEmpProfession" class="form-control">
                                <option class="hidden"   selected disabled>Please select your profession</option>
                                <option>Designer</option>
                                <option>Developer</option>
                                <option>Finance Experts</option>
                                <option>Writer</option>
                                <option>Sales and Marketing</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="txtEmpExperience" class="form-control">
                                <option class="hidden"  selected disabled>Please select your level</option>
                                <option>Entry Level</option>
                                <option>Intermediate</option>
                                <option>Experts</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmpRate" class="form-control" placeholder="Hourly Rate *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmpProjects"class="form-control" placeholder="Total Projects *" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="txtEmpEngLevel" class="form-control">
                                <option class="hidden"  selected disabled>Please select your English Proficiency</option>
                                <option>Basic</option>
                                <option>Conversational</option>
                                <option>Fluent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="txtEmpAvailability" class="form-control">
                                <option class="hidden"  selected disabled>Please select your Availability for work</option>
                                <option>Less than 30 Hours a week</option>
                                <option>More than 30 Hours a week</option>
                                <option>As Needed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="file" name="txtEmpResume" class="form-control" value="Choose Image"/>
                        </div>
                        <div class="form-group">
                            <input type="file" name="txtEmpImage" class="form-control" value="Upload Resume"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnEmpRegister" class="btnRegister btnRegisterDetails"  value="Register"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php
        $name = $_SESSION['name'];
        $id = $_SESSION['id'];
        $pwd = $_SESSION['pwd'];
        $email = $_SESSION['email'];
        $phone = $_SESSION['phone'];
        $gen = $_SESSION['gender'];
        $que = $_SESSION['que'];
        $ans = $_SESSION['ans'];

        if (isset($_POST['btnEmpRegister'])) {
            $prof = $_REQUEST['txtEmpProfession'];
            $exp = $_REQUEST['txtEmpExperience'];
            $hr_rate = $_REQUEST['txtEmpRate'];
            $tot_proj = $_REQUEST['txtEmpProjects'];
            $eng_level = $_REQUEST['txtEmpEngLevel'];
            $avail = $_REQUEST['txtEmpAvailability'];

            if (($_FILES['txtEmpResume']['name'] != "")) {
                $target_dir = "F:/EPWM/UploadedFiles/Employee/";
                $file = $_FILES['txtEmpResume']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['txtEmpResume']['tmp_name'];
                $path_filename_ext = $target_dir . $empId . "." . $ext;



                move_uploaded_file($temp_name, $path_filename_ext);
                echo "Congratulations! File Uploaded Successfully.";
            }

            //for the profile images

            if (($_FILES['txtEmpImage']['name'] != "")) {

                $target_dir = "F:/EPWM/UploadedImages/Employee/";
                $file = $_FILES['txtEmpImage']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['txtEmpImage']['tmp_name'];
                $path_filename_ext = $target_dir . $empId . "." . $ext;

                move_uploaded_file($temp_name, $path_filename_ext);
            }


            $regQuery = mysqli_query($con, "insert into employeemaster values('$id','$name','$pwd','$email','$phone','$gen','$prof','$exp','$hr_rate','$que','$ans','$tot_proj','$eng_level','$avail','','')");
            if ($regQuery) {
                echo "<script>alert('Record Inserted')</script>";
                printf("<script>location.href='LogIn.php'</script>");
            } else {
                echo "<script>alert('Record does not inserted')</script>";
            }
        }
        ?>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
