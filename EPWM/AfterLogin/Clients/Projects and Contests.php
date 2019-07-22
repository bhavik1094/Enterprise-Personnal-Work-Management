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
        ?>
        <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                 <a class="nav-item nav-link active" id="nav-response-tab" data-toggle="tab" href="#nav-response" role="tab" aria-controls="nav-response" aria-selected="true">Project Response</a>
                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">Current Project</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Past Projects</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contests</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-response" role="tabpanel" aria-labelledby="nav-response-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project ID</th>
                                            <th>Project Name</th>
                                            <th>GetLancer Name</th>
                                            <th>Response date</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = mysqli_query($con, "select * from project_application_master where client_id='$client_id'");
                                        while ($row = mysqli_fetch_array($sql)) {
                                            $empId=$row['employee_id'];
                                            $projId=$row['project_id'];
                                            $_SESSION['emp_id']=$empId;
                                            $_SESSION['proj_id']=$projId;
                                            echo "<tr>";
                                            echo "<td>" . $row['project_id'] . "</td>";
                                            echo "<td>" . $row['project_name'] . "</td>";
                                            echo "<td>" . $row['employee_name'] . "</td>";
                                            echo "<td>" . $row['applied_date'] . "</td>";
                                            echo "<td>" . " " . "</td>";
                                            ?><td><form method="post">
                                            <button type="button" onclick="document.location.href='GetLancer Application Form.php'">View Application</button><br/>
                                        </form></td>     <?php
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project ID</th>
                                            <th>Project Name</th>
                                            <th>Start Dat</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = mysqli_query($con, "select * from current_working_projects where client_id='$client_id'");
                                        while ($row = mysqli_fetch_array($sql)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['project_id'] . "</td>";
                                            echo "<td>" . $row['project_name'] . "</td>";
                                            echo "<td>" . $row['start_date'] . "</td>";
                                            echo "<td>" . $row['end_date'] . "</td>";
                                            echo "<td style='color:#0062cc; font-weight:600'>&#9679; " . $row['status'] . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Project ID</th>
                                            <th>Project Name</th>
                                            <th>Employee</th>
                                            <th>Submitted Date</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <?php
                                        $sql = mysqli_query($con, "select * from completed_project_master where client_id='$client_id'");
                                        while ($row = mysqli_fetch_array($sql)) {
                                            $_SESSION['pid']=$row['project_id'];
                                            $_SESSION['eid']=$row['employee_id'];
                                            echo "<tr>";
                                            echo "<td>" . $row['project_id'] . "</td>";
                                            echo "<td>" . $row['project_name'] . "</td>";
                                            echo "<td>" . $row['employee_name'] . "</td>";
                                            echo "<td>" . $row['submitted_date'] . "</td>";
                                            ?><td><form method="post">
                                            <button type="button" onclick="document.location.href='Ratings and Awards.php'">Give Ratings</button><br/>
                                        </form></td>     <?php
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Contest Name</th>
                                            <th>Date</th>
                                            <th>Entries</th>
                                            <th>Employer</th>
                                            <th>Award Position</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">Work 1</a></td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 2</a></td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">Work 3</a></td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
