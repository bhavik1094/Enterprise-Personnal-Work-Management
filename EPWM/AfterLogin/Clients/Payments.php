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
    <body style="background: #eee;">
        <?php
        include 'clientHeader.php';
        ?>
        <div class="container-fluid payment">
            <div class="payment-head">
                <h4>Recurring Payment</h4>
                <h6>Set up payment for your working GetLancer and inform them about the payment.</h6>
            </div>
        </div>
        <div class="container payment-content">
            <form method="post">
                <div class="pay-head">
                    <div class="row">
                        <div class="col-md-9">
                            <h6>Please select GetLancer to view Bank Details.</h6>
                            <select name="employeeName" class="form-control" required="">
                                <option class="hidden" selected disabled>Select Employee</option>
                                <?php
                                $sql = mysqli_query($con, "select * from completed_project_master where client_id='$client_id'");
                                while ($row = mysqli_fetch_array($sql)) {
                                    $emp_id = $row['employee_id'];
                                    $emp_name = $row['employee_name'];
                                    $projId = $row['project_id'];
                                    echo "<option value={$row['employee_name']}> Employee ID : {$row['employee_id']} - {$row['employee_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <br/>
                            <input type="submit" name="btnDetails" class="btnPayDetails" value="Get Details"/>
                        </div>
                    </div>


                </div>

                <div class="pay-head">
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Payment In</h6>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="opHrRate" value="USD">USD
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="opHrRate" value="INR">INR
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <h6>Enter Amount</h6>
                                <input type="text" name="amount" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h6>Mode of Payment</h6>
                                <select name="paymentMode" class="form-control" required="">
                                    <option class="hidden" selected disabled="">Select Your payment mode</option>
                                    <option>Credit Card</option>
                                    <option>Debit Card</option>
                                    <option>Bank Transfer</option>
                                    <option>Mobile Payments</option>
                                    <option>E-Check</option>
                                    <option>PayPal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php
            if (isset($_POST['btnDetails'])) {
                $employeeName = $_REQUEST['employeeName'];
                $sql = mysqli_query($con, "select emp_id from employeemaster where emp_id='$emp_id'");
                while ($row = mysqli_fetch_array($sql)) {
                    $eId = $row['emp_id'];
                }
                $data = mysqli_query($con, "select * from bank_details where id='$eId'");
                while ($row = mysqli_fetch_array($data)) {
                    ?>
            
                 <div class="pay-content">
                        <div class="row">
                            <div class="col-md-6">
                                <p>GetLancer ID</p>
                                <h6><?php echo $emp_id; ?></h6>
                            </div>
                            <div class="col-md-6">
                                <p>GetLancer Name</p>
                                <h6><?php echo $emp_name; ?></h6>
                            </div>
                            <div class="col-md-6">
                                <p>Bank Name</p>
                                <h6><?php echo $row['bank_name']; ?></h6>
                            </div>
                            <div class="col-md-6">
                                <p>Bank IFSC</p>
                                <h6><?php echo $row['bank_ifsc']; ?></h6>
                            </div>
                            <div class="col-md-6">
                                <p>GetLancer Bank Name</p>
                                <h6><?php echo $row['person_bank_name']; ?></h6>
                            </div>
                            <div class="col-md-6">
                                <p>Account Number</p>
                                <h6><?php echo $row['bank_acc_no']; ?></h6>
                            </div>
                        </div>
                    <?php } ?>
                    <input type="submit" name="btnPayment" class="btnPay" value="Complete Payment"/>

                </div>
            <?php } ?>
            </form>
                   
        </div>
        <?php
        if (isset($_POST['btnPayment'])) {
            $amount = $_REQUEST['amount'] . " " . $_REQUEST['opHrRate'];
            $paymentMode = $_REQUEST['paymentMode'];
            $transaction_id = rand(3000, 6000);
            $_SESSION['tId']=$transaction_id;
            $payment = mysqli_query($con, "insert into payment_master values('$transaction_id','$projId','$client_id','$client_name','$emp_id','$emp_name','$amount','$paymentMode')");
            if ($payment) {
                
                mysqli_query($con, "update completed_project_master set Payment='Successful' where project_id='$projId'");
//                echo "<script>alert('Your Payment Is Done')</script>";
                printf("<script>location.href='Payment Invoice.php'</script>");
            } else {
                echo "<script>alert('There might be some error')</script>";
            }
        }
        ?>
    </body>
</html>
