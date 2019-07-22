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
        <style>
            @media print {
                body * {
                    visibility: hidden;
                }
                #section-to-print, #section-to-print * {
                    visibility: visible;
                }
                #section-to-print {
                    position: absolute;
                    left: 70px;
                    top: 20px;
                }
            }
        </style>
    </head>
    <body style="background: #eee;">
        <?php
        include 'clientHeader.php';
        
        ?>
        <div class="container invoice">
            <div id="section-to-print">
                <div class="invoice-head">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>INVOICE</h2>
                        </div>
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <?php 
                                    $tId=$_SESSION['tId'];
                                    $date= date("Y-m-d");
                                    $transactionData= mysqli_query($con, "select * from payment_master where transaction_id='$tId'");
                                    while ($row=mysqli_fetch_assoc($transactionData)){
                                        
                                ?>
                                <div class="col-md-12"><h6>ID : <?php echo $tId; ?></h6></div>
                                <div class="col-md-12"><h6>Date : <?php echo $date; ?></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-content">
                    <div class="row">
                        <div class="col-md-6">
                            <label>From</label>
                            <h6><?php echo $row['client_name']; ?></h6>
                        </div>
                        <div class="col-md-6">
                            <label>To</label>
                            <h6><?php echo $row['employee_name']; ?></h6>
                        </div>
                        <div class="col-md-6">
                            <label>Payment For</label>
                            <h6>Job Name (Web Development)</h6>
                        </div>
                        <div class="col-md-6">
                            <label>Total Amount</label>
                            <h6><?php echo $row['amount']; ?></h6>
                        </div>
                        <div class="col-md-6">
                            <label>Description</label>
                            <h6>This is an electronic payment invoice.</h6>
                        </div>
                    </div>
                </div>
            </div>
                                    <?php } ?>
            <div class="container invoice-btn">
                <button onclick="window.print();" class="btnInvoiceDown"> DOWNLOAD INVOICE </button>
            </div>
        </div>
        
    </body>
</html>
