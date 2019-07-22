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
        include 'ClientHeader.php';
        ?>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'epwm');
        $sql = mysqli_query($con, "select client_id from clientmaster where client_email='$userClient'");
        while ($row = mysqli_fetch_assoc($sql)) {
            $clientId = $row['client_id'];
        }
        ?>
        <div class="container after-login-employee">
            <div class="bank-form">
                <h3>Your Bank Details</h3>
                <div class="bank-form-content">
                    <form method="post">
                        <div class="row">
                            <?php
                            $res = mysqli_query($con, "select * from bank_details where id='$clientId'");
                            $count= mysqli_num_rows($res);
                            if($count==1)
                            {
                            while ($row = mysqli_fetch_assoc($res)) {
                               
                                    $bankName = $row['bank_name'];
                                    $bankIfsc = $row['bank_ifsc'];
                                    $empBankName = $row['person_bank_name'];
                                    $accNo = $row['bank_acc_no'];
                            }
                                    ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name : <?php echo $empBankName; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Bank Name : <?php echo $bankName; ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>IFSC Code : <?php echo $bankIfsc; ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Account Number : <?php echo $accNo; ?></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btnBankSubmit" name="btnBankSubmit" value="Edit Bank Details"/>
                                <?php
                            } else {
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h5 style="margin-left: 110px">You don't Have Any Bank Account. To add Please Go to <a href="Add Bank Details.php">Add Bank Details</a> Page.</h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        
                        ?>

                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['btnBankSubmit'])) {
            ?>
            <div class="container after-login-employee">
                <div class="bank-form">
                    <div class="bank-form-content">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="bankEditName" class="form-control">
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
                                        <input type="text" name="bankEditIfsc" class="form-control" placeholder="" value="<?php echo $bankIfsc; ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="empEditName" class="form-control" placeholder="" value="<?php echo $empBankName; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="bankEditAccountNo" class="form-control" placeholder="" value="<?php echo $accNo; ?>"/>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btnBankSubmit" name="btnEditBankSubmit"/>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
        if (isset($_POST['btnEditBankSubmit'])) {
            $bankEditName = $_REQUEST['bankEditName'];
            $bankEditIfsc = $_REQUEST['bankEditIfsc'];
            $empEditBankName = $_REQUEST['empEditName'];
            $accEditNo = $_REQUEST['bankEditAccountNo'];
            
            $update = mysqli_query($con, "UPDATE bank_details SET bank_name='$bankEditName', bank_ifsc='$bankEditIfsc', person_bank_name='$empEditBankName', bank_acc_no='$accEditNo' where id='$clientId'");
            if ($update) {
                echo "<script>alert('You Have succesfully Updated Your Bank Details')</script>";
                 printf("<script>location.href='Bank Details.php'</script>");
            } else {
                echo "<script>alert('You might be entered wrong Information')</script>";
            }
        }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
