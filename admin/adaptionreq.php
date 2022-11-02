
		<!-- NAVBAR -->
		<?php include "header.php" ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php include "sidebar.php" ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
				
					<div class="">
						<div class="">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h2 class="panel-title"> <b>Adoption</b> </h2>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
					 <?php
                                    if(isset($_GET['sendMail'])){ 
                                        $name = $_GET['name'];
                                        $email = $_GET['email'];
                                        ?>
                                    <form action="../mailer/mail.php" method="post">
                                    <h3>Send Mail</h3>
                                           <input type="hidden" name="email" value="<?= $email?>">
                                           <input type="hidden" name="name" value="<?= $name?>">
                                                <input type="text" required name="subject" placeholder="Enter Subject" class="form-control">
                                            <br>
                                                <textarea required rows="3" name="emailBody" placeholder="Enter Email Body" class="form-control"></textarea>
                                            <br>
                                            <input type="submit" name="sendadMail" value="Send Mail" class="btn btn-warning">
                                    
                                    </form>
                                    <br>
                                    <br>
                                    <br>
                                   <?php }
                                ?>
    
									<table class="table table-striped">
										<thead class="table-dark">
											<tr>
												<th>#</th>
												<th>#</th>
												<th>Petname</th>
												<th>Age</th>
												<th>Phone</th>
												<th>Address</th>
												<th>Ever Adapted</th>
												<th>User Location</th>
												<th>Description</th>
												<th>Status</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $i = 0; 
                                         
                                            $fetchData = $database->getReference('adaptionRequests/')->getValue();
                                            
                                      
                                            if(!empty($fetchData)){
                                            
                                            foreach(array_reverse($fetchData)  as  $key => $row){ 
                                               
                                        ?>

											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><img src="../Controller/<?= $row['photoUrl']?>" height="90px" width="90px" alt=""></td>
											
												<td><?= $row['petName']?></td>
												<td><?= $row['petAge']?></td>
												<td><?= $row['phone']?></td>
												<td><?= $row['address']?></td>
												<td><?= $row['everadapt']?></td>
												<td><?= $row['location']?></td>
												<td><?= $row['description']?></td>
												<td><?= $row['status']?></td>
												<td><?= $row['date']?></td>
												<td> <a href="adaptionreq.php?email=<?= $row['userEmail']?>&name=<?= $row['userName']?>&sendMail=True" class="btn btn-success">Send Email</a>
                                                    </td>
											</tr>
										<?php } 
                                            }else{?>
                                                <tr>
                                                    <td>No Result Found...!</td>
                                                </tr>
                                            <?php } ?>
										</tbody>
									</table>
									
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Total Requests For Adaption     : <?= $i?></span></div>
										<!-- <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div> -->
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					
					</div>
				
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
	</div>
	<?php include "footer.php" ?>
	