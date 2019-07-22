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
        include 'AdminHeader.php';
        $con = mysqli_connect('localhost', 'root', '', 'epwm');
        $sql = mysqli_query($con, "select * from employeemaster");
         while ($row = mysqli_fetch_assoc($sql)) {
             $emp_name=$row['emp_name'];         }
        ?>
        <div class="container-fluid bank-form">
            <div class="row">
                <div class="col-md-12">
                    <h3>Employee of GetLance</h3>
                    <table class="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Profession</th>
                                <th>Experience</th>
                                <th>Hourly Rate</th>
                                <th>Total Projects</th>
                                <th>Proficiency Level</th>
                                <th>Availability</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = mysqli_query($con, "select * from employeemaster");
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['emp_id'] . "</td>";
                                echo "<td>" . $row['emp_name'] . "</td>";
                                echo "<td>" . $row['emp_email'] . "</td>";
                                echo "<td>" . $row['emp_phone'] . "</td>";
                                echo "<td>" . $row['emp_gender'] . "</td>";
                                echo "<td>" . $row['emp_prof'] . "</td>";
                                echo "<td>" . $row['emp_exp'] . "</td>";
                                echo "<td>" . $row['emp_rate'] . "</td>";
                                echo "<td>" . $row['emp_tot_proj'] . "</td>";
                                echo "<td>" . $row['emp_eng_level'] . "</td>";
                                echo "<td>" . $row['emp_avail'] . "</td>";
                                ?><td><form method="post">
                                    <input type="submit" name="btnEmployeeData" value="Delete">
                                </form></td>     <?php
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
        if(isset($_POST['btnEmployeeData']))
        {
        $query = "DELETE FROM employeemaster WHERE emp_name='$emp_name'";
        mysqli_query($con,$query);
         printf("<script>location.href=Employee Data.php'</script>");
        }
        ?>
        <?php
       // include 'footer.php';
        ?>
    </body>
</html>
