<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <title></title>
        <script lang="javascript/text">
            function validateEmail(emailField) {
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                if (reg.test(emailField.value) == false)
                {
                    alert('Invalid Email Address');
                    return false;
                }

                return true;

            }
            function validateName(nameField) {
                var reg = /^([A-Za-z])+$/;

                if (reg.test(nameField.value) == false)
                {
                    alert('Invalid name');
                    return false;
                }
               focus();
                return true;

            }
            function validatePhone(phoneField) {
                var reg = /^(\d{10})+$/;
                if (reg.test(phoneField.value) == false)
                {
                    alert('Invalid phone');
                }
                return true;
            }
            function pass()
            {
                var ptrnid, txtid;
                ptrnid = /^([A-Za-z0-9])+$/;
                txtid = document.getElementById('pass1').value;
                
                if (!txtid.match(ptrnid))
                {
                    alert('pass not match');
                    document.getElementById('pass1').focus();
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <?php
//  include 'EmployeeHeader.php';
        ?>
        <form method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtEmpFname" class="form-control" onchange="validateName(this);" placeholder="Name *" required="" value="" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="txtEmpPwd" class="form-control" onchange="validateEmail(this);" placeholder="Email *" required="" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" class="form-control" onchange="validatePhone(this);"  placeholder="Phone *" required="" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="phone" id="pass1" class="form-control" onchange="pass();"  placeholder="pass1 *" required="" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="phone" id="pass2" class="form-control"  placeholder="pass2 *" required="" value="" />
                    </div>
                    <input type="submit" name="btnAddDetails" class="btnRegister"  value="Register"/>
                </div>
            </div>
        </form>

    </body>
</html>
