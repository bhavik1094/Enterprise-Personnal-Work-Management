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
        <div class="container transaction notes">
            <div class="row transaction-head">
                <div class="col-md-6">
                    <ul class="nav nav-pills transaction-pills bookmark-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#home">All Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">Bookmarks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu2">Sent Messages</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for notes..">
                </div>
            </div>
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <div class="table-responsive">
                        <form method="get">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $sql = mysqli_query($con, "select * from notes_master where status='CtoE' and emp_id='$employeeId'");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['project_id'] . "</td>";
                                        echo "<td>" . $row['client_id'] . "</td>";
                                        echo "<td>" . $row['client_name'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
                                        echo "<td><a class='noteBook' href='Notes and Reminders.php?id={$row['message']}'>&#9733;</a></td>";
                                        echo "<td><a class='noteCross' href='Notes and Reminders.php?id2={$row['message']}'>&#x00D7;</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                        <?php
                        if (isset($_GET['id'])) {
                            $add = $_GET['id'];
                            $bookmark = "Yes";
                            $addBookmark = mysqli_query($con, "update notes_master set bookmark='$bookmark' where message='$add'");
                            if ($addBookmark) {
                                echo "<script>alert('Your message is bookmarked')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            } else {
                                echo "<script>alert('There might be some error')</script>";
                            }
                        }
                        if (isset($_GET['id2'])) {
                            $del = $_GET['id2'];
                            $bookmark = "No";
                            $delBookmark = mysqli_query($con, "delete from notes_master where message='$del'");
                            if ($delBookmark) {
                                echo "<script>alert('Your message is Deleted')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            } else {
                                echo "<script>alert('There might be some error')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            }
                        }
                        ?>
                    </div>
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
                    <div class="table-responsive">
                        <form method="get">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $sql = mysqli_query($con, "select * from notes_master where status='CtoE' and bookmark='Yes' and emp_id='$employeeId'");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $note_proj_id = $row['project_id'];
                                        echo "<tr>";
                                        echo "<td>" . $row['project_id'] . "</td>";
                                        echo "<td>" . $row['client_id'] . "</td>";
                                        echo "<td>" . $row['client_name'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
                                        echo "<td><a class='noteImp' href='Notes and Reminders.php?id3={$row['message']}'>&#x21;</a></td>";
                                        echo "<td><a class='noteDel' href='Notes and Reminders.php?id4={$row['message']}'>&#x00D7;</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                        <?php
                        if (isset($_GET['id3'])) {
                            $add = $_GET['id3'];
                            $imp = "Yes";
                            $con = mysqli_connect('localhost', 'root', '', 'epwm');
                            $sql = mysqli_query($con, "select important from notes_master where important='Yes'");
                            $total = mysqli_num_rows($sql);
                            if ($total <= 4) {
                                $addImportant = mysqli_query($con, "update notes_master set important='$imp' where message='$add'");
                                if ($addImportant) {
                                    echo "<script>alert('Your message is marked to be important')</script>";
                                    printf("<script>location.href='Notes and Reminders.php'</script>");
                                } else {
                                    echo "<script>alert('There might be some error')</script>";
                                    printf("<script>location.href='Notes and Reminders.php'</script>");
                                }
                            } else {
                                echo "<script>alert('More the 5 important is not allowed, Please unmarked and then try')</script>";
                            }
                        }
                        if (isset($_GET['id4'])) {
                            $del = $_GET['id4'];
                            $bookmark = "No";
                            $imp = "No";
                            $delBookmark = mysqli_query($con, "update notes_master set bookmark='$bookmark', important='$imp' where message='$del'");
                            if ($delBookmark) {
                                echo "<script>alert('Your message is Unmarked')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            } else {
                                echo "<script>alert('There might be some error')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            }
                        }
                        ?>
                    </div>
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
                <div id="menu2" class="container tab-pane fade">
                    <div class="table-responsive">
                        <form method="get">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Client ID</th>
                                        <th>Client Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $sql = mysqli_query($con, "select * from notes_master where status='EtoC' and emp_id='$employeeId'");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $note_proj_id = $row['project_id'];
                                        echo "<tr>";
                                        echo "<td>" . $row['project_id'] . "</td>";
                                        echo "<td>" . $row['client_id'] . "</td>";
                                        echo "<td>" . $row['client_name'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
                                        echo "<td><a class='noteCross' href='Notes and Reminders.php?id5={$row['message']}'>&#x00D7;</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                        <?php
                        if (isset($_GET['id5'])) {
                            $del = $_GET['id5'];
                            $delBookmark = mysqli_query($con, "delete from notes_master where message='$del'");
                            if ($delBookmark) {
                                echo "<script>alert('Your message is Deleted')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            } else {
                                echo "<script>alert('There might be some error')</script>";
                                printf("<script>location.href='Notes and Reminders.php'</script>");
                            }
                        }
                        ?>
                    </div>
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
            </div>
        </div>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
