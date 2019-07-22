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
        $pId = $_SESSION['project_id'];
        ?>
        <div class="container project-details">
            <form method="post">
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Greetings!</strong> This project is available till the 3 days after it's starting date. After that you cannot apply for the project.
                </div>
                <div class="project-heading">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
                            $projectDetails = mysqli_query($con, "select * from projectmaster where project_id='$pId'");
                            while ($row = mysqli_fetch_array($projectDetails)) {
                                ?>
                                <h4><?php echo $row['proj_name']; ?></h4>
                                <h6><?php echo $row['employer_name']; ?></h6>
                            </div>
                            <div class="col-md-4">
                                <img src="../../Images/Before Login Images/Employee (1).jpg" alt=""/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Start Date</p>
                                <h6><?php echo $row['start_date']; ?></h6>
                            </div>
                            <div class="col-md-2">
                                <p>Rate</p>
                                <h6><?php echo $row['proj_amount'] . " " . $row['currency_type']; ?></h6>
                            </div>
                            <div class="col-md-2">
                                <p>Applicants</p>
                                <h6>14</h6>
                            </div>
                            <div class="col-md-2">
                                <p>Posted On</p>
                                <h6><?php echo $row['posted_date']; ?></h6>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="about-project">
                            <h6>About and Requirement of the Project</h6>
                        </div>
                        <div class="about-details">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Project Description</h6>
                                    <p><?php echo $row['proj_detail']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <h6>Skills Required</h6>
                                    <p><?php echo $row['proj_skills']; ?></p>
                                </div>
                                <div class="col-md-12">
                                    <h6>Deadline</h6>
                                    <p><?php echo $row['end_date']; ?></p>
                                </div>
                            </div>
                            <input type="submit" value="Apply Now" name="btnApply"/>
                        </div>
                    </div>
                <?php } ?>
            </form>
        </div>
        <?php
        if(isset($_POST['btnApply'])){
        printf("<script>location.href='Application Form.php'</script>");
        }
        ?>



        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
