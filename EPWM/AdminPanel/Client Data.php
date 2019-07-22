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
        $sql = mysqli_query($con, "select * from clientmaster");
         while ($row = mysqli_fetch_assoc($sql)) {
             $client_name=$row['client_name'];         }
        ?>
        <div class="container bank-form">
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
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $sql = mysqli_query($con, "select * from clientmaster");
                            while ($row = mysqli_fetch_assoc($sql)) {
                                echo "<tr>";
                                echo "<td>" . $row['client_id'] . "</td>";
                                echo "<td>" . $row['client_name'] . "</td>";
                                echo "<td>" . $row['client_email'] . "</td>";
                                echo "<td>" . $row['client_phone'] . "</td>";
                                ?><td><form method="post">
                                    <input type="submit" name="btnClientData" value="Delete">
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
        if(isset($_POST['btnClientData']))
        {
        $query = "DELETE FROM clientmaster WHERE client_name='$client_name'";
        mysqli_query($con,$query);
         printf("<script>location.href='Client Data.php'</script>");
        }
        ?>
        <?php
       // include 'footer.php';
        ?>
    </body>
</html>
