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
        <div class="container-fluid payment">
            <div class="payment-head">
                <h4>Letter of Recommendation</h4>
                <h6>Praise your GetLancer by writing a reference letter or letter of recommendation.</h6>
            </div>
        </div>
        <div class="container letter-recom">
            <div class="lor-content">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Title Prefix</h6>
                        <select class="form-control inline">
                            <option>Mr.</option>
                            <option>Mrs.</option>
                            <option>Miss</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <h6>Who is this recommendation about?</h6>
                        <select class="form-control inline">
                            <option>GetLancer</option>
                            <option>Name 1</option>
                            <option>Name 2</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>What will be the recommendation used for?</h6>
                        <p>Eg. I would like to recommend John Doe as a candidate for a position with your organization.</p>
                        <textarea name="details1" class="form-control" placeholder="" required="" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <div class="col-md-6">
                        <h6>How do you know him/her?</h6>
                        <p>Eg. I have been John's direct superior in the controlling department. During this time he worked as an intern, he was a member of my project to.</p>
                        <textarea name="details2" class="form-control" placeholder="" required="" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6">
                        <h6>What will be the recommendation used for?</h6>
                        <p>Eg. I would like to recommend John Doe as a candidate for a position with your organization.</p>
                        <textarea name="details1" class="form-control" placeholder="" required="" style="width: 100%; height: 150px;"></textarea>
                    </div>
                    <div class="col-md-6">
                        <h6>How do you know him/her?</h6>
                        <p>Eg. I have been John's direct superior in the controlling department. During this time he worked as an intern, he was a member of my project to.</p>
                        <textarea name="details2" class="form-control" placeholder="" required="" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>



            </div>
        </div>
    </body>
</html>
