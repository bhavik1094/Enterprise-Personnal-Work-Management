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

        <div class="container after-login-employee">
            <div class="bank-form">
                <h3>Application for Leave</h3>
                <div class="bank-form-content">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Leave Title</label>
                                    <input type="text" name="leaveTitle" class="form-control" value=""/>
                                </div>
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" name="startDate" class="form-control" value=""/>
                                </div>
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" name="endDate" class="form-control" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select Working Project</label>
                                        <select name="project" class="form-control">
                                            <option class="hidden" selected disabled>Please select your current project</option>
                                            <?php
                                                $con= mysqli_connect('localhost', 'root', '', 'epwm');
                                                $sql= mysqli_query($con, "select client_proj_title from clientmaster");
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 160px;"></textarea>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btnBankSubmit" name="btnBankSubmit" value="Edit Your Profile"/>
                    </form>
                </div>
            </div>
        </div>
        <?php  
            if(isset($_POST['btnBankSubmit'])){
                $res= mysqli_query($con, "select * from employeemaster");
                while($row= mysqli_fetch_assoc($res)){
                    $empid=$row['emp_id'];
                }
                $leave_title=$_REQUEST[''];
                $start_date=$_REQUEST[''];
                $end_date=$_REQUEST[''];
                
            }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
