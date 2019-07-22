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
         <div class="container bank-form">
            <div class="row">
                <div class="col-md-12">
                    <h3>Past Payments</h3>
                    <table class="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Project ID</th>
                                <th>Employee Name</th>
                                <th>Amount </th>
                                <th>Payment Mode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = mysqli_query($con, "select * from payment_master where client_id='$client_id'");
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['transaction_id'] . "</td>";
                                echo "<td>" . $row['project_id'] . "</td>";
                                echo "<td>" . $row['employee_name'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "<td>" . $row['payment_mode'] . "</td>";
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
