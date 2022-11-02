
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
									<h2 class="panel-title"> <b>Users</b> </h2>
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
												<th>Action </th>
											</tr>
										</thead>
										<tbody>

                                        <?php
									
                                        $i = 0; 
                                         
                                           $users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);

                                            if(!empty($users)){
                                            
                                           foreach ($users as $user){ 
											   $data = json_encode($user, \JSON_PRETTY_PRINT);
										$getData = json_decode($data);
										
                                        ?>
											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><?= $getData-> displayName;?></td>
												<td><?= $getData-> email;?></td>
												<td><?= $getData-> phoneNumber;?></td>
                                                <td><a class="btn btn-danger" href="../Controller/delete.php?deleteusertoken=<?= $getData-> uid;?>">Delete</a></td>
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
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Total Users     : <?= $i?></span></div>
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
	