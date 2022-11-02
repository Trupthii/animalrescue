
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
									<h2 class="panel-title"> <b>Post Announcements</b> </h2>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
								<?php
								$i = 0;
								if(isset($_GET['token'])){ 
									$token = $_GET['token'];
									$ref = "announcement/";
									$getData = $database -> getReference($ref)
									 -> getChild($token)
									 -> getValue();
								?>

								<form action="../Controller/announcement.php" method="post">
									<input type="hidden" value="<?= $token?>" name="token" id="">
									<div class="modal-body">
										<div class="form-group">
											<input type="text" name="title" value="<?= $getData['title']?>" class="form-control" placeholder="Enter Content Title">
										</div>
										<div class="form-group">
											<textarea name="desc" id="" cols="30" rows="4" class="form-control" placeholder="Enter Description About Content"><?= $getData['desc']?></textarea>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" name="updateAnnouncement" class="btn btn-primary">UPDATE POST</button>
									</div>
								</form>
								
								<?php }else{  ?>
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Post Announcement
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Post Announcement</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../Controller/announcement.php" method="post">
      <div class="modal-body">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter Content Title">
        </div>
        <div class="form-group">
            <textarea name="desc" id="" cols="30" rows="4" class="form-control" placeholder="Enter Description About Content"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="postAnnouncement" class="btn btn-primary">POST</button>
      </div>
      </form>
    </div>
  </div>
</div>
									<table class="table table-striped">
										<thead class="table-dark">
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Description</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $i = 0; 
                                         
                                            $fetchData = $database->getReference('announcement/')->getValue();
                                            
                                      
                                            if(!empty($fetchData)){
                                            
                                            foreach(array_reverse($fetchData)  as  $key => $row){ 
                                        ?>
											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><?= $row['title']?></td>
												<td><?= $row['desc']?></td>
												<td><?= $row['a_date']?></td>
												<td>
												<a href="announcement.php?token=<?= $key?>" class="btn btn-success">Update</a>
												<a href="../Controller/delete.php?deleteAnnouncementtoken=<?= $key?>" class="btn btn-danger">Delete</a>
											
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
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Total Announcements     : <?= $i?></span></div>
										<!-- <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div> -->
									</div>
								</div>
								<?php } ?>
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
	