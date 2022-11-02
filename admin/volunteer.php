
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
									<h2 class="panel-title"> <b>Volunteer</b> </h2>
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
                                            <input type="submit" name="sendValMail" value="Send Mail" class="btn btn-warning">
                                    
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
												<th>Name</th>
												<th>Email-ID</th>
												<th>Can Willingly Serve</th>
												<th>Have Pet / Pets</th>
												<th>Helped Before</th>
												<th>Can Send Email</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $i = 0; 
                                         
                                            $fetchData = $database->getReference('Volunteer/')
                                            ->getValue();
                                            
                                      
                                            if(!empty($fetchData)){
                                            
                                            foreach(array_reverse($fetchData)  as  $key => $row){ 
                                        ?>
											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><?= $row['name']?></td>
												<td><?= $row['email']?></td>
												<td><?= $row['val']?></td>
												<td><?= $row['HavePet']?></td>
												<td><?= $row['help']?></td>
												<td><?= $row['sendEmail']?></td>
												<td><?= $row['c_date']?></td>
												<td><?php 
                                                    if($row['sendEmail'] == "Yes"){ ?>
                                                    <a href="volunteer.php?email=<?= $row['email']?>&name=<?= $row['name']?>&sendMail=True" class="btn btn-success">Send Email</a>
                                                    <?php }else{
                                                        echo "Not Allowed";
                                                    }
                                                ?></td>
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
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Total Volunteer     : <?= $i?></span></div>
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
	