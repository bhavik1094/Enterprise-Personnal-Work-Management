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
        include 'EmployeeHeader.php';
        $eId = $_SESSION['emp_id'];
        $pId = $_SESSION['proj_id'];
        ?>
        <div class="container project-details">
            <form method="post">
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" >&times;</button>
                <strong>Greetings! </strong>This project is available till the 3 day after it's starting date.
            </div>
            <div class="project-heading">
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        $empData = mysqli_query($con, "select * from projectmaster where project_id='$pId'");
                        while ($row = mysqli_fetch_array($empData)) {
                            ?>
                            <h4><?php echo $row['project_id']; ?></h4>
                            <h4><?php echo $row['proj_name']; ?></h4>
                        </div>
                        <div class="col-md-4">
                            <img/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <p>Start Date</p>
                            <h6><?php echo $row['start_date']; ?></h6>
                        </div>
                        <div class="col-md-2">
                            <p>End Date</p>
                            <h6><?php echo $row['end_date']; ?></h6>
                        </div>
                    <?php }
                    ?>
                    <div class="col-md-2">
                        <?php
                        $date = mysqli_query($con, "select * from project_application_master where project_id='$pId'");
                        while ($row = mysqli_fetch_array($date)) {
                            ?>
                            <p>Response Date</p>
                            <h6><?php echo $row['applied_date']; ?></h6>
                        <?php } ?>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>

            <div class="project-content">
                <div class="about-project">
                    <h6>GetLancer Details</h6>
                </div>
                <div class="about-details">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $empData = mysqli_query($con, "select * from employeemaster where emp_id='$eId'");
                            while ($row = mysqli_fetch_array($empData)) {
                                ?>
                                <h6>Full Name</h6>
                                <p><?php echo $row['emp_name']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <h6>Profession</h6>
                                <p><?php echo $row['emp_prof']; ?></p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <img/>
                            </div>
                            <div class="col-md-6">
                                <h6>Email</h6>
                                <p><?php echo $row['emp_email']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <h6>Phone</h6>
                                <p><?php echo $row['emp_phone']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <h6>Experience</h6>
                                <p><?php echo $row['emp_exp']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <h6>English Level</h6>
                                <p><?php echo $row['emp_eng_level']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <h6>Availability</h6>
                                <p><?php echo $row['emp_avail']; ?></p>
                            </div>
                            <a class="app-resume">View Resume</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="project-content">
                <div class="about-project">
                    <h6>Assessment Details</h6>
                </div>
                <div class="about-details">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $answers = mysqli_query($con, "select * from project_application_master where project_id='$pId'");
                            while ($row = mysqli_fetch_array($answers)) {
                                $projName = $row['project_name'];
                                ?>
                                <h6>Why you should hired for this company?</h6>
                                <p><?php echo $row['answer1']; ?></p>
                            </div>
                            <div class="col-md-12">
                                <h6>Do you have any prior experience of work releted to this field?</h6>
                                <p><?php echo $row['answer2']; ?></p>
                            </div>
                            <div class="col-md-12">
                                <h6>For how much time period you are available? Please specify number of months you can work for us.</h6>
                                <p><?php echo $row['answer3']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            </form>
        </div>
       
        <?php
        include '../Footer.php';
        ?>

    </body>
</html>
