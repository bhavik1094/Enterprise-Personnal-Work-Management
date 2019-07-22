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
            <p><span>Note :</span> Create your Resume with GetLance in just 4 easy steps. To know more ways to make your Resume effective 
                <a href="#" class="resume-modal" data-toggle="modal" data-target="#myModal">
                    Click Here
                </a>.</p>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog model-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tips on Effective Resume</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>Get Your Contact Information & Personal Details Right</li>
                                <li>Introduce Your Resume with a Heading Statement</li>
                                <li>Detail Your Work Experience on a Resume</li>
                                <li>List Education Correctly on a Resume</li>
                                <li>Put Relevant Skills on the Resume</li>
                                <li>Include Other Important Projects on the Resume</li>
                                <li>Complement Your Resume With a Cover Letter</li>
                                <li>Wrap It Up Nicely - Proofread & double-check</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btnResumeClose" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post">
                <div id="accordion" class="resume-accordian">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Personal Details
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="resumeName" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="resumeEmail" class="form-control" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="resumePhone" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="resumeCity" class="form-control" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Educational Details
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <h6>Post Graduation Details</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" name="resumePostDegree" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>College/Institute</label>
                                            <input type="text" name="resumePostDegree" class="form-control" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Year</label>
                                            <input type="date" name="resumePostStart" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>End Year</label>
                                            <input type="date" name="resumePostEnd" class="form-control" value=""/>
                                        </div>
                                    </div>
                                </div>
                                <h6>Graduation Details</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" name="resumeDegree" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>College/Institute</label>
                                            <input type="text" name="resumeDegree" class="form-control" value=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Year</label>
                                            <input type="date" name="resumeStart" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>End Year</label>
                                            <input type="date" name="resumeEnd" class="form-control" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Work Experience
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Work Title</label>
                                            <input type="text" name="resumeWorkTitle" class="form-control" value=""/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="resumeEmail" class="form-control" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                Skills
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                Projects
                            </a>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                Web Profile
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
