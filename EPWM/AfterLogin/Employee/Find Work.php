<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'EmployeeHeader.php';
        ?>
       <div class="container search-jobs">
            <div class="row">
                <div class="col-md-3 search-right">
                    <div class="row">
                        <div class="search-head">
                            <h5>Filter Jobs</h5>
                        </div>
                        <div class="search-links">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="search-box" placeholder="search.."/>
                                </div>
                                <div class="col-md-2">
                                    <input type="image" class="search-btn" name="search-btn" src="../../Images/Search.png"/>
                                </div>
                            </div>
                            <div class="row skill-category">
                                <h6>What work do you require?</h6>
                                <select name="skills[]" multiple="multiple" class="form-control" style="height: 200px;">
                                    <option class="hidden"  selected disabled>Please select your profession</option>
                                    <option disabled>Designers</option>
                                    <option>Adobe Designers</option>
                                    <option>Android Designers</option>
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
                        </div>
                    </div>
                </div>
                <div class="col-md-9 search-left">
                    <form method="get">
                        <?php
                        $sql = mysqli_query($con, "select * from projectmaster");
                        while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                            <div class="card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3 class="card-title"><?php echo $row['proj_name']; ?></h3>
                                        </div>
                                        <div class="col-md-3">
                                            <?php echo "<a class='knw-btn' href='Find Work.php?id={$row['project_id']}'>Know More</a>"; ?>
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle"><?php echo $row['proj_skills']; ?></h6>
                                    <p class="card-text"><?php echo $row['proj_detail']; ?></p>
                                    <h6 class="card-subtitle"><?php echo $row['proj_amount']." ".$row['currency_type'] ?></h6>
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
            if(isset($_GET['id'])){
                $getId=$_GET['id'];
                $_SESSION['project_id']=$getId;
                 printf("<script>location.href='Project Details.php'</script>");
               
            }
        ?>
        <?php
        include '../Footer.php';
        ?>
    </body>
</html>
