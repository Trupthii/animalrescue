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
<title>Animal Rescue | Adoption</title>
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
  <!-- section gallery start -->
    <div class="gallery_main layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="about_taital"><strong><span style="color: #ffffff;">ADOPT!</span> Don't Shop</strong></h1>
            <p class="sed_text">Some of the animals we rescue don’t have a home to go back to:they might be abandoned, orphans and too young to make it on their own, or they might come from difficult areas. They stay with us until they find a forever home.

Have you fallen in love with one of the animals on this page? Read more about them and apply to adopt today!

Adoptions are currently only available within Mangalore.</p>

          </div>
        </div>
        <style>
          .a{
            border-radius: 50px 20px;
             transition: 0.5s all ease-in-out;
          }
          .a:hover{
            transform: scale(0.99);
          }
        </style>
        <div class="gallery_images">
          <div class="row">
            <?php
                    $i = 0; 
                     
                        $fetchData = $database->getReference('adaption/')
    						        ->getValue();          
                        if(!empty($fetchData)){
                        foreach(array_reverse($fetchData)  as  $key => $row){ 
						
                    ?>
                   
                    <div class="a col-sm-4">
                       <a href="viewpet.php?petId=<?= $key?>">
                        <div class="gallery_blog">
                            <img class="a" src="Controller/<?= $row['petImage']?>" style="max-width: 100%; height: 300px; width: 100%;">
                        </div>
                      </a>
                    </div>
                  
					<?php $i++; 
           } 
            }else{?>
                <tr>
                    <td>No Result Found...!</td>
                </tr>
            <?php } ?>

          
            </div>
          </div>
        </div>
      </div>
    </div>
   
  <!-- section gallery end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<ul>
    				<li class="footer-logo"><img src="images/logo.png"><span style="position:relative;top:42px;left:-33px;"><span style="color:orange;font-size:20px;font-weight:bold;">A - </span> <span style="color:orange;font-size:20px;font-weight:bold;">Rescue</span>  </span></li>
    				<li class="footer-logo"><img src="images/map-icon.png"><span class="map_text">Mangalore</span></li>
    				<li class="footer-logo"><img src="images/call-icon.png"><span class="map_text">8123609321</span></li>
    				<li class="footer-logo"><img src="images/email-icon.png"><span class="map_text">mrrescuer@gmail.com</span></li>
    			</ul>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    		        	<h2 class="shop_text">About Me</h2>
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
	            <div class="copyright">2019 All Rights Reserved. <a href="https://html.design"></a></div>
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

