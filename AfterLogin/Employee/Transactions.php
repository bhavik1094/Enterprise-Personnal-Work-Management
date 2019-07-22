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
        ?>
        <div class="container transaction">
            <div class="row transaction-head">
                <div class="col-md-6">
                    <ul class="nav nav-pills transaction-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#home">Transaction History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">Pending Salary</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>
            </div>
            <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Project ID</th>
                                <th>Client Name</th>
                                <th>Payment Mode</th>
                                <th>Total Amount</th>                                   
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($con, "select * from payment_master where employee_id='$employeeId'");
                            while ($row = mysqli_fetch_array($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['transaction_id'] . "</td>";
                                echo "<td>" . $row['project_id'] . "</td>";
                                echo "<td>" . $row['client_name'] . "</td>";
                                echo "<td>" . $row['payment_mode'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $("#myInput").on("keyup", function () {
                                var value = $(this).val().toLowerCase();
                                $("#myTable tr").filter(function () {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                    </script>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Project Name</th>
                                <th>Client Name</th>
                                <th>Project End Date</th>
                            </tr>
                        </thead>
                       <tbody>
                            <?php
                            $sql = mysqli_query($con, "select * from completed_project_master where employee_id='$employeeId' and Payment='Not Done'");
                            while ($row = mysqli_fetch_array($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['project_id'] . "</td>";
                                echo "<td>" . $row['project_name'] . "</td>";
                                echo "<td>" . $row['client_name'] . "</td>";
                                echo "<td>" . $row['submitted_date'] . "</td>";
                                echo "<td>" ."Payment Pending". "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
