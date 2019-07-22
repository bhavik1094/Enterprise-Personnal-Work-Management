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
        include 'clientHeader.php';
        ?>

        <div class="container-fluid changePwd postProjectContainer">
            <h1>Tell us what you need done</h1>
            <p>Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</p>
        </div>
        <div class="pwdForm postProjectForm">
            <form method="post">
                <div class="form-group">
                    <h5>Choose a name for your Project</h5>
                    <input type="text" name="projName" class="form-control"/>
                </div>
                <div class="form-group">
                    <h5>Tell us more about your project</h5>
                    <p>Start with a bit about yourself or your business, and include an overview of what you need done.</p>
                    <textarea name="projDetails" class="form-control" style="width: 100%; height: 150px;"  required=""></textarea>
                </div>
                <div class="form-group">
                    <h5>What type of Skills do you need for your Project?</h5>
                    <select name="skills[]" multiple="multiple" class="form-control" style="height: 200px;">
                        <option class="hidden"  selected disabled>Please select your profession</option>
                        <option disabled>Designers</option>
                        <option>Adobe Designers</option>
                        <option>Anroid Designers</option>
                        <option>Art Direction Experts</option>
                        <option>Brand/ Logo/ Icon Designers</option>
                        <option>Creative Designers</option>
                        <option>Digital Designers</option>
                        <option>E-Commerce Website Designers</option>
                        <option>Graphic Designers</option>
                        <option>Interactive Designers</option>
                        <option>Photoshop Experts</option>
                        <option>Responsive Design Experts</option>
                        <option>SOS Designers</option>
                        <option>Sketch Experts</option>
                        <option>Typography Experts</option>
                        <option>Web Designers</option>
                        <option>Wordpress Designers</option>

                        <option disabled></option>
                        <option disabled>Developers</option>
                        <option>Angular JS Developers</option>
                        <option>Anroid Developers</option>
                        <option>Asp.Net Developers</option>
                        <option>C/C++ Developers</option>
                        <option>Doupal Developers</option>
                        <option>Facebook API Developers</option>
                        <option>IOS Developers</option>
                        <option>JAVA Developers</option>
                        <option>Magento Developers</option>
                        <option>Microsoft Developers</option>
                        <option>Wordpress Developers</option>
                        <option>Google API Developers</option>
                        <option>Hadoop Developers</option>
                        <option>Laravel Developers</option>
                        <option>PHP Developers</option>
                        <option>Mysql Developers</option>
                        <option>Windows Application</option>
                        <option>Javascript/Jquery/Node.js/React.js Developers</option>

                        <option disabled></option>
                        <option disabled>Finance Experts</option>
                        <option>Budgeting Consultants</option>
                        <option>Business Consultants</option>
                        <option>Data Analyst</option>
                        <option>Finance Consultants</option>
                        <option>Excel Experts</option>
                        <option>Financial Modeling Consultants</option>
                        <option>Investment Bankers</option>
                        <option>Market Research Analyst</option>
                        <option>Fundraising Consultants</option>
                        <option>Start up Fundraising Consultants</option>

                        <option disabled></option>
                        <option disabled>Writer</option>
                        <option>Website Content</option>
                        <option>Blogger / Article</option>
                        <option>Company Profile</option>
                        <option>CV and Cover Letter</option>
                        <option>Novel Writer</option>
                        <option>E-Book</option>
                        <option>Copy Writing</option>
                        <option>Email & News Letter</option>
                        <option>Editing & Proof Reading</option>
                        <option>Script Writing</option>

                        <option disabled></option>
                        <option disabled>Sales and Marketing</option>
                        <option>Display Advertising</option>
                        <option>Offline Marketing</option>
                        <option>Email Marketing</option>
                        <option>Press & Media Relations</option>
                        <option>General Communication</option>
                        <option>Telemarketing</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" name="startDate" class="form-control" value=""/>
                    <label>End Date</label>
                    <input type="date" name="endDate" class="form-control" value=""/>
                </div>

                <h5>Choose your Project type and how much you can spend on it</h5>
                <div class="form-group form-inline">
                    <div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" value="Hourly">Hourly
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" value="Fixed">Fixed
                            </label>
                        </div>
                    </div>
                    <div>
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

                    <input type="text" name="amount"  class="form-control"/>
                </div>
                <input type="submit" name="btnPostProject" value="Submit Project" class="btnSubmitProject"/>
            </form>
        </div>


        <?php
        if (isset($_POST['btnPostProject'])) {
            $project_id= rand(100000, 300000);
            $projectTitle = $_REQUEST['projName'];
            $projectDetails = $_REQUEST['projDetails'];
            $projType = $_REQUEST['optradio'];
            $currencyType = $_REQUEST['opHrRate'];
            $amount = $_REQUEST['amount'];
            $startDate=$_REQUEST['startDate'];
            $endDate=$_REQUEST['endDate'];
            
            $skills2 = "";
            foreach ($_REQUEST['skills'] as $skills) {
                $skills2 .= $skills . "   ";
            }
            $posted_date= date("Y-m-d");
            $postProject = mysqli_query($con, "insert into projectmaster values('$client_id','$project_id','$client_name','$startDate','$endDate','$projectTitle','$projectDetails','$skills2','$projType','$currencyType','$amount','$posted_date')");
            if ($postProject) {
                echo "<script>alert('Your Project is Posted')</script>";
                printf("<script>location.href='Post a Project.php'</script>");
            } else {
                echo "<script>alert('There might be some error')</script>";
            }
        }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
