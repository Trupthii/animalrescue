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
<title>Animal Rescue | Adaption</title>
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
							<li class="last">  <a href="blogs.php">Success Stories</a></li>
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
            <h1 class="about_taital"><span style="color: #ffffff;font-family:'roboto',sans-serif;">Adopt</span> Pets </h1>
            
          </div>
        </div>
        <hr>
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
          
              <?php
				$i = 0;
				if(isset($_GET['petId'])){ 
					$token = $_GET['petId'];
					$ref = "adaption/";
					$getData = $database -> getReference($ref)
					 -> getChild($token)
					 -> getValue();
                }
				?>

                   <div class="row">
                    <div class="a col-sm-4">
                        <div class="gallery_blog">
                            <img class="a" src="Controller/<?= $getData['petImage']?>" style="max-width: 100%; height: 300px; width: 100%;">
                        </div>
                        <br>
                        <br>
                        <?php
                        if(isset($_SESSION['id'])){ 
                        ?>
                          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#adaptreq">Request</a>
                            
                          
                   <?php  }else{ ?>
                               <a href="" class="btn btn-primary" data-toggle="modal" data-target="#login">Login to Adopt</a>
                       <?php }
                        ?>
                    </div> 
                    <div style="position:relative;top:20px;" class="a col-sm-6">
                     
                    <div style="font-size:30px;" class="">
                         <span style="color: #ffffff;">Pet Name : 
                        </span> <?= $getData['petName']?>    
                    </div>
                    <div style="font-size:30px;" class="">
                         <span style="color: #ffffff;">Pet Age : 
                        </span> <?= $getData['age']?>    
                    </div>
                    <div style="font-size:30px;" class="">
                         <span style="color: #ffffff;">Pet Type : 
                        </span> <?= $getData['pettype']?>    
                    </div>
                    <div style="font-size:25px;" class="">
                         <span style="color: #ffffff;">Description : 
                        </span> <div style="width: 850px;
  height: 300px;
  overflow: scroll;"><?= $getData['desc']?></div>    
                    </div>
                    </div>
                  

          
            </div>
          </div>
        </div>
      </div>
    </div>
    


<div class="bs-example">
    <div id="adaptreq" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adoption Form </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
              <form action="Controller/reqestAdapt.php" method="post">

              <input type="hidden" name="petrequestToken" value="<?= $token?>">
              <input type="hidden" name="email" value="<?= $email?>">
              <input type="hidden" name="name" value="<?= $name?>">
              <input type="hidden" name="petAge" value="<?= $getData['age']?>">
              <input type="hidden" name="petName" value="<?= $getData['petName']?>">
              <input type="hidden" name="address" value="<?= $getData['address']?>">
              <input type="hidden" name="phone" value="<?= $getData['phone']?>">
              <input type="hidden" name="photoUrl" value="<?= $getData['petImage']?>">

                <div class="modal-body">
                    <div class="form-control">
						<input type="text" required name="loc" placeholder="Enter Yor Location" class="form-control">
					</div>
				
				<div class="form-control">
						<label for="">Have You Ever Adopted Pet Before ?</label> <br>
						<input type="radio" required name="everadapt" value="Yes From a Shelter" id=""> Yes From a Shelter <br>
						<input type="radio" required name="everadapt" value="Yes a Desi Dog from Street" id=""> Yes a Desi Dog from Street <br>
						<input type="radio" required name="everadapt" value="I Bought a Bread Dog" id=""> I Bought a Bread Dog <br>
 						<input type="radio" name="everadapt" value="No , I Never Adapted a dog Before" id=""> No , I Never Adopted a dog Before <br>
					</div>
					<div class="form-control">
						<textarea name="desc" required placeholder="Why Would you like to adopt" rows="3" class="form-control"></textarea>
					</div>
				
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="petrequest" class="btn btn-primary">Make Request</button>
                </div>
				</form>
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
    				<li class="footer-logo"><img src="images/logo.png"><span style="position:relative;top:42px;left:-33px;"><span style="color:orange;font-size:20px;font-weight:bold;">A - </span> <span style="color:orange;font-size:20px;font-weight:bold;">Rescue</span></li>
    				<li class="footer-logo"><img src="images/map-icon.png"><span class="map_text">Mangaluru</span></li>
    				<li class="footer-logo"><img src="images/call-icon.png"><span class="map_text">8123609321</span></li>
    				<li class="footer-logo"><img src="images/email-icon.png"><span class="map_text">mrrescuer@gmail.com</span></li>
    			</ul>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-6 col-md-6 col-lg-3">
    		        	<h2 class="shop_text">About Rescuer</h2>
    		        	<p class="dummy_text">Writer,environmentalist and a humane individual,tauseef is an inspiration toall,known as 'mr.Rescuer' he haas been working relentlessly to rescue animals in trouble in and around mangalore </p>
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
    							<div class="footer-img"><img src="images/footer-img1.png" style="width: 100%;"></div>
    							<div class="footer-img"><img src="images/footer-img2.png" style="width: 100%;"></div>
    						</div>
    						<div class="col-sm-6">
    							<div class="footer-img"><img src="images/footer-img3.png" style="width: 100%;"></div>
    							<div class="footer-img"><img src="images/footer-img4.png" style="width: 100%;"></div>
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
                        <li><a href="https://www.instagram.com/mr._.rescuer/?hl=en"><img src="images/twitter-icon.png"></a></li>
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

