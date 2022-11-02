
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
								$i = 0;
								if(isset($_GET['token'])){ 
									$token = $_GET['token'];
									$ref = "adaption/";
									$getData = $database -> getReference($ref)
									 -> getChild($token)
									 -> getValue();
								?>

    <form action="../Controller/adaption.php" enctype="multipart/form-data" method="post">
      <div class="modal-body">
      
		<input type="hidden" value="<?= $token?>" name="token" id="">
        <div class="form-group">
            <input type="text" name="petName" value="<?= $getData['petName']?>" class="form-control" placeholder="Enter Pet Name">
        </div>
        <div class="form-group">
            <input type="text" name="age" value="<?= $getData['age']?>" class="form-control" placeholder="Enter Pet age">
        </div>
        <div class="form-group">
            <input type="text" name="pettype" value="<?= $getData['pettype']?>" class="form-control" placeholder="Enter Pet Type ex.Cat , Dog etc..">
        </div>
        <div class="form-group">
            <input type="text" name="phone" value="<?= $getData['phone']?>" class="form-control" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <input type="text" name="address" value="<?= $getData['address']?>" class="form-control" placeholder="Enter Address">
        </div>
       
        <div class="form-group">
            <textarea name="desc" id="" cols="30" rows="4" class="form-control" placeholder="Enter Description About Pet"><?= $getData['desc']?></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatepet" class="btn btn-primary">Update</button>
      </div>
      </form>
								
								<?php }else{  ?>
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Pet for Adaption
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add Pets</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../Controller/adaption.php" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <div class="form-group">
            <input type="text" name="petName" class="form-control" placeholder="Enter Pet Name">
        </div>
        <div class="form-group">
            <input type="text" name="age" class="form-control" placeholder="Enter Pet age">
        </div>
        <div class="form-group">
            <input type="text" name="pettype" class="form-control" placeholder="Enter Pet Type ex.Cat , Dog etc..">
        </div>
        <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Enter Address">
        </div>
        <div class="form-group">
            <input type="file" name="petImage" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="desc" id="" cols="30" rows="4" class="form-control" placeholder="Enter Description About Pet"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="postpet" class="btn btn-primary">POST</button>
      </div>
      </form>
    </div>
  </div>
</div>
									<table class="table table-striped">
										<thead class="table-dark">
											<tr>
												<th>#</th>
												<th>#</th>
												<th>Petname</th>
												<th>Age</th>
												<th>Phone</th>
												<th>Address</th>
												<th>Description</th>
												<th>Stutus</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $i = 0; 
                                         
                                            $fetchData = $database->getReference('adaption/')->getValue();
                                            
                                      
                                            if(!empty($fetchData)){
                                            
                                            foreach(array_reverse($fetchData)  as  $key => $row){ 
                                        ?>
											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><img src="../Controller/<?= $row['petImage']?>" height="90px" width="90px" alt=""></td>
												<td><?= $row['petName']?></td>
												<td><?= $row['age']?></td>
												<td><?= $row['phone']?></td>
												<td><?= $row['address']?></td>
												<td><?= $row['desc']?></td>
												<td><?= $row['stutus']?></td>
												<td><?= $row['date']?></td>
												<td>
												<a href="adaption.php?token=<?= $key?>" class="btn btn-success">Update</a>
												<a href="../Controller/delete.php?deletepetadaptiontoken=<?= $key?>" class="btn btn-danger">Delete</a>
											
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
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Total Pets For Adaption     : <?= $i?></span></div>
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
	