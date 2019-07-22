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
        include 'clientHeader.php';
        $pId=$_SESSION['pid'];
        $eId=$_SESSION['eid'];
        ?>

        <div class="container-fluid changePwd postProjectContainer">
            <h1>Tell us what you need done</h1>
            <p>Contact skilled GetLancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</p>
        </div>
        <div class="pwdForm postProjectForm">
            <form method="post">
                <div class="form-group">
                    <h5>Feedback</h5>
                    <input type="text" name="feedback" class="form-control"/>
                </div>
                <div class="form-group">
                    <h5>Awards</h5>
                    <input type="text" name="awards" class="form-control"/>
                </div>
                <input type="submit" name="btnFeedback" value="Submit" class="btnSubmitProject"/>
            </form>
        </div>
        <?php
        if (isset($_POST['btnFeedback'])) {
            $feedback = $_REQUEST['feedback'];
            $awards = $_REQUEST['awards'];
            $ratings = mysqli_query($con, "update completed_project_master set feedback='$feedback', awards='$awards' where employee_id='$eId' and project_id='$pid'");
            if ($ratings) {
                echo "<script>alert('Feedback is Given')</script>";
                printf("<script>location.href='Projects and Contests.php'</script>");
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
