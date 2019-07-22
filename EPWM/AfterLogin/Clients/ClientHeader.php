<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <script src="../../Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../../Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="../../Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../Styles/AfterLoginStyle.css" rel="stylesheet" type="text/css"/>
        <script src="../../Styles/popper-1.14.0.min.js" type="text/javascript"></script>

        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $con = mysqli_connect('localhost', 'root', '', 'epwm');
        $userClient = $_SESSION['login_client'];
        if (!$userClient) {
            printf("<script>location.href='../../BeforeLogin/logIn.php'</script>");
        }
        ?>

        <div id="wrapper" class="animate">
            <nav class="navbar header-top fixed-top navbar-expand-lg navbar-light bg-lignt">
                <span class="navbar-toggler-icon leftmenutrigger"></span>
                <a class="navbar-brand" href="#"><img src="../../Images/logo.png" alt=""/>GetLance</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav animate side-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Edit Account
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Take a Leave</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bank Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Take a Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Your Resume</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="Projects and Contests.php">My Projects
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Find GetLancers.php">Find GetLancers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Payments</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="Payments.php">Pay to GetLancer</a>
                                <a class="dropdown-item" href="Payment History.php">Past Payments</a>
                            </div>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="Notes and Reminders.php">
                                <img src="../../Images/notification (1).png" alt=""/>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <img src="../../Images/edit-profile.png" alt=""/>
                                <?php
                                $con = mysqli_connect('localhost', 'root', '', 'epwm');
                                $res = mysqli_query($con, "select * from clientmaster where client_email='$userClient'");
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo $row['client_name'];
                                    $client_id = $row['client_id'];
                                    $client_name = $row['client_name'];
                                }
                                ?>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="Your Profile.php">Profile</a>
                                <a class="dropdown-item" href="Bank Details.php">Bank Details</a>
                                <a class="dropdown-item" href="clientSession.php">Logout</a>
                            </div>
                        </li> 
                    </ul>
                </div>
            </nav>
        </div>
        <script>
            $(document).ready(function () {
                $('.leftmenutrigger').on('click', function (e) {
                    $('.side-nav').toggleClass("open");
                    e.preventDefault();
                });
            });
        </script>
        <div class="container-fluid below-emp-dashboard">
            <div class="below-dashboard-content">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo basename($_SERVER['PHP_SELF'], ".php");
                        ?>
                    </div>
                    <div class="col-md-6">
                        <button type="button" onclick="document.location.href = 'Post a Project.php'" class="btnPostProject">Post Project</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="open-button" onclick="openForm()"><h6>Chat with GetLancer</h6></button>

        <div class="chat-popup" id="myForm">
            <form method="post" class="form-container">

                <label for="msg"><b>Select your Client using Project ID</b></label>
                <select class="form-control" name="projectId">
                    <option class="hidden"  selected disabled>Select your project</option>
                    <?php
                    $sql = mysqli_query($con, "select * from current_working_projects where client_id='$client_id'");
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $cId = $row['client_id'];
                        $cName = $row['client_name'];
                        echo "<option value={$row['project_id']}> Project ID : {$row['project_id']} - {$row['project_name']}</option>";
                    }
                    ?>
                </select><br/>

                <label for="msg"><b>Chat with GetLance</b></label>
                <textarea placeholder="Type your message here.." name="msg" required></textarea>

                <input type="submit" class="btn chatSend" name="btnSendMsg"  value="Send"/>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
        <?php
        if (isset($_POST['btnSendMsg'])) {
            $pId = $_REQUEST['projectId'];
            $msg = $_REQUEST['msg'];
            $employeeName = mysqli_query($con, "select * from current_working_projects where project_id='$pId'");
            while ($row = mysqli_fetch_assoc($employeeName)) {
                $eId = $row['employee_id'];
                $eName = $row['employee_name'];
            }
            $status = "CtoE";
            $sendMsg = mysqli_query($con, "insert into notes_master values('$pId','$eId','$eName','$cId','$cName','$msg','$status','','')");
            if ($sendMsg) {
                echo "<script>alert('Your message has been sent')</script>";
                printf("<script>location.href='Projects and Contests.php'</script>");
            } else {
                echo "<script>alert('There might be some error')</script>";
            }
        }
        ?>
        <button onclick="topFunction()" id="myBtn" title="Go to top">&#x5e;</button>
        <script>
// When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

// When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                $('html, body').animate({scrollTop:0}, 'slow');
            }
        </script>

    </body>
</html>
