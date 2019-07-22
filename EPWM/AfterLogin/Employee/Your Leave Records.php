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
        $query = mysqli_query($con, "select * from employeemaster");
        while ($row = mysql_fetch_assoc($query)) {
            $employee = $row['emp_id'];
        }
        ?>
        <div class="leave-content">
            <div class="container bank-form">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Your Leave Records</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Leave Title</th>
                                    <th>Employer</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $pastLeave= mysqli_query($con, "select * from leavemaster");
                                    while($row = mysqli_fetch_array($pastLeave)){
                                        echo "<tr>";
                                        echo "<td>".$row['leave_title']."</td>";
                                        echo "<td>"."Kshiti Ghelani"."</td>";
                                        echo "<td>".$row['start_date']."</td>";
                                        echo "<td>".$row['end_date']."</td>";
                                        echo "<td>".$row['status']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php
        ?>
        <?php
        include 'Footer.php';
        ?>
    </body>
</html>
