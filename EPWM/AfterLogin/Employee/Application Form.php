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
        $empData = mysqli_query($con, "select * from projectmaster where project_id='$pId'");
        while ($row = mysqli_fetch_array($empData)) {
            $projName=$row['proj_name'];
            $client_id=$row['client_id'];
            $client_name=$row['employer_name'];
        }
        ?>
        <div class="container-fluid changePwd postProjectContainer">
            <h1>Tell us what you need done</h1>
            <p>Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</p>
        </div>
        <div class="pwdForm postProjectForm">
            <form method="post">

                <div class="form-group">
                    <h5>Why you would be hired for this company?</h5>
                    <textarea name="answer1" class="form-control" style="width: 100%; height: 150px;"  required=""></textarea>
                </div>
                <div class="form-group">
                    <h5> Are you available for 6 months, starting immediately, for a full time internship at Ahmedabad?</h5>
                    <textarea name="answer2" class="form-control" style="width: 100%; height: 150px;"  required=""></textarea>
                </div>
                <div class="form-group">
                    <h5>Do you have any other experience or internships?</h5>
                    <textarea name="answer3" class="form-control" style="width: 100%; height: 150px;"  required=""></textarea>
                </div>
                <input type="submit" name="btnApply" value="Submit Application" class="btnSubmitProject"/>
            </form>
        </div>
        <?php
        include '../Footer.php';
        ?>
        <?php
        if(isset($_POST['btnApply'])){
            $ans1=$_REQUEST['answer1'];
            $ans2=$_REQUEST['answer2'];
            $ans3=$_REQUEST['answer3'];
            $applied_date= date("Y-m-d");
            $appData= mysqli_query($con, "insert into project_application_master values('$pId','$projName','$client_id','$client_name','$employeeId','$ename','$ans1','$ans2','$ans3','$applied_date')");
            if ($appData) {
                echo "<script>alert('Application Submitted')</script>";
                printf("<script>location.href='Projects and Contests.php'</script>");
            } else {
                echo "<script>alert('There might be some error')</script>";
            }
            }
        ?>
    </body>
</html>
