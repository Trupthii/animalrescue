
	
<div class="bs-example">
    <div id="register" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
				<form action="Controller/register.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
					<div class="form-control">
						<input type="text" required name="name" placeholder="Enter Name" class="form-control">
					</div>
					<div class="form-control">
						<input type="text" required name="email" placeholder="Enter Email-ID" class="form-control">
					</div>
					<div class="form-control">
						<input type="text" required name="pass" placeholder="Enter pass" class="form-control">
					</div>
					<div class="form-control">
						<input type="number" required name="phone" placeholder="Enter Phone Number" class="form-control">
					</div>
					
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="userRegister" class="btn btn-primary">Register Now</button>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>	
	
<div class="bs-example">
    <div id="volmod" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Volunteer Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
				<form action="Controller/val.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
				
						<input type="hidden" name="name" value="<?=$name?>" placeholder="Enter Name" class="form-control">
						<input type="hidden" name="email" value="<?=$email?>" placeholder="Enter Email-ID" class="form-control">
			
					<div class="form-control">
						<label for="">Are you Willing to Serve With Us</label> <br>
						<input type="radio" name="val" value="Yes" id=""> Yes &nbsp;&nbsp;
 						<input type="radio" required name="val" value="No" id=""> No
					</div>
					<div class="form-control">
						<label for="">Have you helped any animals before</label> <br>
						<input type="radio" name="help" value="Yes" id=""> Yes &nbsp;&nbsp;
 						<input type="radio" required name="help" value="No" id=""> No
					</div>
					<div class="form-control">
						<label for="">Dou you have any Pet / Pets</label> <br>
						<input type="radio" required name="pet" value="Yes" id=""> Yes &nbsp;&nbsp;
 						<input type="radio" name="pet" value="No" id=""> No
					</div>
					<div class="form-control">
						<label for="">Can we send Email</label> <br>
						<input type="radio" required name="sendEmail" value="Yes" id=""> Yes &nbsp;&nbsp;
 						<input type="radio" name="sendEmail" value="No" id=""> No
					</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="valant" class="btn btn-primary">Be a Volunteer</button>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>	

<div class="bs-example">
    <div id="login" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
              <form action="Controller/verify.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
				
					<div class="form-control">
						<input type="text" name="email" required placeholder="Enter Email-ID" class="form-control">
					</div>
					<div class="form-control">
						<input type="password" name="pass" required placeholder="Enter pass" class="form-control">
					</div>
				
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="userLogin" class="btn btn-primary">Login Now</button>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>

<div class="bs-example">
    <div id="report" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Report </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
              <form action="Controller/report.php" enctype="multipart/form-data" method="post">
			  <input type="hidden"  name="name" value="<?= $name?>" placeholder="Enter Name" class="form-control">
					
						<input type="hidden" name="email" value="<?= $email?>" placeholder="Enter Email-ID" class="form-control">
					
                <div class="modal-body">
				
					<div class="form-control">
						<textarea required rows="3" name="place" placeholder="Enter Address" class="form-control"></textarea>
					</div>
					<div class="form-control">
						Choose Pet Image (if any)
						<input type="file" name="pet" placeholder="Enter pass" class="form-control">
					</div>
					<div class="form-control">
						<textarea name="desc" required placeholder="Enter Description about pet cruelty" rows="3" class="form-control"></textarea>
					</div>
				
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="report" class="btn btn-primary">Report Now</button>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>

<div class="bs-example">
    <div id="donate" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Donate Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
              <form action="Controller/donate.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
				<center><img src="images/qrCode.png" style="height:450px;width:300px;" alt=""></center>	
					<div class="form-control">
						<input type="text" required name="name" placeholder="Enter Name" class="form-control">
					</div>
					<div class="form-control">
						<input type="text" required name="transactionID" placeholder="Enter Transaction ID" class="form-control">
					</div>
					<div class="form-control">
						<input type="text" required name="ammount" placeholder="Enter Amount" class="form-control">
					</div>
				
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="donateMoney" class="btn btn-primary">Donate Now</button>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
