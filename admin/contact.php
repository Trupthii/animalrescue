
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
									<h2 class="panel-title"> <b>Content Us</b> </h2>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead class="table-dark">
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email-ID</th>
												<th>Phone Number</th>
												<th>Message</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $i = 0; 
                                         
                                            $fetchData = $database->getReference('contact/')
    											->getValue();
                                            
                                      
                                            if(!empty($fetchData)){
                                            
                                            foreach(array_reverse($fetchData)  as  $key => $row){ 
                                        ?>
											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><?= $row['name']?></td>
												<td><?= $row['email']?></td>
												<td><?= $row['phone']?></td>
												<td><?= $row['message']?></td>
												<td><?= $row['c_date']?></td>
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
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Total Contacted     : <?= $i?></span></div>
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
	