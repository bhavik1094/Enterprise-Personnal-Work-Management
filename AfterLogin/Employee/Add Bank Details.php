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
                <h3>Add Bank Details</h3>
                <div class="bank-form-content">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="bankName" class="form-control">
                                        <option class="hidden" selected disabled>Please select your Bank</option>
                                        <option>Allahabad Bank</option>
                                        <option>Andhra Bank</option>
                                        <option>Axis Bank</option>
                                        <option>Bank of Baroda</option>
                                        <option>Bank of India</option>
                                        <option>Canara Bank</option>
                                        <option>Central Bank of India</option>
                                        <option>City Union Bank</option>
                                        <option>Corporation Bank</option>
                                        <option>Dena Bank</option>
                                        <option>Dhanlaxmi Bank</option>
                                        <option>Federal Bank</option>
                                        <option>ICICI Bank</option>
                                        <option>IDBI Bank</option>
                                        <option>Indian Bank</option>
                                        <option>IndusInd Bank</option>
                                        <option>Jammu and Kashmir Bank</option>
                                        <option>Karnataka Bank</option>
                                        <option>Kotak Bank</option>
                                        <option>Laxmi Vilas Bank</option>
                                        <option>Oriental Bank of India</option>
                                        <option>Punjab National Bank</option>
                                        <option>South Indian Bank</option>
                                        <option>State Bank of India</option>
                                        <option>Syndicate Bank</option>
                                        <option>Tamilnad Mercantile Bank Ltd.</option>
                                        <option>UCO Bank</option>
                                        <option>Union Bank</option>
                                        <option>Vijaya Bank</option>
                                        <option>Yes Bank</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="bankIfsc" class="form-control" placeholder="Bank IFSC Code *" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="empName" class="form-control" placeholder="Your Name in Bank *" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="bankAccountNo" class="form-control" placeholder="Bank Account Number *" value=""/>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btnBankSubmit" name="btnLeaveSubmit"/>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $sessionEmail = $_SESSION['login_employee'];
        if (isset($_POST['btnLeaveSubmit'])) {
            $bankName = $_REQUEST['bankName'];
            $bankIFSC = $_REQUEST['bankIfsc'];
            $bankEmpName = $_REQUEST['empName'];
            $bankAccNo = $_REQUEST['bankAccountNo'];
            $person_type="Employee";
            
            $res = mysqli_query($con, "select emp_id from employeemaster where emp_email='$user'");

            while ($row = mysqli_fetch_assoc($res)) {
                $empLeaveId = $row['emp_id'];
            }
                    $sql = mysqli_query($con, "insert into bank_details values ('$empLeaveId','$bankName','$bankIFSC','$bankEmpName','$bankAccNo','$person_type')");
                    if ($sql) {
                        echo "<script>alert('Your Data Successfully Submitted')</script>";
                        printf("<script>location.href='Bank Details.php'</script>");
                    } else {
                        echo "<script>alert('You might be entered wrong Information')</script>";
                    }
            }
        ?>
        <?php
        include '../Footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>
