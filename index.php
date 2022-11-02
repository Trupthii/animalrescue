<?php
require 'includes/header.php';
require 'includes/models.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<!-- section banner end -->
	<!-- section about start -->
	<div class="about_section">
		<div class="about_text">
			<div class="container">
				<h1 class="about_taital_1"><strong><span style="color: #f7941d;">Success Stories</span></strong></h1>
				<p class="magna_text">Watch the incredible stories of the amazing souls we save.The most joyous experience is witnessing the transformation of sick and injured animals. From the day these beautiful beings are admitted, sometimes with horrific injuries, we provide the medical treatment to recover, and the love and care to thrive.</p>
				<div class="about_bt">
					<a href="blogs.php"><button class="more_bt">Read Stories</button></a>	
				</div>
				<div class="about">
					<h1 class="numbar_text">02</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- section about end -->
	<!-- section gallery start -->
    <div class="gallery_main layout_padding">

    <link href="assets/css/soon.css" rel="stylesheet">
	
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    	<div class="container">
			  <section id="header">
        
         <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
    </section>
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="about_taital"><strong><span style="color: #ffffff;">A lifeline for</span> Ownerless Animals</strong></h1>
				    <p class="sed_text">Since 2002 we have shared our helpline number throughout Mangalore city, resulting in the rescue of thousands of animals each year and an incredible increase in community awareness.

Whether a dog has been hit by a car, or a calf has fallen in a ditch, we are here to help the ownerless animals.

From early morning until past midnight, whenever we receive a report, our helpline team assesses the condition of the animal via images, and dispatches our rescue teams so that animals with the most life-threatening problems are given greatest priority.
</p>

    			</div>
    		</div>
    		<div class="gallery_images">
    			<div class="row">
				  <?php
                    $i = 0; 
                     
                        $fetchData = $database->getReference('adaption/')
    						->getValue();
                        
                                      
                        if(!empty($fetchData)){
                        
                        foreach(array_reverse($fetchData)  as  $key => $row){ 
							if($i == 4){
								break;
							}
                    ?>
    				<div class="col-sm-5">
						<div class="gallery_blog">
                           <img src="Controller/<?= $row['petImage']?>" style="max-width: 100%; height: 300px; width: 100%;">
                        <div class="overlay">
                            <div class="text"><strong>PuppyDogPetAnimal</strong></div>
                        </div>
					    </div>
    				</div>
					<?php $i++; } 
                                            }else{?>
                                                <tr>
                                                    <td>No Result Found...!</td>
                                                </tr>
                                            <?php } ?>
    			
    			</div>
    		</div>
    		
    	</div>
		
    </div>
    <div class="gallery_section_2">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-8">
    				<h1 class="pet_taital">PET ADOPTION:Be a part of something beautiful.</h1>
    				<p class="lorem_text">Some of the animals we rescue don’t have a home to go back to: they might be abandoned, orphans and too young to make it on their own, or they might come from difficult areas. They stay with us until they find a forever home.

Have you fallen in love with one of the animals on this page? Read more about them and apply to adopt today!

Adoptions are currently only available within Mangalore.</p>
    			<div class="banner_bt">
				<a href="adaption.php"><button class="dog_bt">Show More Pets	</button></a>	
				</div>
				<div class="box_3">
					<h1 class="numbar">03</h1>
				</div>
    			</div>
    			<div class="col-sm-4">
    				<div class="dog_img"><img src="images/dog-img.png" style="max-width: 100%;"></div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- section gallery end -->
	<!-- section get in touch start -->
	<?php if(isset($_SESSION['id'])){  ?>
    <div id="lost" class="touch_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
				    <h1 class="get_taital"><strong><span style="color: #ffffff;">Report</span>  Lost Pet</strong></h1>
    			</div>
    		</div>
    		<div class="email_box">
			
                       <div class="container">
                    <div class="input_main">
                          <form action="Controller/lostAndFoundForm.php" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                              <input type="text" required class="email-bt" placeholder="Enter Your Name" name="name">
                            </div>
                            <div class="form-group">
                              <input type="text" required class="email-bt" placeholder="Enter Your Phone Number" name="phone">
                            </div>
							<div class="form-group">
                              <input type="text" required class="email-bt" placeholder="Enter  Your Pet Lost Location" name="lostLocation">
                            </div>
                            <div class="form-group">
                              <input type="file" required class="email-bt" placeholder="Enter Your Email" name="petImage">
                            </div>
                            <div class="form-group">
                                <textarea required class="massage-bt" placeholder="Enter Pet Description" rows="5" id="comment" name="desc"></textarea>
                            </div>
                          
                       </div> 
                       <div class="send_btn">
                        <button type="submit" name="sendlostandfoundForm" class="main_bt">Send Report</button>
                       </div> 
					    </form>                    
                    </div>
    		</div>
    	</div>
    </div>

	<?php } ?>
	
	<div class="touch_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
				    <h1 class="get_taital"><strong><span style="color: #ffffff;">Contact</span>  Us</strong></h1>
    			</div>
    		</div>
    		<div class="email_box">
			
                       <div class="container">
                    <div class="input_main">
                          <form action="Controller/contactForm.php" method="post">
                            <div class="form-group">
                              <input type="text" required class="email-bt" placeholder="Enter Your Name" name="name">
                            </div>
                            <div class="form-group">
                              <input type="text" required class="email-bt" placeholder="Enter Your Phone Number" name="phone">
                            </div>
                            <div class="form-group">
                              <input type="text" required class="email-bt" placeholder="Enter Your Email" name="email">
                            </div>
                            
                            <div class="form-group">
                                <textarea required class="massage-bt" placeholder="Enter Massage" rows="5" id="comment" name="message"></textarea>
                            </div>
                          
                       </div> 
                       <div class="send_btn">
                        <button type="submit" name="sendContactForm" class="main_bt">Send</button>
                       </div> 
					    </form>                    
                    </div>
    		</div>
    	</div>
    </div>

<?php require 'includes/footer.php'; ?>