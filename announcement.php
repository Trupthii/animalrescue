<?php include 'includes/config.php'; 

require 'includes/models.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Animal Rescue | Announcement</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!-- section banner start -->
	<div class="header-main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div><a href="index.php"><img src="images/logo.png"> <span style="position:relative;top:42px;left:-33px;"><span style="color:orange;font-size:50px;font-weight:bold;">A - </span> <span style="color:orange;font-size:35px;font-weight:bold;">Rescue</span>  </span> </a></div>
				</div>
				<div class="col-md-8">
					<div class="menu_text">
						<ul>
							
							<li class="last">  <a href="faq.php">FAQ</a></li>
							<li class="last">  <a href="blogs.php">Blog</a></li>
							<?php
							 if(!isset($_SESSION['id'])){ 
							?>
							<li class="last"> <a href="" data-toggle="modal" data-target="#login">Log in </a> | <a href="" data-toggle="modal" data-target="#register">Register</a> </li>
                            <?php
							 }else{ ?>
							 	<li class="last"> <a href="#lost">Report Lost Pet</a></li>
							 	<li class="last"> <a href="" data-toggle="modal" data-target="#report">Report Here</a></li>
                            
								<li class="last"> <a href="Controller/userLogout.php" >Log out </a></li>
	
							
							<?php }
							?>
							<li class="active">
							 <div id="myNav" class="overlay">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <div class="overlay-content">
                             	<a href="index.php">Home</a>
                                <a href="about.php">About</a>
                                <a href="adaption.php">Adoption</a>
                                <a href="laf.php">Lost and Found</a>
								<?php
								if(isset($_SESSION['id'])){ 
									
									$users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);
									$id = $_SESSION['id'];
									try {
										$user = $auth->getUser($id);
										$data = json_encode($user, \JSON_PRETTY_PRINT);
										$getData = json_decode($data);
										 $email = $getData-> email;
										 $name = $getData-> displayName;
										 $phone = $getData-> phoneNumber;
									} catch (Exception $e) {
										echo $e->getMessage();
									}
								?>
                                <a href="" data-toggle="modal" data-target="#volmod">Volunteer Form</a>
                                <a href="announcement.php">Announcements</a>
								<?php } ?>
								<a href="contact.php">Contact</a>
                              </div>
                            </div>
                             <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
                            </div>	
                            </li>
						</ul>
					</div>
			</div>
		</div>
    </div>
  <!-- section about start -->
  <div class="  ">
    <div class="container">
     <h1 style="float:right;" class=""><strong><span style="color: #f7941d;">Latest</span> Announcements</strong></h1>
        <hr>
        <br>
        <br>
        <br>
        <br>
        <br>
         <?php
                    $i = 0; 
                     
                        $fetchData = $database->getReference('announcement/')
    						->getValue();
                        
                                      
                        if(!empty($fetchData)){
                        
                        foreach(array_reverse($fetchData)  as  $key => $row){ 
							
                    ?>
                    <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading"><?= $row['title']?></h4>
                    <p><?= $row['desc']?></p>
                    <hr>
                    <p class="mb-0"><?= $row['a_date']?></p>
                    </div>

                   <?php } }  ?>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- section about end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<ul>
    				<li class="footer-logo"><img src="images/logo.png"><span style="position:relative;top:42px;left:-33px;"><span style="color:orange;font-size:20px;font-weight:bold;">A - </span> <span style="color:orange;font-size:20px;font-weight:bold;">Rescue</span>  </span></li>
    				
    				<li class="footer-logo"><img src="images/map-icon.png"><span class="map_text">Mangaluru</span></li>
    				<li class="footer-logo"><img src="images/call-icon.png"><span class="map_text">9982424536</span></li>
    				<li class="footer-logo"><img src="images/email-icon.png"><span class="map_text">mrrescuer@gmail.com</span></li>
    			</ul>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    		        	<h2 class="shop_text">About MrRescuer</h2>
    		        	<p class="dummy_text">Writer,environmentalist and a humane individual, working relentlessly to rescue animals in trouble,in and around Mangalore.</p>
    		        </div>
    		        <div class="col-sm-6 col-md-6 col-lg-3">

    		        	
    		        </div>
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    				    				
    		        </div>
    			<div class="col-sm-6 col-md-6 col-lg-3">
    				<h2 class="adderess_text">Instagram</h2>
    				<div class="footer-img">
    					<div class="row">
    						<div class="col-sm-6">
    							<div class="footer-img"><img src="images/rescuer2.png" style="width: 100%;"></div>
    							<div class="footer-img"><img src="images/rescuer1.png" style="width: 100%;"></div>
    						</div>
    						<div class="col-sm-6">
    							<div class="footer-img"><img src="images/rescuer3.png" style="width: 100%;"></div>
    							<div class="footer-img"><img src="images/rescuer4.png" style="width: 100%;"></div>
    						</div>
    					</div>
    				</div>
    			</div>
    			</div>
    	        </div>
    	        <div class="social-icon">
	        	    <div class="row">
	        		    <div class="col-sm-12">
	        			    <div class="icons">
	        				    <ul>
	        					     <li><a href="https://www.facebook.com/pages/category/Nonprofit-Organization/Mr-Rescuer-349043172372147/"><img src="images/fb-icon.png"></a></li>
	        					    <li><a href="https://www.instagram.com/mr._.rescuer/?hl=en"><img src="images/instaicon.png"></a></li>
	        					    <li><a href="#"><img src="images/google-icon.png"></a></li>
	        					    <li><a href="https://in.linkedin.com/in/tauseef-ahmed-31307784"><img src="images/linkedin-icon.png"></a></li>
	        				    </ul>
	        			    </div>
	        		    </div>
	        	    </div>
	            </div>
	            <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div>
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         </script> 


   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>
     
</body>
</html>

