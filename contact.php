<?php include('contact_form_process.php'); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">    <meta name="description" content="Our Open Container Orchestration and Automation Platform helps organizations to become Hardware/OS/Vendor/Operation agnostic and achieve scalability & reliability.">
    <title>Open source Container Orchestration and Automation Platform | Synectiks.</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/4-Columns-Info-Icons.css">
    <link rel="stylesheet" href="assets/css/boot-menu.css">
    <link rel="stylesheet" href="assets/css/Central-Aligned-Clear-Nav.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/menu-header.css">
    <link rel="stylesheet" href="assets/css/menu-header1.css">
    <link rel="stylesheet" href="assets/css/multi-sections.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/page-bread.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom1.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/contact_form.css">
    <style>
        #map-canvas {
            width: 100%;
            height: 135px;
            margin-bottom: 15px;
            border: 2px solid #fff;
        }
        #fname,#lname,#email,#company,#phone,#day{
            width: 50em;
            padding: 1em 1em;
            margin-top: 1.5em;
        }

        #job{
            width: 38.5em;
            padding: 1em 1em;
            margin-top: 0.1em;
            margin-bottom: 9px;
        }

        #contact-submit{
            cursor:pointer;
            margin: 0em 3em;
        }
        .fa-angle-right:before {
            content: "\f105";
            position: relative;
            left: 4em;
        }
        #job-role{
            position: relative;
            top: -0.8em;
        }
        hr{
            width: 15em;
        }
    </style>
</head>

<div>
    <header>
        <div id="navbar">
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header" style="margin: 0 25em 0 8em;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://synectiks.com"><img src="assets/img/Synectikslogo.png"/></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav menu">


                        <li>
                            <a href="https://synectiks.com/solutions.html">Solutions </a>
                        </li>
                        <li id="solution-list" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu mega">
                                <!--                             <li class="kopie"><a href="#">Dropdown2</a></li> -->
                                <ul class="col-md-3 mega-drop block1">
                                    <li><a class="menu-bold-heading" href="#/">Cloud Services</a></li>
                                    <li><a href="#/">Managed AWS Cloud</a></li>
                                    <li><a href="#/">Managed Azure Cloud</a></li>
                                    <li><a href="#/">Cloud Migration & Strategy</a></li>
                                    <li><a href="#/">Hybrid, Colocation & Private Cloud</a></li>
                                    <!--<li><a href="#/">Cloud Readinesss Assesment</a></li>-->
                                </ul>
                                <ul class="col-md-3 mega-drop block2">
                                    <li><a class="menu-bold-heading" href="#/">Automation</a></li>

                                    <li><a href="#/">Devops</a></li>
                                    <li><a href="#/">Orchestration</a></li>

                                </ul>
                                <ul class="col-md-3 mega-drop block3">
                                    <li><a class="menu-bold-heading" href="#/">Business Application</a></li>
                                    <li><a href="#/">Microservice development</a></li>
                                    <li><a href="#/">Bigdata Development</a></li>
                                    <li><a href="#/">IOT development</a></li>
                                    <li><a href="#/">Application Integration</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li><a href="https://synectiks.com/scloud.html">Scloud</a></li>
                        <li><a href="https://synectiks.com/techpartners.html">Technology Partners</a></li>
                        <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu mega-bg">
                                <!--                             <li class="kopie"><a href="#">Dropdown2</a></li> -->
                                <li><a href="https://synectiks.com/about-us.html">About Synectiks</a></li>
                                <li><a href="https://synectiks.com/approach.html">Approach</a></li>
                                <li class="d-none"><a href="team-page.html">Team</a></li>
                                <li><a href="https://synectiks.com/career.html">Careers</a></li>
                                <li><a href="https://synectiks.com/faq.html">FAQ's</a></li>
                            </ul>
                        </li>
                        <li><a href="https://active.synectiks.com/contact.php">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>

    </header>
    <div class="header-image"><img src="assets/img/contact-us.png" alt="" style="width: 100%;">
        <h1 id="contact-h1" class="text-center" style="color: #F5F5F5; position: relative;
top: -2.8em; font-weight:900; font-size:3.5em;">Get In Touch</h1>
    </div>

    <div class="container-fluid">
        <div class="col-md-7">
            <div class="center-iframe">
                <h3 style="margin-left:10.7em;">Send Us a message</h3>
                <div class="container">
                    <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

                        <label>
                            <span class="error"><?= $fname_error ?></span>
                            <input placeholder="First name" id="fname" type="text" name="fname" value="<?= $fname ?>" tabindex="1" autofocus>

                        </label> <br>
                        <label>
                            <span class="error"><?= $lname_error ?></span>
                            <input placeholder="Last name" type="text" id="lname" name="lname" value="<?= $lname ?>" tabindex="1" autofocus>

                        </label> <br>
                        <label>
                            <span class="error"><?= $email_error ?></span>
                            <input placeholder="Company Email " type="text" id="email" name="email" value="<?= $email ?>" tabindex="2">

                        </label> <br>
                        <label>
                            <span class="error"><?= $company_error ?></span>
                            <input placeholder="Company" type="text" name="company" id="company" value="<?= $company ?>" tabindex="2">

                        </label> <br>
                        <label>

                            <span class="error"><?= $job_error ?></span>
                            <select name="job" id="job" value="<?= $job ?>">
                                <option value="default">What would you like to talk about?</option>
                                <option value="Synectiks's Solutions">Synectiks's Solutions</option>
                                <option value="Career Opportunities">Career Opportunities</option>
                                <option value="Partnership Inquiries">Partnership Inquiries</option>
                                <option value="Media">Media</option>
                            </select>
                        </label> <br>
                        <label>
                            <span class="error"><?= $phone_error ?></span>
                            <input placeholder="Phone" type="text" name="phone" id ="phone" value="<?= $phone ?>" tabindex="3">

                        </label> <br>
                        <!--        <label>-->
                        <!--            <input placeholder="Your Web Site starts with http://" type="text" name="url" value="--><?//= $url ?><!--" tabindex="4" >-->
                        <!--            <span class="error">--><?//= $url_error ?><!--</span>-->
                        <!--        </label>-->
                        <label>
                            <textarea placeholder="How can Synectiks' help?" value="<?= $message ?>" id="day" name="message"></textarea>
                        </label> <br>
                        <label>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </label>
                        <div class="success"><?= $success ?></div>
                    </form>
                    <a href="https://synectiks.com">https://synectiks.com</a>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <!--<h3 class="margin-call-bottom">Give us a call</h3>-->
            <h3 class="margin-call-bottom">Inquires:-</h3>
            <hr style="color: #FCFCFC;">
            <h4><b>USA</b></h4>
            <p class="office-line-height">Office: <span style="color: #83D4FA;">+1 (609) 608-0429</span></p>
            <p class="office-line-height">Toll Free: <span style="color: #83D4FA;">+1 (866) 369-7963</span></p>
            <p class="office-line-height">Sales: <span style="color: #83D4FA;">+1 (609) 608-0429 X 112</span></p>
            <h4 class="margin-top-contact"><b>INDIA</b></h4>
            <p class="office-line-height"><span style="color: #83D4FA;">+91 (40) 6555 4411</span></p>

            <h4 class="margin-call-bottom margin-top-contact">e-mail us</h4>
            <hr style="color: #FCFCFC;">

            <a href="mailto:info@synectiks.com"><p style="color: #83D4FA" class="office-line-height">
                    info@synectiks.com</p></a>
            <a href="mailto:support@synectiks.com"><p style="color: #83D4FA" class="office-line-height">
                    support@synectiks.com</p></a>
            <a href="mailto:operations@Synectiks.com"><p style="color: #83D4FA" class="office-line-height">
                    operations@Synectiks.com</p></a>
            <a href="mailto:finance@Sysnectiks.com"><p style="color: #83D4FA" class="office-line-height">
                    finance@Sysnectiks.com</p></a>
            <a href="mailto:hr@Sysnectiks.com"><p style="color: #83D4FA" class="office-line-height">
                    hr@Sysnectiks.com</p></a>
            <h4 class="margin-call-bottom margin-top-contact">Visit Us at the Office</h4>
            <hr style="color: #FCFCFC;">

            <h4><b>USA</b></h4>
            <p class="office-line-height">300 Alexander Park Drive,</p>
            <p class="office-line-height">Suite 215,</p>
            <p class="office-line-height">Princeton, NJ 08540</p>

            <h4 class="margin-top-contact"><b>INDIA</b></h4>
            <p class="office-line-height">3rd Floor, Plot # 25 & 26,</p>
            <p class="office-line-height">Survey # 71, Madhapur,</p>
            <p class="office-line-height">Hyderabad, IN 500 081</p>

            <h4 class="margin-top-contact"><b>SINGAPORE</b></h4>
            <p class="office-line-height">1 Sophia Road, #05-23,</p>
            <p class="office-line-height">Peace Center,</p>
            <p class="office-line-height">Singapore 228149</p>


        </div>

    </div>
</div>

<footer style="background: transparent">
    <div class="row" style="border-bottom: 1px solid #cecece; padding: 0.5em;">
        <div class="col-md-5">
            <div class="footer-menu padding-top">
                <ul class="footer-menu-list">
                    <li><a class="footer-link-menu" href="solutions.html">Solutions</a></li>
                    <li><a class="footer-link-menu" href="scloud.html">Scloud</a></li>
                    <li><a class="footer-link-menu" href="techpartners.html">Technology Partners</a></li>
                    <li><a class="footer-link-menu" href="career.html">Careers</a></li>
                    <li><a class="footer-link-menu" href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="social text-right padding-top"><a class="fa fa-twitter" title="" target="_blank"
                                                          href="https://twitter.com/synectiks"></a> <a
                        class="fa fa-facebook" title="" target="_blank" href="https://www.facebook.com/synectikscloud/"></a>
                <a class="fa fa-linkedin" title="" target="_blank" href="https://www.linkedin.com/company/7941089/"></a>
            </div>
        </div>
    </div>
    <div class="margin-footer"><h6 class="text-center grey-color">&COPY; Synectiks is Trademark of Synectiks Inc. All
            Right Reserved.</h6><h6 class="text-center grey-color">Terms & Conditions | Privacy Policy</h6></div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
