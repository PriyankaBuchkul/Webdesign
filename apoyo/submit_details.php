
<?php
include_once 'dbconnect.php';
$imgerr='';
$err_first_name="";
$err_last_name="";
$err_register=0;
if(isset($_POST['register']))
{

                    $name=$_POST['name'];
                    $dob=$_POST['dob'];
                 
                    $email=$_POST['email'];
              
                    $mobno=$_POST['mobno'];
                    $inquiry=$_POST['inquiry'];
                    $file = rand(1000,100000)."-".$_FILES['image']['name'];
                    $file_loc = $_FILES['image']['tmp_name'];
                    $file_size = $_FILES['image']['size'];
                    $file_type = $_FILES['image']['type'];
                    $folder="resume/";// upload directory

                    // new file size in KB
                    $new_size = $file_size/1024;
                    // new file size in KB

                    // make file name in lower case
                    $new_file_name = strtolower($file);
                    // make file name in lower case

                    $final_file=str_replace(' ','-',$new_file_name);

 
   $fileExt = strtolower(pathinfo($file,PATHINFO_EXTENSION)); // get image extension
  
   // valid image extensions
  
   // rename uploading image
          if(move_uploaded_file($file_loc,$folder.$final_file) )
                    {
              $re="INSERT INTO `apply`(`name`,`dob`,`email`,`mobno`,`inquiry`,`image`) VALUES ('".$name."','".$dob."','".$email."','".$mobno."','".$inquiry."','".$file."')";
                           $result = mysqli_query($DBcon,$re)
                            or die ("Could not insert! or Already inserted");
                            if($result)
                            {
                             echo '<script type="text/javascript">'; 
                            echo 'alert("Thank you! Register Successfully..");'; 
                            
                            echo '</script>';
                            } 
                    }

                          
                    
}
           
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apoyo Technologies</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/Logo/ab%20favicon.png" type="image/x-icon" />
   <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine2/style.css" />
<script type="text/javascript" src="engine2/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<html>
    
    
    
    
    
    
    
<body>
    

        <header>


            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                 <img src="img/Logo/at%20logo%20white.png" alt="Apoyotech logo" class="hidden-xs hidden-sm">
                               <img src="img/Logo/atlogosmall.png" alt="Apoyotech logo" class="visible-xs visible-sm"><span class="sr-only">Apoyo Technologies</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">
   
                    
                            <ul class="nav navbar-nav navbar-right">
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                              <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home </a>
                                   
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                                
                                
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">About Us </a>
                                  
                                  
                                   <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h5 ><a href="aboutus.html" class="h5char">About Company</a></h5>
                                                        <ul>
                                                            <li><a href="whoweare.html">Who We Are</a></li>
                                                            <li><a href="vision_values.html">Vision & Values</a></li>
                                                           <li><a href="Infrastructure.html">Infrastructure</a></li>
                                                            <li><a href="partnership.html">Partnership Opportunities</a></li>
                                                            <li><a href="terms_and_conditions.html">Terms & Conditions</a></li>
                                                            <li><a href="careers.html">Career At Apoyo Technologies</a></li>
                                                        </ul>
                                                        <h5><a href="Profile.html" class="h5char">Our Processes</a></h5>
                                                      
                                                        <ul>
                                                            <li><a href="Profile.html">Our Profile</a></li>
                                                            <li><a href="our-team.html">Our Team</a></li>
                                                              <li><a href="quality_coomitment.html">Quality Commitment</a></li>
                                                            <li><a href="Our_development_methodology.html">Our Development Methodology</a></li>
                                                            <li><a href="project_communication_startegy.html">Project Communication Strategy</a></li>
                                                                  <li><a href="contact_us.php">Contact Us</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h5 class="h5char">Why Choose Us</h5>
                                                        <ul >
                                                            <li><a href="">Established in 2010</a></li>
                                                            <li><a href="">Versatile engagement models</a></li>
                                                            <li><a href="">100% IP Confidentiality & Secure Process</a></li>
                                                            <li><a href="">Strong vertical focus</a></li>
                                                            <li><a href="">Rated 5.0 out of 5.0 by clients</a></li>
                                                            <li><a href="">50+ expert developers & programmers</a></li>
                                                            <li><a href="">63% Repeat Client ratio</a></li>
                                                            <li><a href="">500+ Satisfied Clients World Wide</a></li>
                                                            <li><a href="">24/7 availability for all time-zones</a></li>
                                                            <li><a href="">Expertise in handling Large Complex Projects</a></li>
                                                            <li><a href="">Versatile communication via Telephone, Email & MPD</a></li>
                                                            <li><a href="">10 Years of experience in Web and Mobile Development</a></li>
                                                          
                                                           
                                                            
                                                        </ul>
                                                     
                                                    </div>
                                                    <div class="col-sm-4">
                                                     <h5 ><a href="Indusrty_solution.html" class="h5char">Industry Solutions</a></h5>
                                                        <ul>
                                                           <li><a href="automotive-industry.html">Automotive Industry</a></li>
                                                            <li><a href="communication_services.html">Communication Services</a></li>
                                                             <li><a href="consumer-packaged-goods.html">Consumer Packaged Goods</a></li>
                                                              <li><a href="education.html">Education</a></li>
                                                           <li><a href="financial-services.html">Financial Services</a></li>
                                                          <li><a href="healthcare-services.html">Healthcare Services</a></li>
                                                            <li><a href="high-tech-services.html">Hi-Tech Services</a></li>
                                                            <li><a href="industrial-and-manufacturing-services.html">Industrial & Manufacturing Services</a></li>
                                                              <li><a href="LogisticsDistributionSolutions.html">Logistics & Distribution</a></li>
                                                           <li><a href="media_and_entairtenment.html">Media & Entertainment Services</a></li>
                                                           <li><a href="publishing-services.html">Publishing Services</a></li>
                                                      <li><a href="Retail-services.php">Retail Services</a></li>
                                                            <li><a href="tours_teavels.html">Tours & Travel Services</a></li>
                                                             <li><a href="utilities-services.html">Utilities Services</a></li>
                                                           
                                                        </ul>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                  
                                  
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                                
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Development</a>
                                  
                                  
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                          
                                                        <h5 ><a href="custom-software-development.html" class="h5char">Custom Software Development</a></h5>
                                                        <ul>
                                                             <li><a href="software-product-development.html">Product Development</a></li>
                                                            
                                                           <li><a href="saas-development.html">SaaS Development</a></li>
                                                            
                                                            <li><a href="crm-development.html">CRM Development</a></li>
                                                           
                                                             <li><a href="business-intelligence-application-development.html">BI App Development</a></li>
                                                            <li><a href="database-management-solutions.html">Database Management Development</a></li>
                                                            
                                                            <li><a href="software-consulting.html">Software Consulting</a></li>
                                                            
                                                           <li><a href="integration-solutions.html">Integration Solutions</a></li>
                                                            <li><a href="big-data-solutions.html">Big Data Solutions</a></li>
                                                            
                                                           
                                                     
                                                        </ul>
                                                        
                                                         <h5 ><a href="portal-development.html" class="h5char">Portal Development</a></h5>
                                                        <ul>
                                                             
                                                             <li><a href="food-portal-development.html"> Online Food Portal</a></li>
                                                             
                                                             <li><a href="social-networking-website-development.html">Social Networking Website Development</a></li>
                                                             
                                                             <li><a href="b2b-b2c-portal-development.html">B2B B2C Portal Development</a></li>
                                                            
                                                              <li><a href="daily-deal-portal-development.html">Daily Deal Portal Development</a></li>
                                                            
                                                              <li><a href="dating-portal-development.html">Dating Portal Development</a></li>
                                                             
                                                             <li><a href="job-portal-development.html">Job Portal Development</a></li>
                                                             <li><a href="online-marketplace-portal-development.html">Online Marketplace Portal Development</a></li>
                                                             
                                                             
                                                             <li><a href="price-comparison-portal-development.html">Price Comparison Portal Development</a></li>
                                                             <li><a href="real-estate-website-development.html">Real Estate Website Development</a></li>
                                                             

                                                        </ul>
                                                        
                                                    </div>
                                                    <div class="col-sm-4">
                                                       
                                                          <h5 ><a href="mobile-application-development.html" class="h5char">Mobile Application Development</a></h5>
                                                        <ul>
                                                            
                                                           <li><a href="android-application-development.html">Android Application Development</a> </li>
                                                          
                                                             <li><a href="iphone-application-development.html">iPhone Application Development</a> </li>
                                                      
                                                           
                                                            <li><a href="hybrid-mobile-app-development.html">Hybrid Mobile App Development</a> </li>
                                                            
                                                           <li><a href="iphone-games-development.html">iPhone Games Development</a> </li>
                                                            
                                                            <li><a href="ipad-games-development.html">iPad Games Development</a> </li>
                                                            
                                                            <li><a href="ipad-social-app-development.html">iPad Social App Development</a> </li>
                                                            
                                                            <li><a href="android-games-development.html">Android Games Development</a> </li>
                                                            <li><a href="ios-7-development.html">iOS 7 Development</a> </li>
                                                            
                                                           
                                                        </ul>
                                                           <h5 class="h5char">Support</h5>
                                                        <ul>
                                                            
                                                           
                                                             <li><a href="tech-support.html"></a>Tech Support</li>
                                                            
                                                           <li><a href="web-hosting.html">Web Hosting</a></li>
                                                             <li><a href="domain-registration.html">Domain Registration</a></li>
                                                           
                                                        </ul>
                                                    
                                                    </div>
                                                    <div class="col-sm-4">
                                                         
                                                      <h5 ><a href="web-design-and-development.html" class="h5char">Web Design & Development</a></h5>
                                                        <ul>
                                                           
                                                             <li><a href="ecommerce-development.html">eCommerce Development</a></li>
                                                            
                                                           
                                                             <li><a href="amazon-webstore-development.html">Amazon Webstore Development</a></li>
                                                           
                                                            <li><a href="custom-ecommerce-development.html">Custom eCommerce Development</a></li>
                                                            
                                                            <li><a href="drupal-ubercart-development.html">Drupal UberCart Development</a></li>
                                                            
                                                            <li><a href="opencart-development.html">OpenCart Development</a></li>
                                                           
                                                            <li><a href="zen-cart-development.html">Zen Cart Development</a></li>
                                                           
                                                            <li><a href="shopify-development.html">Shopify Development</a></li>
                                                           
                                                            <li><a href="magento-extension-development.html">Magento Extension Development</a></li>
                                                           
                                                             <li><a href="know-more-about-magento.html">Know More About Magento</a></li>
                                                           
                                                            <li><a href="redesign-magento-store.html">Redesign Magento Store</a></li>
                                                           <li><a href="upgrade-your-magento-store.html">Upgrade Your Magento Store</a></li>
                                                            
                                                          
                                                          
                                                        </ul>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                  
                                  
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                                
                                
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Advertising </a>
                                    
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                            
                                                <div class="col-md-4">
                                                   <h5 ><a href="digital-marketing.html" class="h5char">Digital Marketing</a></h5>
                                                        <ul>
                                                           <li><a href="corporate-identity-solutions.html">Corporate Identity Solutions</a></li>
                                                             <li><a href="marketing-collaterals.html">Marketing Collaterals</a></li> 
                                                           <li><a href="branding-solutions.html">Branding Solutions</a></li>
                                                            <li><a href="pay-per-click-marketing.html">Pay Per Click Marketing</a></li>
                                                          <li><a href="email-marketing.html">Email Marketing</a></li>
                                                            <li><a href="pay-per-click-marketing.html">Pay Per Click Marketing</a></li>
                                                           <li><a href="seo-services.html">SEO Services</a></li>
                                                            
                                                        </ul>
                                                </div>
                                                    
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Careers </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h5 class="h5char"> Pick A Skill</h5>
                                                        <ul>
                                                            <li><a href="hire-dedicated-developer.html">Hire Dedicated Developer</a></li>
                                                            <li><a href="hirephp-development.html">Hire PHP Developer</a></li>
                                                            <li><a href="hire-cakephp-developer.html">Hire CakePHP Developer</a></li>
                                                            <li><a href="hire-magento-developer.html">Hire Magento Developer</a></li>
                                                           <li><a href="hire-wordpress-developer.html">Hire WordPress Developer</a></li>
                                                            <li><a href="hire-joomla-developer.html">Hire Joomla Developer</a></li>
                                                           <li><a href="hire-drupal-developer.html">Hire Drupal Developer</a></li>
                                                             <li><a href="hire-iphone-developer.html">Hire iPhone Developer</a></li>
                                                             <li><a href="hire-android-developer.html">Hire Android Developer</a></li>
                                                           <li><a href="hire-dotnet-developer.html">Hire .Net Developer</a></li>
                                                           <li><a href="hire-flex-developer.html">Hire Flex Developer</a></li>
                                                          <li><a href="hire-web-designer.html">Hire Web Designer</a></li>
                                                            <li><a href="how-it-works.html">How it Works</a></li>
                                                           <li><a href="quick-trial.html">Quick Trial</a></li>
                                                        </ul>
                                                     
                                                    </div>
                                                    
                                                      <div class="col-sm-4">
                                                        <h5 class="h5char">Why Choose Us</h5>
                                                        <ul >
                                                         
                                                            <li><a href="">Versatile engagement models</a></li>
                                                            <li><a href="">100% IP Confidentiality & Secure Process</a></li>
                                                            <li><a href="">Strong vertical focus</a></li>
                                                            <li><a href="">Rated 5.0 out of 5.0 by clients</a></li>
                                                            <li><a href="">50+ expert developers & programmers</a></li>
                                                            <li><a href="">63% Repeat Client ratio</a></li>
                                                            <li><a href="">500+ Satisfied Clients World Wide</a></li>
                                                            <li><a href="">24/7 availability for all time-zones</a></li>
                                                            <li><a href="">Expertise in handling Large Complex Projects</a></li>
                                                            <li><a href="">Versatile communication via Telephone, Email & MPD</a></li>
                                                           
                                                          
                                                           
                                                            
                                                        </ul>
                                                     
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h5 ><a href="Indusrty_solution.html" class="h5char">Industry Solutions</a></h5>
                                                        <ul>
                                                           <li><a href="automotive-industry.html">Automotive Industry</a></li>
                                                            <li><a href="communication_services.html">Communication Services</a></li>
                                                             <li><a href="consumer-packaged-goods.html">Consumer Packaged Goods</a></li>
                                                              <li><a href="education.html">Education</a></li>
                                                           <li><a href="financial-services.html">Financial Services</a></li>
                                                          <li><a href="healthcare-services.html">Healthcare Services</a></li>
                                                            <li><a href="high-tech-services.html">Hi-Tech Services</a></li>
                                                            <li><a href="industrial-and-manufacturing-services.html">Industrial & Manufacturing Services</a></li>
                                                              <li><a href="LogisticsDistributionSolutions.html">Logistics & Distribution</a></li>
                                                           <li><a href="media_and_entairtenment.html">Media & Entertainment Services</a></li>
                                                           <li><a href="publishing-services.html">Publishing Services</a></li>
                                                      <li><a href="Retail-services.php">Retail Services</a></li>
                                                            <li><a href="tours_teavels.html">Tours & Travel Services</a></li>
                                                             <li><a href="utilities-services.html">Utilities Services</a></li>
                                                           
                                                        </ul>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                                
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="contact_us.php" >Contact</a>
                                    
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                            </ul>

                        </div>
                        <!--/.nav-collapse -->


                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>
    
    
    
       <div id="heading-breadcrumbs" style="    background: url(img/pageheaderimages/education-banner.png) center center repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Apply Now - Apoyo Technologies</h1>
                    
                    </div>
                    <div class="col-md-5">
                      

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

              <div class="col-md-12 pagenations">
                 <div class="pagenations1">
                   <a href="index.html" title="Apoyo Technologies">Home</a> 
                    <i class="fa fa-angle-double-right"></i>
                    <a href="aboutus.php" >Company</a> 
                    <i class="fa fa-angle-double-right"></i>
                    <a>Apply Now</a>
                 </div>
              </div>
                       <div class="container">
          <div class="row">
              
              <div class="col-md-12 values contact-us-now1">
                  
                    <div class="col-md-3">
                       <div class="contact-left-side">
                           <div class="usa-office clearfix"><h5> Apoyo Technologies:</h5></div>
                           <span>office No 302,</span>
                           <p>Mahalakshmi Metro,Tambadi Jogeshwari Temple lane.Lakshmi Road,Behind Dagdu seth Ganapathi Temple,Pune 2 </p>
                          
                           <p><b>Mobile :</b> <span>91 93725 99900</span></p>
						     <p><a style="color:#000;" href="mailto:info@apoyotech.com" target="_blank" rel="nofollow">info@apoyotech.com</a> </p>
                           <p><a style="color:#000;" href="mailto:info@apoyotech.com" target="_blank" rel="nofollow">info@apoyotech.com</a> </p>
                          





                       </div>
                    </div>
                    <div class="col-md-9">
                        <div class="contact-form-page ">
                            <div class="free-quote request-for-quote rfq-style-green clearfix">
                    <div class="text-center rfq-title">

                       <span>All fields are required *</span>
                       <div class="show-msg"></div>
                    </div>
                                
                                
                            
                                
                    <form name="contact-form"  action="#" method="post">
                       <?php
  if (isset($msg)) {
   echo $msg;
  }
                        ?>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                     <div class="col-md-6">
                         <label>Basic Information :</label>
                             <div class="form-group"> 
                      <input required type="text" class="form-control" name="name" placeholder="Enter Name">
                        </div>
                         
                         
                          <div class="form-group"> 
                        	<input required type="date" class="form-control" name="dob" placeholder="Date Of Birth ">
                  
                        </div>
                       
                        <div class="form-group"> 
                             <input required type="email" class="form-control" name="email" placeholder="Enter Email">
                        </div>
                       
                        
                        
                        
                        </div>   
                     <div class="col-md-6">
                        
                         <label></label>
                         <label></label>
                         <div class="form-group"> 
                         <input required type="text" class="form-control" name="mobno" placeholder="Enter mb">
                        </div>

                        <div class="form-group"> 
                       <textarea required class="form-control" name="inquiry" placeholder="address" rows="2" cols="50"></textarea>
                        </div>
                       
                                               <div class="form-group"> 
                            <input type="file" class="form-control" name="image" placeholder="Insert">
                        </div>
                        </div>   
                                
                                                <div class="form-group"> 
                        <button type="submit" name="register"id="contact-submit" class="btn btn-danger btn-lg" >Submit</button>
                        </div>
                                
                                </form>
                            </div>
                        
                        </div>
                    </div>
              </div>
              <div class="request-a-quote1 contact-us-now2 clearfix">
                 <div class="col-md-12 hire-dedicated">
                  <div class="Client-Reviews2">
                     <h3><b>What's</b> next?</h3>
                  </div>
                  <div class="col-md-2">
                     <i>1.</i> 
                     <p>We know the value of our customers, we will review your enquiry & contact them within 24 hours to discuss further requirements.  </p>
                  </div>
                  <div class="col-md-2">
                      <i>2.</i> 
                      <p>Our BDM (Business Development Manager) will be in touch with you and go through the requirements with you. </p>
                  </div>
                  <div class="col-md-2">
                     <i>3.</i> 
                     <p>The BDM discusses all the available options with you, ensuring your projects benefits from his expertise & experience. </p>
                  </div>
                  <div class="col-md-2">
                      <i>4.</i> 
                      <p>After discussions, we prepare technical specifications, estimates & development schedules for your approval.</p>
                  </div>
				  <div class="col-md-2">
                      <i>5.</i> 
                      <p>Upon approval, the BDM picks out the most suitable team to start work on your project.</p>
                  </div>
				  <div class="col-md-2">
                      <i>6.</i> 
                      <p>That's it! We initiate development and provide you with regular daily, weekly or monthly updates as to the progress. </p>
                  </div>
              </div>
              </div>
                           </div>
                </div>
            </div>
    
    
        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                     <div class="company-logo" >
                          <img src="img/Logo/at%20logo.png" alt="Best Website Development Company" title="Best Website  Development Company" >
                          <br /><br/> <hr class="hidden-md hidden-lg hidden-sm">
                        <div class="fot-contact">
                      
                            <p ><h5>Apoyo Technologies</h5>
                            Office No 302,Mahalakshmi Metro Square,Tambadi Jogeshwari Temple lane.Lakshmi Road, Behind Dagdu seth Ganapathi Temple,Pune 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Mail at: <a style="color:#fff;" href="mailto:info@apoyotech.com" target="_blank" rel="nofollow">info@apoyotech.com</a>
                               </p>
                            
                     
                      </div>
                      </div>
                   

                  

                </div>
                <!-- /.col-md-3 -->
	<div class="col-lg-3">
    				<div class="cuadro_intro_hover " >
						<p style="text-align:center; margin-top:20px;">
							<img src="img/footer/maxresdefault.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Web Design</h3>
							
							</div>
						</div>
					</div>
				
	    </div>
       <div class="col-lg-3">
    				<div class="cuadro_intro_hover " >
						<p style="text-align:center; margin-top:20px;">
							<img src="img/footer/web.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;" >Web Development</h3>
								
							
							</div>
						</div>
					</div>
				
	    </div>
                
                
                
                <style>
                
                .cuadro_intro_hover{
        padding: 0px;
		position: relative;
		overflow: hidden;
		height: 200px;
	}
	.cuadro_intro_hover:hover .caption{
		opacity: 1;
		transform: translateY(-150px);
		-webkit-transform:translateY(-150px);
		-moz-transform:translateY(-150px);
		-ms-transform:translateY(-150px);
		-o-transform:translateY(-150px);
	}
	.cuadro_intro_hover img{
		z-index: 4;
	}
	.cuadro_intro_hover .caption{
		position: absolute;
		top:150px;
		-webkit-transition:all 0.3s ease-in-out;
		-moz-transition:all 0.3s ease-in-out;
		-o-transition:all 0.3s ease-in-out;
		-ms-transition:all 0.3s ease-in-out;
		transition:all 0.3s ease-in-out;
		width: 100%;
	}
	.cuadro_intro_hover .blur{
		background-color: rgba(0,0,0,0.7);
		height: 300px;
		z-index: 5;
		position: absolute;
		width: 100%;
	}
	.cuadro_intro_hover .caption-text{
		z-index: 10;
		color: #fff;
		position: absolute;
		height: 300px;
		text-align: center;
		top:-20px;
		width: 100%;
	}
                </style>     
                
                
                
                
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                   
            <h3 style="color: #3c763d"><span>We Are Hiring</span></h3>  
                      <br>
                      <div class="wearehiring">
                         <ul>
                             
                             
                            <li>
                                
                                
                                    <a href="jobopenings.php"  class="fancy-btn"style="color: white" >Current Job Openings</a> <br>
                            </li>
                             <br>
                            <li>
                                <a href="jobopenings.php"  class="fancy-btn "style="color: white" >Post Your Resumes</a> <br>
                                
                         </ul>
                      </div>
                
                </div>
                
                
                <!-- /.col-md-3 -->



                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy;  2017.Apoyo Technologies</p> 
                    <p class="pull-right">Powered By <a href="https://apoyotech.com">Apoyo Technologies</a>

                </div>
            </div>
        </div>
        <!-- /#copyright -->
    </div>
    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>
 <script src="css/bootstrap-hover-dropdown.js"></script>
    <script src="css/bootstrap-hover-dropdown.min.js"></script>
    

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>



</body>
</html>