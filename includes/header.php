<?php include 'config.php'; ?>
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
<title>Animal Rescue | Index</title>
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
	<div class="header_section">
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
		<div class="banner_main">
			<div class="container">
				<div class="ram">
					<div class="row">
					    <div class="col-sm-12">
						    <h1 class="taital">Animal Rescue</h1>
						    <p class="consectetur_text">Street Animals Need Our Protection. <br> HELP THEM TODAY.</p>
						    <div class="banner_bt">
						    	<a href="" data-toggle="modal" data-target="#donate"><button class="read_bt">DONATE</button></a> 
						    </div>
					    </div>
				    </div>
				</div>
				<div class="box">
					<h1 class="numbar_text">01</h1>
					
				</div>
				
			</div>
			
		</div>
	</div>

