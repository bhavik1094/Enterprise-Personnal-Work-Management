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
        <div class="w-full mt-4 get-certified">
            <img src="Images/Get Certified.png" alt=""/>
            <button type="button" onclick="document.location.href='Test and Certifications.php'" class="btnCertifiedTest">Take Test Now</button>
            <div class="w-full certi-head">
                <p>Prove your credibility and win work 25% more often*</p>
            </div>
            <div class="w-full certi-feature">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-head">
                            <p>How an employer sees your bid:</p>
                        </div>
                        <div class="feature-content">
                            <ul>
                                <li>
                                    <h4>Improve your Bid Ranking</h4>
                                    <p>The Exams you pass will help improve your bid rank and your chances of being recommended to an employer</p>
                                </li>
                                <li>
                                    <h4>Exam badges shown in each of your bids</h4>
                                    <p>Employers can view your entire set of Exam badges.</p>
                                </li>
                                <li>
                                    <h4>Exam scores to showcase your skill</h4>
                                    <p>Employers can see your Exam results and how you compare against others.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 feature-image">
                        <img src="Images/job.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
