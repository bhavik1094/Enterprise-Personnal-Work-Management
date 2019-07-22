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
        <script src="../Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="../Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <script src="../Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="../Styles/AdminPanelStyle.css" rel="stylesheet" type="text/css"/>
        <link href="../Styles/AfterLoginStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
       session_start();
       $con= mysqli_connect('localhost', 'root', '', 'epwm');
       $admin_session=$_SESSION['login_admin'];
       if(!$admin_session){
            printf("<script>location.href='../BeforeLogin/adminLogin.php'</script>");
       }
        ?>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#">GetLance</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Feedbacks.php">Feedbacks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vacancies</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Users</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="Client Data.php">Clients</a>
                            <a class="dropdown-item" href="Employee Data.php">Employees</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Salary</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Past Earnings</a>
                            <a class="dropdown-item" href="#">Pending Salary</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <img/>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <?php
                                $res=mysqli_query($con,"select * from adminmaster where admin_id='$admin_session'");
                                
                                while($row= mysqli_fetch_assoc($res))
                                {
                                    echo $row['admin_id'];
                                }
                            ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="Change Password.php">Change Password</a>
                            <a class="dropdown-item" href="AdminSession.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </body>
</html>
