
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
									<h2 class="panel-title"> <b>Post Blog</b> </h2>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
								<?php
								$i = 0;
								if(isset($_GET['blog'])){ 
								
								?>

								<form action="../Controller/postBlog.php" enctype="multipart/form-data" method="post">
									<div class="modal-body">
										<div class="form-group">
											<input type="text" required name="title"  class="form-control" placeholder="Enter Blog Title">
										</div>
										<div class="form-group">
											<label for="">Choose Poster Image</label>
											<input type="file" required name="file"  class="form-control" placeholder="Enter Blog Title">
										</div>
										<div class="form-group">
											<textarea name="blog" required id="summernote" class="form-control" placeholder="Enter Description About Content"></textarea>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" name="postBlog" class="btn btn-primary"> POST BLOG</button>
									</div>
									
								</form>

								    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <script>
      $('#summernote').summernote({
  
        tabsize: 2,
        height: 350
      });
    </script>
								<?php }else{  ?>
                                <!-- Button trigger modal -->
								<a href="blog.php?blog=blog"><button type="button" class="btn btn-primary">
									Post Blog
								</button></a>

									<table class="table table-striped">
										<thead class="table-dark">
											<tr>
												<th>#</th>
												<th>#</th>
												<th>Title</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                                        <?php
                                        $i = 0; 
                                         
                                            $fetchData = $database->getReference('blog/')->getValue();
                                            
                                      
                                            if(!empty($fetchData)){
                                            
                                            foreach(array_reverse($fetchData)  as  $key => $row){ 
                                        ?>
											<tr>
												<td><a href="#"><?= ++$i?></a></td>
												<td><img src="../Controller/<?= $row['posterfile']?>" height="90px" width="90px" alt=""></td>
												<td><?= $row['title']?></td>
												<td><?= $row['date']?></td>
												<td>
												<a href="../Controller/delete.php?deleteBlogtoken=<?= $key?>" class="btn btn-danger">Delete</a>
											
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
	