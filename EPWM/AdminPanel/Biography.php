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
        //require 'index.php';
        // put your code here
        ?>
        <div class="container-fluid admin-content">
            <div class="admin-about">
                <div class="panel panel-default">
                    <div class="panel-heading">About Bibiliography</div>
                    <div class="panel-body">
                      <textarea class="form-control rounded-0" id="aboutTextarea" rows="10" readonly>Hello</textarea>
                    <button type="button" id="aboutEdit" class="btn btn-default">Edit</button>
                    <button type="button" id="aboutUpdateBtn" class="btn btn-default" onclick="aboutUpdate()">Update</button>
                    <script>
                    document.getElementById('aboutEdit').onclick = function() {
                            document.getElementById('aboutTextarea').readOnly = false;
                        };
                    $().ready = function() {
                        $('#aboutUpdateBtn').hide();

                        $("#aboutEdit").click(function() {
                            $('#aboutUpdateBtn').toggle();
                        });

                    }();
                    function aboutUpdate() {
                            document.getElementById('aboutTextarea').readOnly = true;
                        }
                    </script>  
                    </div>
                </div>
            </div>
            <div class="admin-logo">
                <div class="panel panel-default">
                    <div class="panel-heading">Site Logo</div>
                    <div class="panel-body">
                        <label for="file-upload" class="logo-file-upload">
                          Choose Logo
                        </label>
                       <input  id="file-upload" type='file' onchange="readURL(this);" />
                       <div class="logo-img">
                           <img id="blah" src="#" alt="Place your logo here" />
                       </div>
                       <button type="button" id="logoUpdate" class="btn btn-default">Update</button>
                        <script>
                            function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah')
                                    .attr('src', e.target.result)
                                    .width(150)
                                    .height(200);
                            };

                            reader.readAsDataURL(input.files[0]);
                           }
                        }
                        </script>
                    </div>
                    <div class="panel-footer">Note: Please add an image of maximum dimension of 250 * 250 and minimum dimension 0f 80 * 80 for your logo.</div>
                </div>
            </div>  
            <div class="admin-contact">
                <div class="panel panel-default">
                    <div class="panel-heading">Site Contact Information</div>
                    <div class="panel-body">
                      <div class="form-group">
                        <label for="sitePhone">Phone</label>
                        <input type="text" class="form-control" id="sitePhone" readonly>
                      </div>
                      <div class="form-group">
                        <label for="siteEmail">Email</label>
                        <input type="text" class="form-control" id="siteEmail" readonly>
                      </div>
                      <div class="form-group">
                        <label for="siteFax">Fax</label>
                        <input type="text" class="form-control" id="siteFax" readonly>
                      </div>
                    <button type="button" id="contactEdit" class="btn btn-default">Edit</button>
                    <button type="button" id="contactUpdateBtn" class="btn btn-default" onclick="contactUpdate()">Update</button>
                    <script>
                    document.getElementById('contactEdit').onclick = function() {
                            document.getElementById('sitePhone').readOnly = false;
                            document.getElementById('siteEmail').readOnly = false;
                            document.getElementById('siteFax').readOnly = false;
                        };
                    $().ready = function() {
                        $('#contactUpdateBtn').hide();

                        $("#contactEdit").click(function() {
                            $('#contactUpdateBtn').toggle();
                        });

                    }();
                    function contactUpdate() {
                            document.getElementById('sitePhone').readOnly = true;
                            document.getElementById('siteEmail').readOnly = true;
                            document.getElementById('siteFax').readOnly = true;
                        }
                    </script>  
                    </div>
                </div>
            </div>
        </div>
        <?php
        //include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>
